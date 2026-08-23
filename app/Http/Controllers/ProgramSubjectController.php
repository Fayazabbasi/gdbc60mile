<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Subject;
use Illuminate\Http\Request;

class ProgramSubjectController extends Controller
{
    public function create()
    {
        $programs = Program::where('is_active', true)
            ->orderBy('name')
            ->get();

        $subjects = Subject::where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('backend.program_subjects.create', compact(
            'programs',
            'subjects'
        ));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'program_id' => 'required|exists:programs,id',
        'subject_id' => 'required|exists:subjects,id',
    ]);

    $program = Program::findOrFail($validated['program_id']);

    // Check if subject is already assigned to this program
    if ($program->subjects()->where('subject_id', $validated['subject_id'])->exists()) {
        return back()
            ->withInput()
            ->withErrors([
                'subject_id' => 'This subject is already assigned to the selected program.'
            ]);
    }

    // Assign subject to program
    $program->subjects()->attach($validated['subject_id']);

    return redirect()
        ->route('program-subject.create')
        ->with('success', 'Subject assigned to program successfully.');
}
}