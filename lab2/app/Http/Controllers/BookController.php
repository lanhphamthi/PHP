<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function index()
    {
        //get ds cac book
        $bookList = DB::table('tbBook')->get();
        //dd($bookList);
        return view("index", compact("bookList"));
    }

    function create()
    {
        return view('create');
    }

    function postAdd(Request $request)
    {
        //get du lieu tu form dua len
        $title = $request->title;
        $price = $request->price;

        DB::table('tbBook')->insert([
            'title' => $title,
            'price' => $price
        ]);

        //chuyen ve duong dan index
        return redirect('index');
    }

    function update($id)
    {
        $book = DB::table('tbBook')->where('id', $id)->first();
        return view('update', compact('book'));
    }

    function postUpdate(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $price = $request->price;

        DB::table('tbBook')->where('id', $id)->update([
            'title' => $title,
            'price' => $price
        ]);

        //chuyen ve duong dan index
        return redirect('index');
    }

    function delete($id)
    {
        DB::table('tbBook')->where('id', $id)->delete();

        //chuyen ve duong dan index
        return redirect('index');
    }

    function search(Request $request)
    {
        //lay noi dung trong o input search
        $keySearch = $request->searchText;

        $bookList = DB::table('tbBook')->where('title', 'like', '%'.$keySearch.'%')->get();

        return view("index", compact("bookList"));
    }
}
