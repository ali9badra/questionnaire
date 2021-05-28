<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionnaire extends Model
{
    use HasFactory;

     protected $fillable = [
                            'agent',
    						'commune',
    						'q_1',
    						'q_2',
    						'q_3',
    						'q_4',
    						'q_5',
    						'q_6',
    						'q_7',
    						'q_8',
    						'q_9',
    						'q_10',
    						'q_11',
    						'q_12' 	];
}
