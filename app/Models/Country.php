<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory;

    // public function deployments(): HasManyThrough
    // {
    //     return $this->hasManyThrough(Deployment::class, Environment::class);
    // }

    // public function posts()

    // {

    //     return $this->hasManyThrough(

    //         Post::class,

    //         User::class,

    //         'country_id', // Foreign key on users table...

    //         'user_id', // Foreign key on posts table...

    //         'id', // Local key on countries table...

    //         'id' // Local key on users table...

    //     );

    // }
}
