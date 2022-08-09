<?php

namespace App\Http\Controllers;

class ArticleController
{
    public function getAll()
    {
        // db get all post
        return json_encode([
            ['id' => 1],
            ['id' => 2],
            ['id' => 3]
        ]);
    }

    public function get(int $id)
    {
        // db get post by id
        return json_encode(['id' => $id]);
    }

    public function put(int $id)
    {
        // db edited post by id
        return json_encode(['id' => $id]);
    }

    public function post()
    {
        // db create post
        return json_encode(['id' => 4]);
    }
}
