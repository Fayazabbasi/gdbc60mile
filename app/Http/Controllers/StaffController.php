<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Role;
use App\Models\Subject;
use App\Models\StaffSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    /**
     * Display all staff.
     */
    public function index()
    {
        $staff = Staff::with(['role', 'parent'])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->paginate(15);

        return view('backend.staff.index', compact('staff'));
    }

    /**
     * Show create form.
     */
    public function create()
    {
    $roles = Role::orderBy('name')->get();
    // dd($roles);
    $parents = Staff::where('staff_type','=','management')->get();
    $subjects = Subject::all();
    return view('backend.staff.create', compact(
        'roles',
        'parents',
        'subjects'
    ));
    }

    /**
     * Store new staff.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'employee_code' => 'nullable|string|max:255|unique:staff,employee_code',
        'name' => 'required|string|max:255',
        'father_name' => 'nullable|string|max:255',
        'cnic' => 'nullable|string|max:255|unique:staff,cnic',

        'email' => 'nullable|email|max:255',
        'phone' => 'nullable|string|max:255',
        'address' => 'nullable|string',
        'staff_type' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'qualification' => 'nullable|string|max:255',
        'specialization' => 'nullable|string',

        'role_id' => 'nullable|exists:roles,id',
         'subject_id' => 'nullable|exists:subjects,id',
        'parent_id' => [
            'nullable',
            'exists:staff,id',
        ],

        'sort_order' => 'nullable|integer|min:0',

        'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
        'bio' => 'nullable|string',

        'joining_date' => 'nullable|date',
        'leaving_date' => 'nullable|date|after_or_equal:joining_date',

        'is_active' => 'nullable|boolean',
    ]);

    // Prevent parent_id from being 1 or less
//      dd([
//     'upload_max_filesize' => ini_get('upload_max_filesize'),
//     'post_max_size' => ini_get('post_max_size'),
// ]);

    // if (
    //     isset($validated['parent_id']) &&
    //     $validated['parent_id'] <= 1
    // ) {
    //     return back()
    //         ->withInput()
    //         ->withErrors([
    //             'parent_id' => 'Please select a valid parent staff member.'
    //         ]);
    // }

           

    // Handle photo
    if ($request->hasFile('photo')) {

        $path = $request->file('photo')
            ->store('staff', 'public');

        $validated['photo'] = $path;
    }

    $staff = Staff::create($validated);
    $staffId = $staff->id;
    
    if(!empty($request->subject_id)){
     StaffSubject::create([
    'staff_id' => $staffId,
    'subject_id' => $request->subject_id,
    ]);
     }
    

    return redirect()
        ->route('staff.create')
        ->with('success', 'Staff member created successfully.');
}
    /**
     * Display a single staff member.
     */
    public function show(Staff $staff)
    {
        $staff->load([
            'role',
            'parent',
            'children'
        ]);

        return view('backend.staff.show', compact('staff'));
    }

    /**
     * Show edit form.
     */
    public function edit(Staff $staff)
    {
        $roles = Role::orderBy('name')->get();

        // Do not allow the current staff member
        // to become their own parent.
        $parents = Staff::where('is_active', true)
            ->where('id', '!=', $staff->id)
            ->orderBy('name')
            ->get();

        return view('backend.staff.edit', compact(
            'staff',
            'roles',
            'parents'
        ));
    }

    /**
     * Update staff member.
     */
    public function update(Request $request, Staff $staff)
    {
        $validated = $request->validate([
            'employee_code' => 'nullable|string|max:255|unique:staff,employee_code,' . $staff->id,
            'name' => 'required|string|max:255',
            'father_name' => 'nullable|string|max:255',
            'cnic' => 'nullable|string|max:255|unique:staff,cnic,' . $staff->id,

            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string',
             'staff_type' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'department' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'specialization' => 'nullable|string',
             'subject_id' => 'nullable|exists:subjects,id',
            'role_id' => 'nullable|exists:roles,id',
            'parent_id' => 'nullable|exists:staff,id',

            'sort_order' => 'nullable|integer|min:0',

            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            'bio' => 'nullable|string',

            'joining_date' => 'nullable|date',
            'leaving_date' => 'nullable|date|after_or_equal:joining_date',

            'is_active' => 'nullable|boolean',
        ]);

        // Upload new photo
        if ($request->hasFile('photo')) {

            // Delete old photo
            if ($staff->photo) {
                Storage::disk('public')->delete($staff->photo);
            }

            $validated['photo'] = $request
                ->file('photo')
                ->store('staff', 'public');
        }

        $validated['sort_order'] = $request->input('sort_order', 0);
        $validated['is_active'] = $request->boolean('is_active');

        $staff->update($validated);

        return redirect()
            ->route('staff.index')
            ->with('success', 'Staff member updated successfully.');
    }

    /**
     * Delete staff member.
     */
    public function destroy(Staff $staff)
    {
        // Delete photo
        if ($staff->photo) {
            Storage::disk('public')->delete($staff->photo);
        }

        $staff->delete();

        return redirect()
            ->route('staff.index')
            ->with('success', 'Staff member deleted successfully.');
    }
}