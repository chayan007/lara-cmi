<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Model
{
    use Notifiable;
    protected $table='products';
    protected $fillable=[
        'product','company','category','description','img_url','doc_url',
    ];
}
