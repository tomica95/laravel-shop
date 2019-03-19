<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Watch extends Model
{   

    /*
        public $id
        public $name
        public $src
        public $alt
        public $description
        public $price
        public $brand_id


    */

    public function brand(){

        return $this->belongsTo(Brand::class,'brand_id','id');

    }

    
    public function user_cart(){

        return $this->belongsToMany(User::class);

    }
}

/*
    $all = Watch::all()

    function all()
    {
        $upit_ka_bazi = "SELECT * FROM watches";

        $stmt = $connection->prepare($upit_ka_bazi);

        $stmt->execute();

        $watches = $stmt->fetchAll();

        $all_watches = [];

        foreach ($watches as $w)
        {
            $watch = new Watch;
            $watch->name = $w->name;
            $watch->price = $w->price;
            $watch->brand_id = $w->brand_id;

            $all_watches[] = $watch;
        }

        return $all_watches;
    }


    $watch = Watch::find(1);


    function find($id){

        $upit_ka_bazi = "SELECT * FROM watches WHERE id=:id";

        $stmt = $connection->prepare($upit_ka_bazi);

        $stmt->execute([
            'id'=>$id
        ]);

        $watch = $stmt->fetch();

        $watch_novi = new Watch;

        $watch_novi->name = $watch->name; 

        $watch_novi->description = $watch->description;

        return $watch_novi;


    }



*/
