<?php


namespace App\Http\Controllers;
use App\Models\enrollment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    //
    function index():View{
        return View('enrollment');
    }
    function index1():View{
        $enrollmentEdit=enrollment::all();
        return View('enrollmentAction',compact('enrollmentEdit'));
    }
    function index2():View{
        return View('enrollmentUpdate');
    }
    function store(Request $request){
        $enrollment = new enrollment;
        $enrollment->enrollment_no=request('enrollment_no');
        $enrollment->batch=request('batch');
        $enrollment->student=request('student');
        $enrollment->join_date=request('join_date');
        $enrollment->fee=request('fee');
        $enrollment->save();
    }
    function update_enroll(Request $request,$id){
        $enrollment = enrollment::find($id);
        $enrollment->enrollment_no=request('enrollment_no');
        $enrollment->batch=request('batch');
        $enrollment->student=request('student');
        $enrollment->join_date=request('join_date');
        $enrollment->fee=request('fee');
        $enrollment->update();

        return redirect('enrollmentAction');

    }
    public function edit_enrollment($id){
        $enrollment=enrollment::find($id);
        return View('enrollmentUpdate',compact('enrollment'));
    }
    public function delete_enrollment($id){
        enrollment::destroy($id);
        return back();
    }
    public function show_enroll(enrollment $id){
        $enrollmentEdit=enrollment::find($id);
        return View('view_enrollment',compact('enrollmentEdit'));
    }
    public function index4(){
        $enrollmentEdit=enrollment::all();
        return View('view_enrollment',compact('enrollmentEdit'));
    }
}
