<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\Company;

class CoursesController extends Controller
{
 public function index()
 {
     //long method
    //  $activecourses = course::where('active',1)->get();
    //  $inactivecourses = course::where('active',0)->get();


    //short method
    // $activecourses = course::active()->get();
    // $inactivecourses = course::inactive()->get();



    $courses = course::all();

return view('courses.index',compact('courses'));




    //short hand for rending views

    //  return view ('courses.index', compact('activecourses','inactivecourses'));

// long hand for rending views
    // return view('internals.courses',[
        // 'activecourses'=> $activecourses,
        // 'inactivecourses'=> $inactivecourses,
        // ]);

//short hand method
 }
public function create (){
    $companies = Company::all();
    $course = new course();
    return view('courses.create',compact('companies','course'));
}

 public function library(){

// long method for validation
// $data = request()->validate([
// 'name' => 'required|min:2|',
// 'email' => 'required|email|',
// 'active' => 'required',
// 'company_id' => 'required',
// ]);


//short method for calling the data above
// course::create($data);
   course::create($this->validateRequest());

//long method
// $courses = new course();
// $courses->name = request('name');
// $courses->email = request('email');
// $courses->active = request('active');
// $courses->save();

return redirect('courses');
    //  dd(request('input'));
 }
 public function show($course)
 {
     $course = course::where('id',$course)->firstorfail();
     //you can also use
    //  $course = course::find($course);

     return view ('courses.show',compact('course'));
 }

    public function edit(course $course)
 {
    $companies = Company::all();
      return view ('courses.edit',compact('course', 'companies'));
 }

 public function update(course $course)
 {
     // (long method)
    // $data = request()->validate([
    //     'name' => 'required|min:2|',
    //     'email' => 'required|email|',
    //     'active' => 'required',
    //     'company_id' => 'required',
    // ]);
       // return the above (long method)
    // $course->update($data);

    // short method calling the validation funtion below
    $course->update($this->validateRequest());


    return redirect('courses/'.$course->id);
 }


 public function destroy(course $course)
   {
       $course->delete();

       return redirect('courses');
   }

  private function validateRequest()
  {
    return request()->validate([
    'name' => 'required|min:2|',
    'email' => 'required|email|',
    'active' => 'required',
    'company_id' => 'required',
    ]);
  }

}
