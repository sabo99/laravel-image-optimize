<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageOptimizeController extends Controller
{
    public function index()
    {
        return view('pages.form');
    }

    public function upload(UploadRequest $request)
    {
        return $request->file('file') != null ? $this->optimizeImg($request) : redirect('/');
    }

    private function optimizeImg(Request $request)
    {
        $file       = $request->file('file');
        $name       = $request->file_name ?? Str::uuid();
        $extension  = $request->extension ?? $file->extension();
        $hashName   = "$name.$extension";
        $img = Image::make($file);

        $size = getimagesize($file);
        $original = $img->stream();

        $parameters = $img;
        if ($request->brightness != '0')
            $parameters = $img->brightness($request->brightness);
        if ($request->contrast != '0')
            $parameters->contrast($request->contrast);
        if ($request->blur != '1')
            $parameters->blur($request->blur);
        if ($request->sharpen != '10')
            $parameters->sharpen($request->sharpen);
        if ($request->opacity != '100')
            $parameters->opacity($request->opacity);
        if ($request->red != '0' && $request->green != '0' && $request->blue != '0')
            $parameters->colorize($request->red, $request->green, $request->blue);
        if ($request->rotate != '0')
            $parameters->rotate($request->rotate);
        if ($request->invert != null)
            $parameters->invert();
        if ($request->grayscale != null)
            $parameters->greyscale();
        if ($request->width != null)
            $parameters->resize($request->width, null);
        if ($request->height != null)
            $parameters->resize(null, $request->height);
        if ($request->flip != null)
            $parameters->flip($request->flip);

        $optimize = $parameters->stream();

        $originalPath = "original/$hashName";
        $optimizePath = "optimize/$hashName";

        $storage = Storage::disk();
        $storage->put("public/$originalPath", $original, 'public');
        $storage->put("public/$optimizePath", $optimize, 'public');

        $data  = [
            'original' => [
                'size' => [
                    'width' => $size[0],
                    'height' => $size[1],
                ],
                'extension' => $file->extension(),
                'path' => $originalPath
            ],
            'optimize' => [
                'size' => [
                    'width' => $parameters->width(),
                    'height' => $parameters->height(),
                ],
                'extension' => $extension,
                'path' => $optimizePath
            ]
        ];
        return redirect()->route('result')->with('data', $data);
    }

    public function result()
    {
        return session('data') != null ? view('pages.result', session('data')) : redirect('/');
    }
}
