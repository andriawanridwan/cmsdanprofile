<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Upload;
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upload = Upload::latest()->paginate(8);
        return view('upload.index',compact('upload'));
    }

    public function create(){
        return view('upload.create');
    }

    public function kirim(Request $request){


        if($request->file('foto')){
        $file = $request->foto;
        $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
        $destiny = public_path('image/upload');
        $file->move($destiny,$filename);
        Upload::create([
            'foto' => $filename,
            'token' => $request->token
        ]);
        }
    }
    public function hapus(Request $request){
        $data = Upload::where('token', $request->token)->first(); 
        @unlink(public_path('image/upload/'. $data->foto));
;
        $data->delete();
        return 'Berhasil';
    }

    public function destroy($id){
        $data = Upload::findOrFail($id);
        @unlink(public_path('image/upload/'. $data->foto));
        $data->delete();
        return back();
    }  
}
