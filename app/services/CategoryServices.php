<?php

namespace App\services;

use App\Models\Category;
use App\Traits\Media;

class CategoryServices{

  use Media;


  public function storeCategory($request){
    
       $imageName= $this->uploadPhoto($request->image,'images/categories');
       
       $data = $request->except('image');
       $data['image'] = $imageName;
       
       Category::create($data);

       return;
  }

}