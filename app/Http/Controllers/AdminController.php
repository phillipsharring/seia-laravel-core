<?php

namespace Seia\Core\Http\Controllers;

use Illuminate\Http\Request;

use Seia\Core\Http\Requests;
use Seia\Core\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
