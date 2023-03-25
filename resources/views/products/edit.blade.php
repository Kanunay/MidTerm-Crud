@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb" >
        <div class="pull-left">
            <h2>edit product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>whoops!</strong> there were some problems with your output. <br> <br>
        <ul>
            @foreach ( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }} " method="POST" >
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                <input type="text" name="name" id="{{ $product->name }}" class="form-control" value="{{ $product->name }} " input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>detail:</strong>
                <textarea type="text" name="detail" rows="4" cols="50" style="height: 150px" class="form-control" value="{{ $product->detail }}">{{ $product->detail }}</textarea>
            </div>
        </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
    </div>
</form>

@endsection