<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index() {
        return view ('Forms.index');
    }
    public function create() {
        return view ('Forms.create');
    }
}
