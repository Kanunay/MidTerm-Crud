@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} </div>

                <div class="card-body"> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container"><h6>User credentials : {{ Auth::user()->role }}</h6></div>
                        <div class="container"><h6>User created at: {{ Auth::user()->created_at }}</h6></div>
                        <div class="container"><h6>User updated at: {{ Auth::user()->updated_at }}</h6></div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
