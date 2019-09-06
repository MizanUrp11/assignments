<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    

    public function profileImage()
    {
        return '/storage/'. ($this->image ? $this->image:'profile/rBRJFM1fnONrT6CukqSk1v7O3d1HrnzkVVerCOem.png');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
