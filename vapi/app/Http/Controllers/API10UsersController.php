<?php

namespace App\Http\Controllers;

use App\CustomClasses\Variables;
use Illuminate\Http\Request;

class API10UsersController extends Controller
{
    public function flag()
    {
        return response(json_encode(array("message"=>"-----log and monitor all the requests----","flag"=>base64_decode(Variables::getAPI10Flag()))), 200)
            ->header('Content-Type', 'application/json');
    }
}
