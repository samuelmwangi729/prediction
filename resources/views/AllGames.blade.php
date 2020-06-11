@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Teams</th>
                <th>Start Time</th>
                <th>Prediction</th>
                <th>OutCome</th>
                <th>League</th>
                <th>Game Type</th>
                <th>Category</th>
                <th style="width: 40px">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($games as $game)
                <tr>
                    <td>{{ $game->teams }}</td>
                    <td>{{ $game->startTime }}</td>
                    <td>{{ $game->prediction }}</td>
                    <td>
                        @if($game->outcome==0)
                        <span class="badge badge-danger">Pending...</span>
                        @endif
                        @if($game->outcome==1)
                        <span class="badge badge-warning"><i class="fa fa-check-circle"></i>Won</span>
                        @else
                        <span class="badge badge-danger"><i class="fa fa-times-circle"></i>&nbsp;Lost</span>
                        @endif
                    </td>
                    <td>{{ $game->league }}</td>
                    <td>{{ $game->type }}</td>
                    <td>
                        @if($game->status==0)
                        <span class="badge badge-primary">Free</span>
                        @else
                        <span class="badge badge-success">Paid</span>
                        @endif
                    </td>
                    <td><span class="badge bg-success"><a href="{{ route('ugame',[$game->id,1]) }}">Won</a></span></td>
                    <td><span class="badge bg-danger"><a href="{{ route('ugame',[$game->id,2]) }}">Lost</a></span></td>
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