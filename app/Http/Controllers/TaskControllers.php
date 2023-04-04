<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Models\Task;

class TaskControllers extends Controller
{
    public function index(){
        return view('tasks');
    }
    public function store(Request  $request){
        DB::table('task')->insert(['name' => $request['name']
        ]);
        return 'Store';
    }
}
