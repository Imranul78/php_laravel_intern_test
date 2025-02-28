<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'company_id' => 'required|exists:companies,id',  // Make sure the company exists
        ]);

        // Create a new employee
        $employee = Employee::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'company_id' => $validated['company_id'],
        ]);

        // Return a success response
        return response()->json([
            'message' => 'Employee created successfully.',
            'employee' => $employee,
        ], 201);
    }
}

