<?php

namespace App\Http\Requests;

use App\City;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('city_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'       => [
                'required',
            ],
            'country_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
