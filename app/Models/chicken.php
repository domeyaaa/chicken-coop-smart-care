<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chicken extends Model
{
    use HasFactory;

    protected $fillable = [
        'chickenspecies_id',
        'chicken_phase_id',
        'father_id',
        'mother_id',
        'expect_sex',
        'sex',
        'temp_born',
        'birthday',
        'first_egg_date',
        'first_egg_weight',
        'first_egg_age',
        'weight_first_egg'
    ];

    protected $table = 'chickens';

    public $incrementing = false;
}
