<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index ()
    {
        return view('about', [
            'biodata' => DB::table('biodata')->first(),
            'title' => 'TodoApp | About',
            'hobbies' => DB::table('hobbies')->where('id_user', 1)->get(),
        ]);
    }
}
