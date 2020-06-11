@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">categories</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Category  Name</th>
                <th>Status</th>
                <th style="width: 40px">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->type }}</td>
                    <td>
                     @if($category->status==0)
                     <span class="badge badge-success">Active</span>
                     @else
                     <span class="badge badge-success">Administrator</span>
                     @endif
                    </td>
                    <td><span class="badge bg-danger"><a href="#">Delete</a></span></td>
                  </tr>
                @endforeach
              
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</div>
@endsection