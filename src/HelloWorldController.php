<?php

namespace Wisp1999\HelloWorld;

use App\Http\Controllers\Controller;
use Wisp1999\HelloWorld\Model\Test;

class HelloWorldController extends Controller
{
    public function index()
    {

        $title = Test::find(1)->get();
        $message = $title[0]['title'];

        return view('HelloWorld::welcome', compact('message'));
    }
}
