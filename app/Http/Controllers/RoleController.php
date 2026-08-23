<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    /**
     * Display all roles.
     */
    public function index()
    {
        $roles = Role::withCount('staff')
            ->orderBy('name')
            ->paginate(15);

        return view('backend.roles.index', compact('roles'));
    }

    /**
     * Show form for creating a role.
     */
    public function create()
    {
        return view('backend.roles.create');
    }

    /**
     * Store a new role.
     */
    public function store(Request $request)
    {

    // print_r($request->all());die;
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                'unique:roles,name',
            ],

            'description' => [
                'required',
                'nullable',
                'string',
            ],

            'is_active' => [
                'required',
                'nullable',
                'boolean',
            ],
        ]);

        

        $validated['is_active'] = $request->boolean('is_active');
        $validated['slug'] = $request->post('name');
        Role::create($validated);

        return redirect()
            ->route('roles.create')
            ->with([
        'success' => 'Role created successfully.',
        'error' => 'Something else went wrong.',
    ]);
    }

    /**
     * Display a role.
     */
    public function show(Role $role)
    {
        $role->load('staff');

        return view('backend.roles.show', compact('role'));
    }

    /**
     * Show form for editing a role.
     */
    public function edit(Role $role)
    {
        // echo "<pre>";
        // print_r($role);die;
        
        return view('backend.roles.edit', compact('role'));
    }

    /**
     * Update a role.
     */
    public function update(Request $request, Role $role)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('roles', 'name')
                    ->ignore($role->id),
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'is_active' => [
                'required',
                'nullable',
                'boolean',
            ],
        ]);

        $validated['is_active'] = $request->boolean('is_active');
        $validated['slug'] = $request->post('name');

        $role->update($validated);

        return redirect()
            ->route('roles.edit', ['role' => $request->post('id')])
            ->with([
        'success' => 'Role Updated successfully.',
        'error' => 'Something else went wrong.',
    ]);
    }

    /**
     * Delete a role.
     */
    public function destroy(Role $role)
    {
        // Prevent deletion if staff members use this role.
        if ($role->staff()->exists()) {
            return redirect()
                ->route('roles.index')
                ->with(
                    'error',
                    'This role cannot be deleted because staff members are assigned to it.'
                );
        }

        $role->delete();

        return redirect()
            ->route('roles.index')
            ->with('success', 'Role deleted successfully.');
    }
}