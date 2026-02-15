<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $employees = Employee::when($search, function ($query) use ($search) {
            $query->where('full_name', 'like', "%{$search}%");
        })->get();

        return response()->json($employees);
    }
}
