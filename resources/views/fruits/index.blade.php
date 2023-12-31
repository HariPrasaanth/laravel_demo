@extends('layouts.app')
@section('main')
<div class="d-flex justify-content-between">
  <h5>Product Details</h5>
  <a href="fruits/create" class="btn btn-primary">New Product</a>
</div>
<div class="col-md-12 table-responsive mt-3">
  <div class="py-2">
    <a href="{{url('/download-fruits')}}" class="btn btn-primary">Download PDF</a>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($fruits as $fruit)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $fruit->name }}</td>
        <td>
          <a href="fruits/edit/{{$fruit->id}}">Edit</a>
          <a href="fruits/delete/{{$fruit->id}}" onclick="return confirm('Are you sure you want to Delete?')">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection