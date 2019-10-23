<div class=" mb-2 " >
        <label for="name">Name:</label>
        <input type="text"  value="{{old('name') ?? $course->name }} " name="name" id="name" class="mb-2 w-75 h-50% pl-4 rounded-pill form-control" >
        <div class="text-right  w-75">{{$errors->first('name')}}</div>
    </div>
    <div class=" mb-4 pl-2 form-group">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" class="pl-4  w-75 h-100% rounded-pill form-control" value="{{old('email') ?? $course->email }}">
    <div class="text-right  w-75">{{$errors->first('email')}}</div>
    </div>
    <div class="form-group mb-4">
        <label for="active">Status</label>
        <select name="active" id="active" class=" pl-4  w-25 h-20 form-control">
            <option value="" disabled>Select Courses Available</option>

       @foreach ($course->activeOptions() as $activeOptionKey => $activeOptionValue)
        <option value="{{$activeOptionKey}}" {{$course->active == $activeOptionValue ? 'selected' : ''}}>{{$activeOptionValue}}</option>
       @endforeach

{{--
            <option value="1" {{$course->active =='Active' ?'selected':'' }}>Available</option>
            <option value="0"  {{$course->active =='Inactive' ? 'selected':'' }}>Unavailable</option> --}}
        </select>
    </div>
    <div class="form-group mb-4">
        <label for="company_id">Company</label>
        <select name="company_id" id="company_id" class=" pl-4  w-25 h-20 form-control">
           @foreach ($companies as $company)
           <option value="{{$company->id}}" {{$company->id == $course->company_id ? 'selected' : ''}}>{{$company->name}}</option>
           @endforeach
        </select>
    </div>
    @csrf
