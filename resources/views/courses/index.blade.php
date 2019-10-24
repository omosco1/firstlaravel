
@extends('layout')

@section('title')
Courses
@endsection

@section('navbar')


<h1 class="text-center">Courses List</h1>
<a href="courses/create"><button class ="btn btn-outline-primary">+ Add New Courses</button></a>


{{-- <div class="row mx-md-n5 ">


        <div class="col px-md-5 ml-4"><div class="p-3 my-4 bg-light">Available Courses</div></div>
        <div class="col px-md-5 mr-5"><div class="p-3 my-4 bg-light">Unavailable Courses</div></div>
      </div>

<div class='row ml-4'>

<div class="card bg-dark text-light col-4 mr-5">
    <div class="card-body width-100%">

<ol>

@foreach ($activecourses as $activecourse)
<li><h6>Name:</h6><a href="/courses/{{$activecourse->name}}">{{$activecourse->name}}</a><h6>Company:</h6><small> ({{$activecourse->company->name}})</small><h6>Status:</h6><p class ="text-success"> ({{$activecourse->active}})
</li>
@endforeach
</ol>
</div>
</div>

<div class="card bg-dark text-light col-4 ml-5">
    <div class="card-body width-100%">

<ol>

@foreach ($inactivecourses as $inactivecourse)
<li><h6>Name:</h6><a href="/courses/{{$inactivecourse->name}}">{{$inactivecourse->name}}</a><h6>Company:</h6><small>({{$inactivecourse->company->name}})</small><h6>Status:</h6><p class ="text-danger">({{$inactivecourse->active}}) </li>
@endforeach
</ol>
</div>
</div>



</div>

@endsection --}}

     @foreach ($courses as $course)

<div class='row mt-4'>

        <div class="card bg-dark text-light col-12 mr-5">
            <div class="card-body width-50%">
            <div class='col-2'>
                {{$course->id}}
            </div>
            <div class='col-4'>
                    <a href="/courses/{{$course->id}}">{{$course->name}}</a>
            </div>
            <div class='col-4'>
                {{$course->company->name}}
            </div>
            <div class="col-2"><p class ="text-success">
                {{$course->active}}</p>
            </div>

        </div>
    </div>
    </div>


@endforeach




@endsection

