@section('title','details for'.$course->name)



@section('navbar')



@extends('layout')

<h1 class="text-center">Details for {{$course->name}}</h1>



<div class="row">
<p align="left">
<a href="/courses/{{$course->id}}/edit"><button class="text-center rounded btn btn-outline-primary col-10 ml-5 mr-4  p-2" >EDIT</button></a>

<form action="/courses/{{$course->id}}" method="post">
    @method('DELETE')
    @csrf

    <p align="right">
<button class="text-center rounded btn btn-outline-danger col-10 ml-5 mr-1 p-2" type="submit" >DELETE</button>
</p></p>
</form>
</div>
<p><strong>Name: </strong>{{$course->name}}</p>
<p><strong>Email: </strong>{{$course->email}}</p>
<p><strong>Company: </strong>{{$course->company->name}}</p>


@endsection



