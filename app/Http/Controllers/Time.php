<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Time extends Controller
{
    //
    
    public function GetTime (){
        $time=strtotime('14-04-1732');
        $current_time=new date();

        $difference=$current_time - $time;
        echo $difference;
    }
}


