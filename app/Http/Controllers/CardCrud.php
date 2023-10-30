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
            ->getReference('ecommerce/crud_ecommerce/' . $uniqueId)
            ->set([
                'productname' => $request['productname'],
                'image' => $request['image'],
                'description' => $request['description'],
                'price' => $request['price'],
                'id' => $uniqueId
            ]);

        return response()->json('Ecommerce has been created');
    }
    public function index()
    {
        $transformedData = [];
        $originalData = $this->database->getReference('ecommerce/crud_ecommerce')->getValue();
        foreach ($originalData as $item) {
            $transformedData[] = [
                'description' => $item['description'],
                'id' => $item['id'],
                'image' => $item['image'],
                'price' => $item['price'],
                'productname' => $item['productname'],
            ];
        }

        $response = [
            'products' => $transformedData,
        ];

        // Convert the response to JSON
        $jsonResponse = json_encode($response);
        return response()->json($response);
    }
    public function edit(Request $request, $id)
    {
        $this->database->getReference('ecommerce/crud_ecommerce/' . $id)
            ->update([
                'productname' => $request['productname'],
                'image' => $request['image'],
                'description' => $request['description'],
                'price' => $request['price'],
            ]);

        return response()->json('Ecommerce has been edited');
    }
    public function delete(Request $request, $id)
    {
        $this->database
            ->getReference('ecommerce/crud_ecommerce/' . $id)
            ->remove();

        return response()->json('Ecommerce has been deleted');
    }
}
