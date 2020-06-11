@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.trip.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.trips.update", [$trip->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="city_from_id">{{ trans('cruds.trip.fields.city_from') }}</label>
                <select class="form-control select2 {{ $errors->has('city_from') ? 'is-invalid' : '' }}" name="city_from_id" id="city_from_id" required>
                    @foreach($city_froms as $id => $city_from)
                        <option value="{{ $id }}" {{ ($trip->city_from ? $trip->city_from->id : old('city_from_id')) == $id ? 'selected' : '' }}>{{ $city_from }}</option>
                    @endforeach
                </select>
                @if($errors->has('city_from'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city_from') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trip.fields.city_from_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date_from">{{ trans('cruds.trip.fields.date_from') }}</label>
                <input class="form-control date {{ $errors->has('date_from') ? 'is-invalid' : '' }}" type="text" name="date_from" id="date_from" value="{{ old('date_from', $trip->date_from) }}" required>
                @if($errors->has('date_from'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_from') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trip.fields.date_from_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="city_to_id">{{ trans('cruds.trip.fields.city_to') }}</label>
                <select class="form-control select2 {{ $errors->has('city_to') ? 'is-invalid' : '' }}" name="city_to_id" id="city_to_id" required>
                    @foreach($city_tos as $id => $city_to)
                        <option value="{{ $id }}" {{ ($trip->city_to ? $trip->city_to->id : old('city_to_id')) == $id ? 'selected' : '' }}>{{ $city_to }}</option>
                    @endforeach
                </select>
                @if($errors->has('city_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trip.fields.city_to_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date_to">{{ trans('cruds.trip.fields.date_to') }}</label>
                <input class="form-control date {{ $errors->has('date_to') ? 'is-invalid' : '' }}" type="text" name="date_to" id="date_to" value="{{ old('date_to', $trip->date_to) }}" required>
                @if($errors->has('date_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trip.fields.date_to_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="adults">{{ trans('cruds.trip.fields.adults') }}</label>
                <input class="form-control {{ $errors->has('adults') ? 'is-invalid' : '' }}" type="number" name="adults" id="adults" value="{{ old('adults', $trip->adults) }}" step="1" required>
                @if($errors->has('adults'))
                    <div class="invalid-feedback">
                        {{ $errors->first('adults') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trip.fields.adults_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="children">{{ trans('cruds.trip.fields.children') }}</label>
                <input class="form-control {{ $errors->has('children') ? 'is-invalid' : '' }}" type="number" name="children" id="children" value="{{ old('children', $trip->children) }}" step="1">
                @if($errors->has('children'))
                    <div class="invalid-feedback">
                        {{ $errors->first('children') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trip.fields.children_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection