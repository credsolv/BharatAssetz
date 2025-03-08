<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    
    public function propertyList() {
        return view('admin.propertylist'); // Ensure this file exists
    }

    public function propertyUploads() {
        return view('admin.propertyuploads'); // Ensure this file exists
    }
}
