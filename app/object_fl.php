<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class object_fl extends Model
{
    protected $table='emails';
    private $name;
    private $description;
    private $found_at;
    public $timestamps=false;
}
