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
                <th>User</th>
                <th>Phone Number</th>
                <th>level</th>
                <th style="width: 40px">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                     @if($user->level==0)
                     <span class="badge badge-primary">User</span>
                     @else
                     <span class="badge badge-success">Administrator</span>
                     @endif
                    </td>
                    <td><span class="badge bg-danger"><a href="#">Suspend</a></span></td>
                  </tr>
                @endforeach
              
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</div>
@stop