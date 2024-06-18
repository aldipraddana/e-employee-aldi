<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmployeeInputController extends Controller
{
    public function index() {
        $data['activeMenu'] = 'Input Karyawan';
        return view('section.input-employee', $data);
    }

    public function store(Request $request) {
        try {
            $data = [
                'name' => $request->name,
                'place_of_birth' => $request->place_of_birth,
                'date_of_birth' => date('Y-m-d', strtotime($request->date_of_birth)),
                'email' => $request->email,
                'phone' => $request->phone,
                'work_entry_date' => date('Y-m-d', strtotime($request->work_entry_date)),
                'work_end_date' => date('Y-m-d', strtotime($request->work_end_date)),
                'job' => $request->job,
                'workplace' => $request->workplace,
                'created_by' => 1,
            ];
            $saveEmployee = Employee::create($data);
            return Redirect::back()->with(['success' => 'Data karyawan berhasil disimpan', 'error' => '']);
        } catch (\Throwable $th) {
            $error = $th->getMessage();
            return Redirect::back()->with(['success' => '', 'error' => $error]);
        }
    }
}
