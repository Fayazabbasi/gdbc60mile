<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    /**
     * Display a listing of programs.
     */
    public function index()
    {
        $programs = Program::latest()->paginate(15);

        return view('backend.programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new program.
     */
    public function create()
    {
       
        return view('backend.programs.create');
    }

    /**
     * Store a newly created program.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|max:50|unique:programs,code',
            'description' => 'nullable|string',
            'duration' => 'nullable|string|max:100',
            'staff_type' => 'nullable|string|max:100',
            'degree_type' => 'nullable|string|max:100',
            'eligibility' => 'nullable|string',
            'fee' => 'nullable|numeric|min:0',
            'is_active' => 'nullable|boolean',
            
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_active'] = $request->boolean('is_active');

        Program::create($validated);

        return redirect()
            ->route('programs.index')
            ->with('success', 'Program created successfully.');
    }

    /**
     * Display a specific program.
     */
    public function show(Program $program)
    {
        return view('backend.programs.show', compact('program'));
    }

    /**
     * Show the form for editing a program.
     */
    public function edit(Program $program)
    {
        return view('backend.programs.edit', compact('program'));
    }

    /**
     * Update the specified program.
     */
    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|max:50|unique:programs,code,' . $program->id,
            'description' => 'nullable|string',
            'duration' => 'nullable|string|max:100',
            'staff_type' => 'nullable|string|max:100',
            'degree_type' => 'nullable|string|max:100',
            'eligibility' => 'nullable|string',
            'fee' => 'nullable|numeric|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_active'] = $request->boolean('is_active');

        $program->update($validated);

        return redirect()
            ->route('programs.index')
            ->with('success', 'Program updated successfully.');
    }

    /**
     * Remove the specified program.
     */
    public function destroy(Program $program)
    {
        $program->delete();

        return redirect()
            ->route('programs.index')
            ->with('success', 'Program deleted successfully.');
    }
}