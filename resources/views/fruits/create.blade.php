@extends('layouts.app')
@section('main')
<h5>Add New Product</h5>
<div class="col-md-6">
    <form action="/fruits/store" method="POST">
        @csrf
        <div class="col-md-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control
            @if($errors->has('name')) {{'is-invalid'}} @endif" value="{{old('name')}}" />
            @if($errors->has('name'))
            <div class="invalid-feedback">{{$errors->first("name")}}</div>
            @endif
        </div>
        <div class="mb-3">
            <button type="submit" class="btn-btn-dark">
                Save
            </button>
        </div>
    </form>
</div>
@endsection