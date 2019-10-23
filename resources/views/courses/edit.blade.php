
@extends('layout')

@section('title')
Edit Course deatails for{{ $course->name }}
@endsection

@section('navbar')


<h1>Edit Course details for {{$course->name}}</h1>
<form action="/courses/{{$course->id}}" method='post' class=" mb-5">
@method('PATCH')
    @include('courses.form')
<div class="text-center">
<button type='submit' class="rounded btn btn-outline-primary" >Save new course</button>
</div>


</form>


@endsection

