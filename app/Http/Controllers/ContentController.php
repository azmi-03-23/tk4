<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function show(Request $request){
        $contentTypes = $request->getAcceptableContentTypes();
        return view('acceptedContentType', ['contentTypes '=> $contentTypes]);
    }
}
