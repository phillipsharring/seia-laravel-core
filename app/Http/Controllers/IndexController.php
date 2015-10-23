<?php

namespace Seia\Core\Http\Controllers;

use Illuminate\Http\Request;

use Seia\Core\Http\Requests;
use Seia\Core\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index', ['title' => 'SEIA Laravel Core']);
    }

}
