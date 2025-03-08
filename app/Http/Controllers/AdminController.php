<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function chat() {
        return view('admin.chat'); // Make sure this view exists in resources/views/admin/chat.blade.php
    }

    public function email() {
        return view('admin.email'); // Ensure this file exists
    }

    public function profile() {
        return view('admin.profile'); // Ensure this file exists
    }

    public function analytics() {
        return view('admin.analytics'); // Ensure this file exists
    }

    public function addBranch() {
        return view('admin.addBranch'); // Create this view file in resources/views/admin/
    }
    
    public function deleteBranch() {
        return view('admin.deleteBranch'); // Create this view file in resources/views/admin/
    }
    
}
