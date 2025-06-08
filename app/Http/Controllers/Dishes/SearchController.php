<?php

namespace App\Http\Controllers\Dishes;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\services\SearchServices;

class SearchController extends Controller
{
    public function __construct(
        private SearchServices $searchService
    ) {}

    public function search(SearchRequest $request)
    {
        $dishes = $this->searchService->searchServices($request->q);
        return view('dishes.index', compact('dishes'));
    }
}
