@extends('layouts.master')

@section('content')
<h3>HomePage of user {{\Auth::user()->username}}</h3>
@endsection