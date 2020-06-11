<?php

namespace App\Http\Requests;

use App\Trip;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateTripRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('trip_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'city_from_id' => [
                'required',
                'integer',
            ],
            'date_from'    => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'city_to_id'   => [
                'required',
                'integer',
            ],
            'date_to'      => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'adults'       => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'children'     => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
