<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
class FileUpload extends Controller
{
    //
    public function index(){
        return View('upload');
    }
    public function store(Request $request){
        $file=new File;
        $file->file=request('file');
        $file->save();
        return redirect('student');
    }
}
