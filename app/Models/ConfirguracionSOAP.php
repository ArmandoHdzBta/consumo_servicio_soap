<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirguracionSOAP extends Model
{
    use HasFactory;

    public static $URL = 'http://127.0.0.1/servicio_soap/index.php';
}
