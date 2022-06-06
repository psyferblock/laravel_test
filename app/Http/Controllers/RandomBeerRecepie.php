<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class RandomBeerRecipe extends Controller;
{
    //
    public function RandomRecipe(){
        $response=json_decode(Html::get("https://api.punkapi.com/v2/beers"));
        $recepie=$response->attachments[0]->text;
        return $response()->json([
            "status" => "Success",
            "message" => $response
        ], 200);

        
    }
}
