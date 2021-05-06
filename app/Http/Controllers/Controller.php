<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Client;

class Controller extends BaseController
{
    public function client(){
        $client=Client::all();
        return $client;
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
