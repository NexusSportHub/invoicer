<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FACT_METODOS_PAGO extends Model
{
    use HasFactory;
    protected $table = 'FACT_METODOS_PAGO';

    protected $primarKey = 'x_METODOPAGO';
}
