<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;
    
    protected $table = 'pages';
    
    protected $fillable = ['name','html_tag','order','active'];

    public function Nav()
    {
        return $this->hasOne(Navdrawer::class);
    }
}
