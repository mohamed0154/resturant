<?php

namespace App\Http\Controllers\Dishes;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Models\Dish;
use App\services\SearchServices;
use Illuminate\Http\Request;

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
