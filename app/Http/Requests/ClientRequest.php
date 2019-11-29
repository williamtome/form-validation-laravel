<?php

namespace App\Http\Requests;

use App\Client;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $clientType = Client::getClientType($this->client_type);
        $rules = [
            'name' => 'required|max:255',
            'document_number' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ];

        $marital_status = implode(',', array_keys(Client::MARITAL_STATUS));
        $rulesIndividual = [
            'date_birth' => 'required|date',
            'marital_status' => "required|in:$marital_status",
            'sex' => 'required|in:M,F',
            'physical_disability' => 'max:255'
        ];

        $rulesLegal = [
            'company_name' => 'required|max:255'
        ];
        return $clientType == Client::TYPE_INDIVIDUAL ?
            $rules+$rulesIndividual : $rules+$rulesLegal;
    }
}
