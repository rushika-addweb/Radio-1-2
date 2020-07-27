@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-3">
            <div class="card">
                <div class="card-header">Maharatra</div>

                <div class="card-body">
                    <a href="/mumbai">Mumbai</a>
                </div>

                <div class="card-body">
                    <a href="/pune">Pune</a>
                </div>
                <div class="card-body">
                    <a href="/nasik">Nasik</a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login Page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
