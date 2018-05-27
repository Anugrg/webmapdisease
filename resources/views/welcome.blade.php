@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h3>Disease Map</h3>


          <div id="map" style="height:400px; width: 100%"></div>

<script>

function initMap() {
  var myLatLng = {lat:8.7832, lng: 34.5085};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}
</script>


          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCDzR8gArHQp31nFGNyhjvCDk5yD179rB0 &callback=initMap">
          </script>

        </div>
      </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">

                        <form method="GET" action="{{ route('dmark') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="Disease" class="col-md-4 col-form-label text-md-right">{{ __('Enter Disease') }}</label>

                                <div class="col-md-6">
                                    <input id="Disease" type="text" class="form-control{{ $errors->has('Disease') ? ' is-invalid' : '' }}" name="Disease" value="{{ old('Disease') }}" required autofocus>

                                    @if ($errors->has('Disease'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('Disease') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('search') }}
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
