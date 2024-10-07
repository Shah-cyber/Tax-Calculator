<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tax_rates extends Model
{
    protected $table = 'tax_rates';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [ 'id', 'year', 'category', 'chargeable_income_from', 'chargeable_income_to', 'calculations_first', 'calculations_next', 'rate', 'tax_from', 'tax_to', 'created_at'];
   
}
