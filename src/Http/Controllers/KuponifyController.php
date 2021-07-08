<?php

namespace A4anthony\Kuponify\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Kuponify;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use League\Flysystem\Util;

class KuponifyController
{
    public function dashboard()
    {
        return Inertia::render('Welcome', [
            'title' => 'sjnnfnjngg'
        ]);
    }

    public function getTypes()
    {
        return Kuponify::getTypes();

    }


    public function assets(Request $request)
    {
        try {
            $path = dirname(__DIR__, 3) . '/public/' . Util::normalizeRelativePath(urldecode($request->path));
            //$path = dirname(__DIR__, 3) . '/Resources/assets/css/tailwind.css';
        } catch (\LogicException $e) {

            abort(404);
        }
        //dd($path);
        if (File::exists($path)) {
            $mime = '';
            if (Str::endsWith($path, '.js')) {
                $mime = 'text/javascript';
            } elseif (Str::endsWith($path, '.css')) {
                $mime = 'text/css';
            } else {
                $mime = File::mimeType($path);
            }
            $response = response(File::get($path), 200, ['Content-Type' => $mime]);
            $response->setSharedMaxAge(31536000);
            $response->setMaxAge(31536000);
            $response->setExpires(new \DateTime('+1 year'));

            return $response;
        }
        abort(404);
    }
}