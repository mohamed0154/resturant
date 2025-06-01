<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\services\CategoryServices;
use App\Traits\Media;


class CategoryController extends Controller
{
    use Media;


      // Service Container
    private CategoryServices $categoryService;
    public function __construct(CategoryServices $categoryService) {
        $this->categoryService = $categoryService;
    }


    //create
    public function create(){
        return view('categories.create');
    }


     //index
    public function index(){
        $categories=Category::select('name','image')->get();
        return view('categories.index',compact('categories'));
    }

    // store
    public function store(StoreCategoryRequest $request){
        $this->categoryService->storeCategory($request);
       return redirect()->back()->with('success','Category Created successfully');
    }
}
