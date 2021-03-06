<?php

namespace RestApi\Http\Controllers;

use Illuminate\Http\Request;
use RestApi\Http\Services\MoviesService;

class MoviesController extends Controller
{
    function getMovie(Request $request, MoviesService $moviesService)
    {
        $title = $request->input('title');
        $year = $request->input('year');
        $version = $request->input('version');
        return response()->json($moviesService->getMovie($title, $year, $version));
    }
}
