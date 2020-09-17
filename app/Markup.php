<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markup extends Model
{
    protected $fillable = ['html_data', 'css_data'];
}
