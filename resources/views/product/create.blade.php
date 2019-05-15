@extends('layouts.app')

@section('content')
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
           
        <div class="form-group">
            <label for="">name</label>
            <input type="text" name="name" id="" class="form-control">
        </div>
       
        <select class="js-example-basic-multiple form-control" name="colors[]" multiple="multiple">
                <option value="AL">Alabama</option>
                <option value="AL">black</option>
                <option value="WY">Wyoming</option>
              </select>
        <input type="submit" value="sub">
    </form>

@endsection
