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
        $data = [
            'name' => $request->name,
            'place_of_birth' => $request->place_of_birth,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone' => $request->phone,
            'work_entry_date' => $request->work_entry_date,
            'work_end_date' => $request->work_end_date,
            'job' => $request->job,
            'workplace' => $request->workplace,
            'created_by' => 1,
        ];

        $error = "";
        try {
            $saveEmployee = Employee::create($data);
            return Redirect::back()->with(['success' => 'Data karyawan berhasil disimpan', 'error' => '']);
        } catch (\Throwable $th) {
            $error = $th->getMessage();
            return Redirect::back()->with(['success' => '', 'error' => $error]);
        }
    }
}
