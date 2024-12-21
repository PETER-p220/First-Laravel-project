<?php

namespace App\Http\Controllers;
use App\Models\batch;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class batchController extends Controller
{
    //

    public function index(): View{
        $batch=batch::all(); // This retrieves all records from the '
        return View('batch',compact('batch'));
    }
    public function index1():View
    {
         $batchEdit = batch::all();
         return View('batchEdit',compact('batchEdit'));
    }
    public function index2():View{
        return View('batchUpdate');
    }
    public function edit_batch($id)
    {
        //
        $batch = batch::find($id);
        return view('batchUpdate',compact('batch'));
    }



    public function store(Request $request){
        $batch = new batch;
        $batch->batch_name = request('batch_name');
        $batch->course_name = request('course_name');
        $batch->start_date = request('start_date');
        $batch->save();

    }
    public function update_batch(Request $request, string $id)
    {
        //
        $batch = batch::find($id);
        $batch->batch_name=request('batch_name');
        $batch->course_name=request('course_name');
        $batch->start_date=request('start_date');
        $batch->save();
        #$student = $request->all();
        #$studentEdit->update($student);
        return redirect('batchEdit')->with('flash_message', 'batch Updated!');

    }
    public function delete_batch($id){
        batch::destroy($id);
        return redirect('batchEdit')->with('flash_message', 'Batch deleted!');
    }
    public function show_batch(batch $id){
        $batchEdit=batch::find($id);
        return View('view_batch',compact('batchEdit'));
    }
    public function viewBatch(){
        $batchEdit=batch::all();
        return View('view_batch',compact('batchEdit'));
    }

}
