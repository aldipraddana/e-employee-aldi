<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{   
    public function index() {
        $data['employees'] = Employee::orderBy("id", "desc")->get();
        $data['activeMenu'] = 'Monitoring Karyawan';
        return view('section.monitoring', $data);
    }
}
