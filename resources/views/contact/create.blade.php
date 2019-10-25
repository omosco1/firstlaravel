@section('title')
Contact Us
@endsection

@extends('layout')
@section('navbar')
<h1>Contact Us</h1>

     {{-- @if(!session()->has('message')) --}}

   <form action="{{route('contact.store')}}" method="POST">

    <div class=" mb-4 pl-2 form-group" >
        <label for="name">Name:</label>
        <input type="text"  value="{{old('name') }} " name="name" id="name" class="mb-2 w-75 h-50% pl-4 rounded-pill form-control" >
        <div class="text-right  w-75">{{$errors->first('name')}}</div>
    </div>


    <div class=" mb-4 pl-2 form-group">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" class="mb-2 pl-4  w-75 h-50% rounded-pill form-control" value="{{old('email') }}">
    <div class="text-right  w-75">{{$errors->first('email')}}</div>
    </div>

    <div class=" mb-4 pl-2 form-group">
        <label for="messsage">Message:</label>
        <textarea name="message" id="message" cols="30" rows="10" class="pl-4  w-75 h-50  form-control" value="{{old('message') }}"></textarea>
        <div class="text-right  w-75">{{$errors->first('message')}}</div>
        </div>
         @csrf
        <p align="left">
            <button class="text-center rounded btn btn-outline-primary col- ml-1 mr-1 p-2" type="submit" >SEND MESSAGE</button>

   </form>
    {{-- @endif --}}
@endsection
