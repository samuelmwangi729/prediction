@extends('layouts.main')
@section('content')
<!-- Horizontal Form -->
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Add Categories</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="{{ route('categories') }}">
      @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Enter Category Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="type"  placeholder="Eg. FootBall">
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Add Category</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->
@stop