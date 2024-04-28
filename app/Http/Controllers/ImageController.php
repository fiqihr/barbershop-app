<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Models\Pelayanan;
use getMimeType;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        $path = Storage::putFile('image', $request->image);
        return response()->json(['path' => $path]);
    }
    
    public function getImage($path)
    {
        $image = Storage::get($path);
        return response($image, 200)->header('Content-Type', Storage::mimeType($path));
    }
    
    // public function getImage()
    // {
    //     $images = Pelayanan::orderBy('id','DESC')->get();
    //     return response()->json($images);
    // }
    
    // public function Image($fileName){
    //         $path = public_path().'/image/'.$fileName;
    //         return Response::download($path);   
    // }
    
}