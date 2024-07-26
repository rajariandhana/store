<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Retrieve data necessary for the dashboard, such as orders
        // For example, to get all orders:
        // $orders = Order::all();

        // Pass the data to the dashboard view
        return view('admin.dashboard');
    }
}
