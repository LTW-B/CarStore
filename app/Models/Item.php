<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public static function validate($request)
    {
        $request->validate([
            "price" => "required|numeric|gt:0",
            "quantity" => "required|numeric|gt:0",
            "store_id" => "required|exists:store,id",
            "order_id" => "required|exists:orders,id",
        ]);
    }
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }
    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }
    public function getPrice()
    {
        return $this->attributes['price'];
    }
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    public function getOrderId()
    {
        return $this->attributes['order_id'];
    }
    public function setOrderId($orderId)
    {
        $this->attributes['order_id'] = $orderId;
    }
    public function getStoreId()
    {
        return $this->attributes['store_id'];
    }
    public function setStoreId($Store)
    {
        $this->attributes['store_id'] = $Store;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function getOrder()
    {
        return $this->order;
    }
    public function setOrder($order)
    {
        $this->order = $order;
    }
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function getStore()
    {
        return $this->store;
    }
    public function setStore($store)
    {
        $this->store = $store;
    }
}
