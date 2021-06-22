<?php

namespace App\Http\Controllers;

use App\Models\Association;

use Illuminate\Http\Request;

class AgirController extends Controller
{
    public function index()
    {
        $assoc = Association::all();

        return \view('don',
        [
            'associations' => $assoc
        ]);
    }
}
