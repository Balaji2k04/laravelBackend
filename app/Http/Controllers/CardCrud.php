<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardCrud extends Controller
{
    private $database;

    public function __construct()
    {
        $this->database = \App\Services\FirebaseService::connect();
    }
    public function create(Request $request)
    {
        $randomNumber = mt_rand(10000, 99999);
        $timestamp = now()->timestamp;

        $uniqueId = 'id' . $randomNumber . $timestamp;

        $this->database
            ->getReference('test/blogs/' . $uniqueId)
            ->set([
                'title' => $request['title'],
                'content' => $request['content'],
                'id' => $uniqueId
            ]);

        return response()->json('blog has been created');
    }
    public function index()
    {
        return response()->json($this->database->getReference('test/blogs')->getValue());
    }
    public function edit(Request $request, $id)
    {
        $this->database->getReference('test/blogs/' . $id)
            ->update([
                'title' => $request['title'],
                'content' => $request['content'],
            ]);

        return response()->json('blog has been edited');
    }
    public function delete(Request $request, $id)
    {
        $this->database
            ->getReference('test/blogs/' . $id)
            ->remove();

        return response()->json('blog has been deleted');
    }
}
