<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function employees(Request $request) {
        if (!empty($request->input('name'))) {
            $name = $request->input('name');
            $employees = Employee::where('name', 'like', "$name%")->get()->toArray();
        }else {
            $employees = Employee::all()->toArray();
        }
        return response()->json([
            'data' => $employees
        ]);
    }
}
