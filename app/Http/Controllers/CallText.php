<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CallText extends Controller
{
    //
    public function callText(){

        $response = json_decode(Http::get("https://icanhazdadjoke.com/slack"));

        $findText= $response ->attachments[0]->text;
        return $response ()->json([
            "status" => "Success",
            "message" => $response
        ], 200);

    }
}

