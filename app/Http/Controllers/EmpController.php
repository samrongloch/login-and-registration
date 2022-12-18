<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmpController extends Controller
{
   public function index(){

    $data['user']=User::get();
    //dd($data); //is debug
    return view('employee.index', $data);
   }
}
