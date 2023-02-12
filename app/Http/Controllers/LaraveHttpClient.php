<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LaraveHttpClient extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        // $result = $response->body(); // string;
        $result = $response->json(); // array|mixed;
        // $result = $response->object(); // object;
        // $result = $response->collect(); // Illuminate\Support\Collection
        // $result = $response->status(); 
        // $result = $response->headers();  // header list array
        dd($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = [
            "userId" => 5,
            "title" => "nagamaiah title here...",
            "body" => "est rerum tempore vitae sequi sint nihil reprehenderit dolor beatae ea dolores neque
                       fugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis
                       qui aperiam non debitis possimus qui neque nisi nulla"
        ];
        // $response = Http::post('https://jsonplaceholder.typicode.com/posts', $post);

        $response = Http::withHeaders([
            'Content-type' => 'application/json; charset=UTF-8'
        ])->post('https://jsonplaceholder.typicode.com/posts', $post);

        dd($response->json());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/10');
        $result = $response->json(); // array|mixed;
        // $result = $response->status(); 
        dd($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $post = [
            "userId" => 5,
            "title" => "nagamaiah title here...",
            "body" => "est rerum tempore vitae sequi sint nihil reprehenderit dolor beatae ea dolores neque
                       fugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis
                       qui aperiam non debitis possimus qui neque nisi nulla"
        ];

        $response = Http::withHeaders([
            'Content-type' => 'application/json; charset=UTF-8'
        ])->put('https://jsonplaceholder.typicode.com/posts/4', $post);

        $result = $response->status(); 
        dd($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/3');
        // $result = $response->json(); // array|mixed;
        $result = $response->status(); 
        dd($result);
    }
}
