<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table='country_job';

    protected $fillable=
        [
            'country_id',
            'name_uz',
            'name_en',
            'title_uz',
            'position_uz',
            'title_en',
            'position_en',
            'image',

        ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
