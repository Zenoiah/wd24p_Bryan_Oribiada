<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\user1;

class QueuController extends Controller
{
    function getuser(){
        return user1::all()->sum('id');
    }
}
