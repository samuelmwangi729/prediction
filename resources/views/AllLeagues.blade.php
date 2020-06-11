@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Users In the System</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>league Name</th>
                <th>Status</th>
                <th style="width: 40px">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($leagues as $league)
                <tr>
                    <td>{{ $league->league }}</td>
                    <td>
                     @if($league->status==0)
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