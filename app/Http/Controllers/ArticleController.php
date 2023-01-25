<?php

namespace App\Http\Controllers;

use Core\Http\Response\Response;

class ArticleController
{
    public function getAll()
    {
        // get all post on DB
        Response::json([
            ['id' => 1],
            ['id' => 2],
            ['id' => 3]
        ]);
    }

    public function get(int $id)
    {
        // get post by id on DB
        Response::json(['id' => $id]);
    }

    public function put(int $id)
    {
        // edited post by id on DB
        Response::json(['id' => $id]);
    }

    public function post()
    {
        // create post on DB
        Response::json(['id' => 4]);
    }
}
