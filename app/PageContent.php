<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $table = 'page_content';

    public function page()
    {
        return $this->belongsTo('App\Pages', 'page_id', 'id');
    }
}
