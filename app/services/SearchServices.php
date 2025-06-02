<?php

namespace App\services;


use App\Models\Dish;

class SearchServices{


    public function searchServices($searchInput){
       $dishes =Dish::search($searchInput)->get();

       $dishes = Dish::whereIn('id', $dishes->pluck('id'))
              ->with('category:id,name') 
              ->paginate(50);

        return $dishes;
    }
}