<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navdrawer extends Model
{
    protected $table = 'navdrawer';

    protected $fillable = ['name','page_id','order','active'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
