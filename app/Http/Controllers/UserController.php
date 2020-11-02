<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use App\Order;
use App\OrderProduct;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {

        $totalOrders = Order::all()->count();
        $totalCustomers = User::where('type', 'customer')->count();
        $bestProducts = $this->bestProducts();
        $products = Product::all()->count();
        $overAllSales = $bestProducts->sum('totalSales');
        return view('dashboard', compact('totalOrders', 'totalCustomers', 'bestProducts', 'overAllSales', 'products'));
    }
    public function adminProfile()
    {
        $user = Auth::user();
        return view('accounts.index', compact('user'));
    }
    public function suppliers()
    {
        $users = User::where('type', 'supplier')->get();
        return view('suppliers.index', compact('users'));
    }

    public function index()
    {
        $users = User::where('type', 'customer')->paginate(10);
        return view('customers.index', compact('users'));
    }
    public function orders($id)
    {
        $user = User::find($id);
        return view('customers.orders', compact('user'));
    }
    public function show($user)
    {
        $user = User::find($user);
        return $user->type != "supplier" ?
            view('customers.show', compact('user'))
            : view('suppliers.show', compact('user'));
    }

    public function requestProduct(User $user)
    {
        return view('suppliers.request', compact('user'));
    }

    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('suppliers.index');
    }

    public function update(UserRequest $request, User $user)
    {
        if($request->has('currentPassword')){
            if(!Hash::check($request->currentPassword,$user->password)){
                return back()->withErrors(['currentPassword'=>'You enter an incorrect password.']);
             }
             $password = [
                 'password' => Hash::make($request->validated()['password'])
             ];
             $newUserDeatails = collect(collect($request->validated())->except('password'))->merge($password)->all();

             $user->update($newUserDeatails);
        }else{
            $user->update($request->validated());
        }

        return back();
    }

    public function salesPerWeek()
    {
        $salesPerWeek =  OrderProduct::all()->filter(function ($orderProduct) {
            return $orderProduct->order->status == "completed" &&
                $orderProduct->order->updated_at->format('n') == date('n');
        })->groupBy(function ($orderProduct) {
            return Carbon::parse($orderProduct->order->updated_at)->format('W');
        })->mapToGroups(function ($item, $key) {
            return [$key => $item->sum('sub_total')];
        })->map(function ($orderDetail) {
            return  $orderDetail->first();
        })->sortKeys();
        foreach($this->weeksOfMonth() as $week){
            $weekSale[$week] = 0;
            foreach($salesPerWeek as $key => $sale){
                if($week == $key){
                    $weekSale[$week] = $sale;
                }
            }
        }

        return response(['data' => collect($weekSale)->values()]);
    }

    private function bestProducts()
    {
        return OrderProduct::all()
        ->filter(function($orderProduct){
            return $orderProduct->order->status == "completed";
        })->mapToGroups(function ($item) {
            return [
                $item->product->name => $item,
            ];
        })->mapToGroups(function ($item, $key) {
            return [
                $key => array(
                    'totalSales' => $item->sum('sub_total'),
                    'totalQty' => $item->sum('quantity')
                ),
            ];
        })->map(function ($orderDetail) {
            return  $orderDetail->first();
        })->sortByDesc('totalQty');
    }
    public function weeksOfMonth():array {
        $yearAndMonth = date('Y/m/');

        return array(
            date('W',strtotime($yearAndMonth .'07')),
            date('W',strtotime($yearAndMonth .'14')),
            date('W',strtotime($yearAndMonth .'21')),
            date('W',strtotime($yearAndMonth .'28')),
        );
    }


}
