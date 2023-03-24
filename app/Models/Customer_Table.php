<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_Table extends Model
{
    public $table ='customer_data';
    public $primaryKey ='id';
    public $incrementing =true;
    public $timestamps = false;

}
