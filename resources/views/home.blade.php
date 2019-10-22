@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @guest
                    @if (Route::has('login'))
                    @else
                      <h1>Kamu sudah login, selamat menikmati</h1>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
