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
        'client_type',
        'company_name'
	];

    const MARITAL_STATUS = [
    	1 => "Solteiro(a)",
    	2 => "Casado(a)",
    	3 => "Divorciado(a)",
    ];

    public static function getClientType($type){
        return $type == Client::TYPE_LEGAL ? $type : Client::TYPE_INDIVIDUAL;
    }

    const TYPE_INDIVIDUAL = 'individual';
    const TYPE_LEGAL = 'legal';
}
