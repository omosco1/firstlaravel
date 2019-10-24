@section('title','details for'.$course->name)



@section('navbar')



@extends('layout')

<h1 class="text-center">Details for {{$course->name}}</h1>



<div class="row">
<p align="left">
<a href="/courses/{{$course->id}}/edit"><button class="text-center rounded btn btn-outline-primary col-10 ml-3 mr-5  p-1" >EDIT</button></a>

<form action="/courses/{{$course->id}}" method="post">
    @method('DELETE')
    @csrf

    <p align="right">
<button class="text-center rounded btn btn-outline-danger col-10 ml-3 mr-4 p-1" type="submit" >DELETE</button>
</form>
</div>
<p><strong>Name: </strong>{{$course->name}}</p>
<p><strong>Email: </strong>{{$course->email}}</p>
<p><strong>Company: </strong>{{$course->company->name}}</p>


@endsection



