<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/Efp4X1AxvocgeZjpsyZ7YX5re7FDLJ1DiDkMbIdF.png';

        return '/storage/' . $imagePath;
    }
    
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
