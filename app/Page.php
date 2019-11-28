<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    
    protected $fillable = ['name','html_tag','order','active'];

    public function Nav()
    {
        return $this->hasOne(Navdrawer::class);
    }
}
