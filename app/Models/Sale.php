<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory;
    
    protected $table = 'Sales';
    protected $fillable = [ 'customer_id', 'sale_date', 'total','payment_method'];
    
}
