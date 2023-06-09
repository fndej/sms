<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    
    protected $table ="students";
    protected $fillable=
                        [
                            'first_name',
                            'middle_name',
                            'last_name',
                            'gender',
                            'email',
                            'department',
                        ];
    use HasFactory;
}
