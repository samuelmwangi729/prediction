@if($errors->all())
<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert">&timesbar;</a>
   @foreach($errors->all() as $error)
   <span>{{ $error }}</span><br>
   @endforeach
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <span>{{ Session::get('success') }}</span>
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <span>{{ Session::get('error') }}</span>
</div>
@endif