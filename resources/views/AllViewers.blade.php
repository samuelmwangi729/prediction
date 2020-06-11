@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Subscribers</h3>
          <div class="container pull-right">
            <a href="/flush" class="btn btn-danger pull-right">
              Flush Subscribers
            </a>
          </div>
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
                @foreach($viewers as $viewer)
                <tr>
                    <td>{{ $viewer->number }}</td>
                    <td>
                     @if($viewer->status==0)
                     <span class="badge badge-success">Active</span>
                     @else
                     <span class="badge badge-success">Administrator</span>
                     @endif
                    </td>
                    <td><span class="badge bg-danger"><a href="{{ route('flush',[$viewer->id]) }}">Delete</a></span></td>
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