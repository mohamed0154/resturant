<?php

namespace App\services;


use App\Models\Dish;
use App\Traits\Media;

class DishServices{

  use Media;


    public function storeDish($request){

        $data = $request->except('_token','images');
        $imageName = $this->UploadPhoto($request->image,'images/dishes');
        $data['image'] = $imageName;

        Dish::create($data);

        return;
    }


    //Update
    public function updateDish($request,$dish){

        $data = $request->except('image','_method','_token');
        if($request->hasFile('image')){
            $path = 'images/dishes/';

            //delete Image from system
            $this->deleteImage($dish->image,$path);
            // store new Image
            $imageName = $this->uploadPhoto($request->image,$path);
            $data['image'] = $imageName;
        }
        // update in database
        $dish->update($data);

        return $data;
    }
    
}