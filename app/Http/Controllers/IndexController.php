<?php

namespace App\Http\Controllers;

class IndexController
{
    public function __invoke()
    {
        return view('fakes.index');
    }
}
