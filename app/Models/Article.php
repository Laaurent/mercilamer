<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function theme()
	{
		return $this->belongsTo(Theme::class, 'theme');
	}
    public function target()
	{
		return $this->belongsTo(Target::class, 'target')->select('name');
	}

}
