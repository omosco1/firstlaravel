
@extends('layout')

@section('title')
Add New Customer
@endsection

@section('navbar')


<h1>Add New Course</h1>
<form action="/courses" method='post' class=" mb-5">

    @include('courses.form')
<div class="ml-3 text-left">
<button type='submit' class="rounded btn btn-outline-primary" >+Add New</button>
</div>


</form>


@endsection

