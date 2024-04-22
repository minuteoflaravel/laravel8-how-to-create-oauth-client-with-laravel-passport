<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function createSomething($prop)
    {
        $this->doSomething($prop);
    }

    public function updateSomething($prop)
    {
        $this->doSomethingElse();
    }

    public function doSomething($prop)
    {
        echo 'do something';
    }

    public function doSomethingElse($prop){
        echo 'do something else';
    }
}
