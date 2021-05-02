<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Financier extends Authenticatable
{
    use HasFactory;
    protected $guard = 'financier';
    protected $guarded=[];

    public function fundedProjects ()
    {
        return $this->hasMany(Funded::class);
    }

}
