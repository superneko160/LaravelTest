<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WellcomeController extends Controller
{
    public function index(): View
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }
}
