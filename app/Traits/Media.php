<?php

namespace App\Traits;


trait Media{

    public function uploadPhoto($image,$path){
        $imageName = uniqid() . '.' . $image->guessExtension();
        $image->move(public_path($path),$imageName);
        return $imageName;
    }


    public function deleteImage($image,$path){

         if(file_exists(public_path($path . $image))){
            unlink(public_path($path . $image));
        }
    }
}