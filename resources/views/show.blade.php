@extends('app')

@section('content')

<div class="row">
   <div class="col-lg-12 margin-tb" >
        <div class="pul-left">
            <h2>Show Product</h2>
        </div>
        <div class="pul-right">
            <a class="btn btn-primary" href="{{ url('/') }}">Back</a>
        </div>
    </div>
</div>

<div class="row">

    <div class="form-group">
        <strong>Product Name:</strong>
        {{$product->product_name}}
    </div>

    <div class="form-group">
        <strong>Prise:</strong>
        {{$product->prise}}
    </div>

    <div class="form-group">
        <strong>Image:</strong>
        <img src="/images/{{$product->image}}" width="500px">
    </div>

</div>

@endsection