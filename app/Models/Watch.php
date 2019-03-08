<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    public function brand(){

        return $this->belongsTo(Brand::class);

    }
    public function insert(){

        $id = request('id');

        $name = request('name');

        $description = request('description');

        $price = request('price');

        $watch = new Watch;

        $watch->name = $name;

        $watch->description = $description;

        $watch->src = "Slika.jgp";

        $watch->alt = "Alt slike";

        $watch->price = $price;

        $watch->brand_id = $id;

        $watch->save();
    }
}
