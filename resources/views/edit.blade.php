@extends('app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Update Product</h2>
        </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('index') }}">Back</a>
    </div>
</div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There Where Some Problems With Your Input.
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li> 
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('update',$product->id) }}" method="POST" enctype="multipart/form-data">
@csrf 
@method ('PUT')

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <label for="product_name" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="product_name" name="product_name" value="{{$product->product_name}}" required></input>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <label for="prise" class="form-label">Prise</label>
        <input type="text" class="form-control" id="prise" name="prise" value="{{$product->prise}}" required></input>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" required></input>
        <img src="/images/{{$product->product_name}}" width="500px;">
    </div>
    <br><br><br><br>

    <button class="btn btn-success">Update</button>

</div>
</form>


@endsection