<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showForm()
    {
        return view('upload-form');
    }

    public function handleUpload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,docx|max:2048',
        ], [
            'file.required' => 'File is required',
            'file.file' => 'The uploaded file must be a valid file',
            'file.mimes' => 'Only jpg, png, pdf, and docx files are allowed',
            'file.max' => 'The file size must not exceed 2MB',
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads');

        return back()->with('success', 'File uploaded successfully!')->with('path', $path);
    }
}