<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod extends Model
{
    use HasFactory;

    protected $fillable =['prod_name', 'prod_price', 'prod_descri', 'prod_category', 'prod_file_name'];    
}
