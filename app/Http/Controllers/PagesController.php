<?php

namespace App\Http\Controllers;

class PagesController
{
    public function index()
    {
        return view('unix.pages.index');
    }

    public function quemSomos()
    {
        return view('unix.pages.quem-somos');
    }

    public function unixconta()
    {
        return view('unix.pages.unixconta');
    }

    public function unixinvesti()
    {
        return view('unix.pages.unixinvesti');
    }
}
