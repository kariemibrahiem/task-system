<?php

namespace App;

trait DataTrait
{
    // used as dinamec functions can used in many places
    public function getdata( $model  , $path){
        $data =   $model::all();
       return view($path , compact('data'));
   }
}
