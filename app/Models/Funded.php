<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funded extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function financier ()
    {
        return $this->belongsToMany(Financier::class);
    }

    public function project ()
    {
        return $this->belongsTo(Project::class);
    }
}
