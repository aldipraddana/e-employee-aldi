<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index() {
        $data['activeMenu'] = 'Bantuan';
        return view('section.help', $data);
    }
}
