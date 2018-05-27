@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('eformpost') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="Country" type="text" class="form-control{{ $errors->has('Country') ? ' is-invalid' : '' }}" name="Country" value="{{ old('Country') }}" required autofocus>

                                @if ($errors->has('Country'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Disease" class="col-md-4 col-form-label text-md-right">{{ __('Disease') }}</label>

                            <div class="col-md-6">
                                <input id="Disease" type="text" class="form-control{{ $errors->has('Disease') ? ' is-invalid' : '' }}" name="Disease" value="{{ old('Disease') }}" required autofocus>

                                @if ($errors->has('Disease'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Disease') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="latitude" class="col-md-4 col-form-label text-md-right">{{ __('latitude') }}</label>

                            <div class="col-md-6">
                                <input id="latitude" type="integer" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{ old('latitude') }}" required>

                                @if ($errors->has('latitude'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Latitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="longitude" class="col-md-4 col-form-label text-md-right">{{ __('longitude') }}</label>

                            <div class="col-md-6">
                                <input id="longitude" type="integer" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" required>

                                @if ($errors->has('longitude'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('upload') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
