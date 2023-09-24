<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','file_path','quantity', 'description', 'price', 'category', 'color', 'brand', 'size'];
    public static function sumCarsByQuantity($stores, $CarsInSession)
    {
        $total = 0;
        foreach ($stores as $store) {
            $total = $total + ($store->price* $CarsInSession[$store->id]);
        }
        return $total;
    }
    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function getItems()
    {
        return $this->items;
    }
}
