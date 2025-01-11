<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'short_des',
        'price',
        'stock',
    ];

    // Define the default image constant
    const DEFAULT_IMAGE = 'path/to/default_image.jpg';

    /**
     * Default values for attributes
     */
    protected $attributes = [
        'discount' => 1,
        'discount_price' => 0.00,
        
        'image' => 'path/to/default_image.jpg',
        'user_id' => 1,

    ];

}
