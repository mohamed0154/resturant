<?php

namespace App\Http\Controllers\Dishes;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Models\Dish;
use App\services\SearchServices;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private SearchServices $searchService;
    public function __construct(SearchServices $searchService) {
        $this->searchService = $searchService;
    }


    public function search(SearchRequest $request){
        $dishes= $this->searchService->searchServices($request->q);
        return view('dishes.index',compact('dishes'));
    }
}
