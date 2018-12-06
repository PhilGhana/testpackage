<?php

namespace Wisp\HelloWorld\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table='testTable';
    protected $fillable=['title'];
}
