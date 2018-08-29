<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file1 = $request->image;
        $path = $file1->store('public/images');
        $file2 = $request->doc;
        $path2 = $file2->store('public/documents');
        $post= new Product;
        $post->product = $request->product;
        $post->company = $request->company;
        $post->description= $request->description;
        $post->category = $request->category;
        $post->img_url= $path;
        $post->doc_url= $path2;
        $post->save();
        echo "<h1>Successful</h1>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $post=Product::find($id);
        return view('detail',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        $posts = Product::paginate(100);
        return view('show', ['posts' => $posts]);
    }
    public function send(Request $request)
    {
        $title = $request->contact_name;
        $content = $request->contact_number;

        Mail::send('send', ['title' => $title, 'content' => $content], function ($message) {
            $message->from('me@gmail.com', 'Core Medical');
            $message->to('sonicxxx7@gmail.com');
        });
        return redirect('/products');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
