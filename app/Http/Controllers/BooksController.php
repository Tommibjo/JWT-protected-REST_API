<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\BooksService;

class BooksController extends Controller
{
    function getBook(Request $request, BooksService $booksService)
    { 
        $isbn = $request->input('ISBN');
        return response()->json($booksService->getBook($isbn));
    }
}
