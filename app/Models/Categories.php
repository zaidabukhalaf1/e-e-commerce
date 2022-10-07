<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','item_id','company_id'];

    public function items()
    {
        return $this->belongsTo(Items::class, 'item_id');
    }

    public function companies()
    {
        return $this->belongsTo(Companies::class, 'company_id');
    }
}
