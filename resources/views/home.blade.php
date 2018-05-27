@section('content')
@extends('layouts.app')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Health Expert page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                      <div class="col-md-6">
                    <div class="header-wrap clearfix">
                                <div id="logo" class="logo">

                                        <img src="images/avatar.png" alt="image">
                                </div><!-- /.logo -->

                                <a href="{{('/healthexpertform')}}">Manage reports</a></br>
                            </div>



            </div>
        </div>
    </div>
</div>
@endsection
