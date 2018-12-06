<?php

namespace Wisp\HelloWorld;

use App\Http\Controllers\Controller;
use Wisp\HelloWorld\Model\Test;

class HelloWorldController extends Controller
{
    public function index()
    {

        $title = Test::find(1)->get();
        $message = $title[0]['title'];

        return view('HelloWorld::welcome', compact('message'));
    }
}
