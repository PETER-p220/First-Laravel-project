<?php

namespace App\Http\Controllers;
use App\Models\course;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $courseEdit=course::all();
        return View('edit',compact('courseEdit'));
    }
    public function index1(): View
    {
        $course=course::all();
        return View('coursePage', compact('course'));
    }
    public function index2(): View{
        return View('courseUpdate');
    }
    public function index3(): View{
        $courseEdit=course::all();
        return View('viewCourse', compact('courseEdit'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $course = new course;
        $course->name= request('name');
        $course->syllabus= request('syllabus');
        $course->duration= request('duration');
        $course->save();
        /*$input = $request->all();
        course::create($input);*/
        return redirect('edit')->with('success', 'course Added!');
    }


    /**
     * Display the specified resource.
     */
    public function show_course(course $id)
    {
        //
        $courseEdit = course::find($id);
        return View('viewCourse',compact('courseEdit'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_course($id)
    {
        //
        $course = course::find($id);
        return View('courseUpdate',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_course(Request $request, $id)
    {
        //
        $course = course::find($id);
        $course->name= request('name');
        $course->syllabus= request('syllabus');
        $course->duration= request('duration');
        $course->update();
        return redirect('edit')->with('success', 'course Updated!');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete_course($id)
    {
        //
        course::destroy($id);
        return back();
    }
}
