<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return View('create');
    }
    public function index_student(): View{
        $studentEdit = student::all();
        return View('studentEdit',compact('studentEdit'));
    }
    public function index_std(): View{

        return View('editStd');

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
        $student = new student;
        $student->name= request('name');
        $student->email= request('email');
        //Making hashed password for security purposes
        $student->password= Hash::make('password');
        $student->save();

        /*$input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!');*/
    }


    /**
     * Display the specified resource.
     */
    public function show(student $id)
    {
        //
        $studentEdit = student::find($id);
        return view('view_student',compact('studentEdit'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_std($id)
    {
        //
        $student = student::find($id);
        return view('editStd')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_std(Request $request, string $id)
    {
        //
        $student = student::find($id);
        $student->email=request('email');
        $student->password=request('password');
        $student->save();
        #$student = $request->all();
        #$studentEdit->update($student);
        return View('editStd',compact('student'));
        #return redirect('create')->with('flash_message', 'student Updated!');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete_std($id)
    {
        //
        student::destroy($id);
        return redirect('studentEdit')->with('flash_message', 'Student deleted!');
    }
    public function show_student(){
        $studentEdit=student::all();
        return View('view_student',compact('studentEdit'));
    }
}
