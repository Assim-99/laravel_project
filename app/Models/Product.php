<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory , Notifiable ;

    protected $fillable = [
        'id',
        'title',
        'price',
        'image',
        'quantity' ,
        'description',
    ]; 


    public $timestamps = false ;


}
