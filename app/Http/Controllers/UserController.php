<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
        $monthlyReport = Order::all();
        dd($monthlyReport);
        return view('dashboard');
    }

    public function suppliers()
    {
        $users = User::where('type','supplier')->get();
        return view('suppliers.index',compact('users'));
    }

    public function index()
    {
        $users = User::where('type','!=','supplier')->get();
        return view('customers.index',compact('users'));
    }

    public function show(User $user)
    {

        return $user->type != "supplier" ?
        view('customers.show',compact('user'))
        : view('suppliers.show',compact('user'));
    }

    public function requestProduct(User $user)
    {
        return view('suppliers.request',compact('user'));
    }

    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('suppliers.index');
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return back();
    }
}
