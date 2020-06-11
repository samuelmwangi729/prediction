@extends('layouts.main')
@section('content')
<!-- Horizontal Form -->
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Add Subscribers</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="{{ route('subscribers') }}">
      @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Subscriber Number</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="number"  placeholder="Eg. 0704922042">
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Add Subscriber</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->
@stop