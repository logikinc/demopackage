<?php

namespace Mikewazovzky\Demo\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = ['name', 'description'];
}