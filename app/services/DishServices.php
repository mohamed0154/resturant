<?php

namespace App\services;

use App\Models\Category;
use App\Models\Dish;
use App\Traits\Media;

class DishServices{

  use Media;


   //Create Dishes
    public function create(){
        $categories = Category::select('id','name')->get();
        return view('dishes.add_dish',compact('categories'));
    }


    //Dishes
     public function index(){
        $dishes=Dish::with('category:id,name')->select('id','name','category_id','description','image','price','quantity')->paginate(50);

        return view('dishes.index',compact('dishes'));
    }

    //store Dish
    public function storeDish($request){

        $data = $request->except('_token','images');
        $imageName = $this->UploadPhoto($request->image,'images/dishes');
        $data['image'] = $imageName;

        Dish::create($data);

        return redirect()->back()->with('success','Dish is created Successfully');

    }




    //edit
     public function edit(Dish $dish){
        $categories = Category::select('id','name')->get();
        return view('dishes.edit',compact('categories','dish'));
    }



    //Update
    public function updateDish($request , $dish){

        $data = $request->except('image','_method','_token');

        //check Image Exist
        $data = $this->checkImage($request,$dish,$data);

        // update in database
        $dish->update($data);

        return redirect()->back()->with('success','Dish Updated Successfully');
    }
    

    protected function checkImage($request,$dish,$data){
        if($request->hasFile('image')){
            $path = 'images/dishes/';

            //delete Image from system
            $this->deleteImage($dish->image,$path);
            // store new Image
            $imageName = $this->uploadPhoto($request->image,$path);
            $data['image'] = $imageName;
        }

        return $data;
    }
}