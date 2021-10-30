<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAllBook()
    {
        $totalItem = Book::all();
        return view('welcome',['items'=>$totalItem]);
    }

    public function processSearch(Request $request)
    {
        $request->request->remove('_token');
        $search = $request->get('search');
        $totalItem = Book::where('title','like','%'.$search.'%')->get();
        return view('welcome',['items'=>$totalItem]);
    }
}
