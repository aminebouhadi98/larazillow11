<?php

namespace App\Http\Controllers;


use App\Models\Listing;
use Illuminate\Http\Request;

class IndexContoller extends Controller
{
    public function index(){
       
        return inertia(
            'Index/Index',
            [
                "message" => "Hello from Laravel"
            ]
        );
    }
    public function show(){
        return inertia('Index/Show');
    }
}
