<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratinges extends Model
{
    use HasFactory;

    protected $fillable =['name','item_id'];

    public function items()
    {
        return $this->belongsTo(Items::class, 'item_id');
    }
}
