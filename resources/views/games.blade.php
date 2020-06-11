@extends('layouts.main')
@section('content')
<div class="container">
    <form method="post" action="{{ route('games.post') }}">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="teams" class="label-control">Teams</label>
                    <input type="text" class="form-control input-sm" placeholder="eg. Chelsea Vs Everton" name="teams">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="teams" class="label-control">Start Time</label>
                    <input type="time" class="form-control input-sm" placeholder="eg. Chelsea Vs Everton" name="startTime">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="teams" class="label-control">Prediction</label>
                    <input type="text" class="form-control input-sm" placeholder="eg.HT/FT 1-1" name="prediction">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="teams" class="label-control">league</label>
                    <select name="league" class="form-control">
                        <option label="Choose A League"></option>
                        @foreach ($leagues as $league)
                            <option>{{ $league->league }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="teams" class="label-control">Type</label>
                    <select name="type" class="form-control">
                        <option label="Choose A League"></option>
                        @foreach ($types as $type)
                            <option>{{ $type->type }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="teams" class="label-control">Chargeable</label>
                    <select name="status" class="form-control">
                        <option label="Choose An Option"></option>
                        <option value="0">Free</option>
                        <option value="1">Premium</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="teams" class="label-control">&nbsp;</label>
                    <input type="submit" class="btn btn-success btn-md" value="Add Team" style="margin-top:30px">
                </div>
            </div>
        </div>
    </form>
</div>
@stop