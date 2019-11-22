<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $fillable = [
		'name',
        'document_number',
        'email',
        'phone',
        'defaulter',
        'date_birth',
        'sex',
        'marital_status',
        'physical_disability',
	];

    const MARITAL_STATUS = [
    	1 => "Solteiro(a)",
    	2 => "Casado(a)",
    	3 => "Divorciado(a)",
    ];
}
