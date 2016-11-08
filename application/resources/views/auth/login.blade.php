@extends('layouts.master')

@section('content')

@if(count($errors))
 <div class="alert alert-danger">
   <ul>
     @foreach($errors->all() as $error)
     <li>{{$error}}</li>
     @endforeach
   </ul>
 </div>
@endif
<h2>Login</h2>
{!! Form::open(array('route' => 'handleLogin')) !!}
   <div class="form-group">
      {!! Form::label('user name') !!}
      {!! Form::text('username',null, array('class' => 'form-control')) !!}
   </div>
  <div class="form-group">
      {!! Form::label('password') !!}
      {!! Form::password('password', array('class' => 'form-control')) !!}
  </div>
   
   {!! Form::token() !!}
    {!! Form::submit(null, array('class' => 'btn btn-primary')) !!}
  {!! Form::close() !!} 
@endsection	