<?php

namespace App\Http\Controllers;
use App\Models\teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): View
    {
        $teacher=teacher::all(); // This retrieves all records from the '

        return view('teacher', compact('teacher'));

    }
    public function index1(): View{
        $teacherEdit=teacher::all(); // This retrieves all records from the '
        return View('teacherEdit',compact('teacherEdit'));
    }
    public function index2(): View{

        return View('teacherUpdate');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $teacherEdit=teacher::all();
        return view('view_teacher',compact('teacherEdit'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = new teacher;
        $teacher->name= request('name');
        $teacher->email= request('email');
        //Making hashed password for security purposes
        $teacher->password= Hash::make('password');
        $teacher->save();
       return redirect('teacherEdit')->with('teacher', 'New Teacher added');
        /*$input = $request->all();
        teacher::create($input);
      */
    }


    /**
     * Display the specified resource.
     */
    public function show_teacher(teacher $id)
    {
        //
        $teacherEdit = teacher::find($id);
        return view('view_teacher',compact('teacherEdit'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_teacher($id)
    {
        //
        $teacher = teacher::find($id);
        return view('teacherUpdate',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_teacher(Request $request,$id)
    {
        //
        $teacher = teacher::find($id);
        $teacher->name= request('name');
        $teacher->email= request('email');
        //Making hashed password for security purposes
        $teacher->password= Hash::make('password');

        $teacher->save();
        return redirect('teacherEdit')->with('teacher', 'teacher Updated!');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy_teacher(string $id)
    {
        //
        teacher::destroy($id);
        return redirect('teacherEdit')->with('flash_message', 'teacher deleted!');
    }
    /*public function search(Request $request){
        $search = $request->query->all();
        $teacher=teacher::where(function ($query) use ($search) {
            $query->where('name','like',"%$search%")
            ->orwhere('email','like','%$search%');
        })->get();
        return View('teacherEdit',compact('teacher','search'));
        }*/
    }
