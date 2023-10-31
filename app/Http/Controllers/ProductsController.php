<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    private $database;

    public function __construct()
    {
        $this->database = \App\Services\FirebaseService::connect();
    }
    public function create(Request $request)
    {
        try {
            $randomNumber = mt_rand(10000, 99999);
            $timestamp = now()->timestamp;
            $uniqueId = 'id' . $randomNumber . $timestamp;
            $rules = [
                'productname' => 'required',
                'image' => 'required',
                'description' => 'required',
                'price' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                // Validation failed, return an error response
                $response = [
                    'message' => 'Validation failed',
                    'errors' => $validator->errors(),
                    'statuscode' => 400,
                    'isSuccess' => false,
                ];
            } else {
                $data = [
                    'productname' => $request->input('productname'),
                    'image' => $request->input('image'),
                    'description' => $request->input('description'),
                    'price' => $request->input('price'),
                    'id' => $uniqueId,
                ];

                $this->database
                    ->getReference('ecommerce/crud_ecommerce/' . $uniqueId)
                    ->set($data);

                // Include the created data in the response
                $response = [
                    'data' => $data,
                    'message' => 'Ecommerce has been created',
                    'isSuccess' => true,
                    'statuscode' => 201,
                ];
            }
            return response()->json($response); // Return a 201 Created status code along with the created data
        } catch (\Exception $e) {
            // Log::error('Error: ' . $e->getMessage());
            $response = [
                'message' => 'An error occurred',
                'data' => [],
                'statuscode' => 500,
                'isSuccess' => false,
            ];
            return response()->json($response); // Return a 500 Internal Server Error status code
        }
    }
    public function index()
    {
        try {
            $originalData = $this->database->getReference('ecommerce/crud_ecommerce')->getValue();
            // if (empty($originalData)) {
            //     // If data is empty, return a response with a 404 Not Found status
            //     $response = [
            //         'statuscode' => 404,
            //         'products' => [],
            //         'message' => 'Data not found',
            //         'isSuccess' => false,
            //     ];
            //     return response()->json($response);
            // }

            $transformedData = [];

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
                'statuscode' => 200,
                'message' => 'successfully obtained the list of products',
                'isSuccess' => true,
                'products' => $transformedData,
            ];

            // Convert the response to JSON and return it with a 200 OK status code
            return response()->json($response);
        } catch (\Exception $e) {
            // Log the error for debugging
            // Log::error('Error: ' . $e->getMessage());
            // Return an error response with a 500 Internal Server Error status
            $response = [
                'statuscode' => 500,
                'products' => [],
                'message' => 'An error occurred',
                'isSuccess' => false,
            ];
            return response()->json($response);
        }
    }
    public function edit(Request $request, $id)
    {
        try {
            $this->database->getReference('ecommerce/crud_ecommerce/' . $id)
                ->update([
                    'productname' => $request['productname'],
                    'image' => $request['image'],
                    'description' => $request['description'],
                    'price' => $request['price'],
                ]);

            $data = [
                'productname' => $request['productname'],
                'image' => $request['image'],
                'description' => $request['description'],
                'price' => $request['price'],
                'id' => $id,
            ];

            $response = [
                'statuscode' => 201,
                'products' => $data,
                'message' => 'Successfully updated product data',
                'isSuccess' => true,
            ];

            return response()->json($response);
        } catch (\Exception $e) {
            $errorResponse = [
                'statuscode' => 500, // You can choose an appropriate error code
                'message' => 'An error occurred while updating product data',
                'error' => $e->getMessage(),
                'isSuccess' => false,
            ];

            return response()->json($errorResponse);
        }
    }
    public function delete(Request $request, $id)
    {
        try {
            $this->database
                ->getReference('ecommerce/crud_ecommerce/' . $id)
                ->remove();

            $response = [
                'statuscode' => 200,
                'message' => 'Ecommerce item has been successfully deleted',
                'isSuccess' => true,
            ];

            return response()->json($response);
        } catch (\Exception $e) {
            $errorResponse = [
                'statuscode' => 500, // You can choose an appropriate error code
                'message' => 'An error occurred while deleting the ecommerce item',
                'error' => $e->getMessage(),
                'isSuccess' => false,
            ];

            return response()->json($errorResponse);
        }
    }
}
