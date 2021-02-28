<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mysource extends Model
{
    //
    protected $fillable = ['name', 'source', 'instrument', 'montant', 'component_id'];
}
