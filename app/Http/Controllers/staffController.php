<?php

namespace App\Http\Controllers;
use App\Models\staff;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        
        return View('admin');
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
        $student = new staff;
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
    public function show(string $id)
    {
        //
        $student = staff::find($id);
        return view('staff.show')->with('staff', $student);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $student = staff::find($id);
        return view('staff.edit')->with('staff', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $student = staff::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('staff')->with('flash_message', 'staff Updated!');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        staff::destroy($id);
        return redirect('student')->with('flash_message', 'staff deleted!');
    }
}
