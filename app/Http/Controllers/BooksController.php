<?php

namespace RestApi\Http\Controllers;

use Illuminate\Http\Request;
use RestApi\Http\Services\BooksService;

class BooksController extends Controller
{
    function getBook(Request $request, BooksService $booksService)
    { 
        $isbn = $request->input('ISBN');
        return response()->json($booksService->getBook($isbn));
    }
}
