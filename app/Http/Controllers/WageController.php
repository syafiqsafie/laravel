<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wage;

class WageController extends Controller
{
    public function index()
    {
    	$wage = Wage::all();
    	return view('person.index',['person' => $person]); 
    	//return response()->json($wage);
    }

    public function bulk()
    {
    	// $total = 0;

    	// for($i = 0; $i < 10; $i++)
    	// {
    	// 	$total += $i;
    	// }
    	// return response()->json($total);

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for($i = 0; $i < 20; $i++)
        {
        	$randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return response()->json($randomString);
    }
}
