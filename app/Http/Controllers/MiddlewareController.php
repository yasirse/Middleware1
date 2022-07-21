<?php
namespace App\Http\Controllers;  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\view;


class MiddlewareController extends Controller
{
    
   
    public function test(Request $request,$age)
    {
        //Echo "age=".$age;
        $request->session()->put('my_name','Virat Gandhi');
        return view('yasir',['age' =>$age]);
    }
}
