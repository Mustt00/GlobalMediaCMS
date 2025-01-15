<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.auth.dashboard');  // Burada doğru view dosyasının çağrıldığından emin olun
    }

}
