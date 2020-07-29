<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentGroup extends Model
{
    use SoftDeletes;

    protected $fillable = [ 'slug', 'name'];
}
