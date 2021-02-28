<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = ['description', 'idhighFive', 'idSubterm', 'montant','sdg', 'source', 'parent'];
}
