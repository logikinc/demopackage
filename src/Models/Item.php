<?php

namespace Mikewazovzky\Demo\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $table = 'mikewazovzky_items';
	protected $fillable = ['name', 'description'];
}