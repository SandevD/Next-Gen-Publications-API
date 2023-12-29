<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(Request $request){
        $this->validate($request, [
            'image' => $request->validation,
            'type' => 'required',
            'parent' => 'required'
        ]);

        $relative = DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $request->parent . DIRECTORY_SEPARATOR . $request->type . DIRECTORY_SEPARATOR;
        $filename = $request->parent . '_' . $request->type . '_' . time() . rand() . '.' . $request->image->getClientOriginalExtension();
        $directory = public_path($relative);

        $request->image->move($directory, $filename);

        return response()->json([
            'message' => 'File uploaded successfully!',
            'filepath' => $relative . $filename
        ]);

    }

    public function fileUpload(Request $request){


        $relative = DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . $request->parent . DIRECTORY_SEPARATOR . $request->type . DIRECTORY_SEPARATOR;
        $filename = $request->parent . '_' . $request->type . '_' . time() . rand() . '.' . $request->file->getClientOriginalExtension();
        $directory = public_path($relative);

        $request->file->move($directory, $filename);

        return response()->json([
            'message' => 'File uploaded successfully!',
            'filepath' => $relative . $filename,
            'filename' => $filename
        ]);
    }
}
