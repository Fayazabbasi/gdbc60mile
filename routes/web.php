<?php

use App\Http\Controllers\FacultyMembersController;
use App\Http\Controllers\frontend\FeeStructureController;
use App\Http\Controllers\frontend\ProgramController as PC;

Route::get('/programs', [ProgramController::class, 'index'])
    ->name('programs.index');

use App\Http\Controllers\ProgramSubjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

//backend routes

Route::get('/front-programs', [PC::class, 'index'])
    ->name('front-programs.index');

    Route::get('/front-programs/{slug}', [PC::class, 'show'])
    ->name('front-programs.show');

    Route::get('/structure', [PC::class, 'organization'])
    ->name('structure.organization');

    Route::get('/principal', [FacultyMembersController::class, 'principal'])
    ->name('frontend.principal');

    
   Route::get('/fee-structure', [FeeStructureController::class, 'index'])
    ->name('frontend.fee-structure');


Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');

});

Route::middleware('auth')->group(function () {

    Route::get('/admin', function () {
        return view('backend.index');
    })->name('backend.index');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

});
Route::get('/register', function () {
    return view('backend.register');
})->name('backend.register');




//fontend routes


Route::get('/', function () {
    return view('frontend.index');
})->name('frontend.index');


Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('frontend.about-us');

Route::get('/admissions', function () {
    return view('frontend.admissions');
})->name('frontend.admissions');

Route::get('/academics', function () {
    return view('frontend.academics');
})->name('frontend.academics');


Route::get('/mission', function () {
    return view('frontend.mission');
})->name('frontend.mission');

Route::get('/downloads', function () {
    return view('frontend.downloads');
})->name('frontend.downloads');

// Route::get('/principal', function () {
//     return view('frontend.principal');
// })->name('frontend.principal');



// Route::get('/faculty-members', function () {
//     return view('frontend.faculty-members');
// })->name('frontend.faculty-members');

Route::get('/faculty-members', [FacultyMembersController::class, 'index'])
        ->name('frontend.faculty-members');

Route::get('/gallery', function () {
    return view('frontend.gallery');
})->name('frontend.gallery');

Route::get('/campus-facilities', function () {
    return view('frontend.campus-facilities');
})->name('frontend.campus-facilities');

Route::get('/events', function () {
    return view('frontend.events');
})->name('frontend.events');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');

// ---------------
// GET       /staff              index
// GET       /staff/create       create
// POST      /staff              store
// GET       /staff/{staff}      show
// GET       /staff/{staff}/edit edit
// PUT       /staff/{staff}      update
// DELETE    /staff/{staff}      destroy



// Route::middleware('auth')->group(function () {
//     Route::resource('staff', StaffController::class);
// });

Route::resource('staff', StaffController::class);





// Route::middleware('auth')->group(function () {
//     Route::resource('departments', DepartmentController::class);
// });
Route::resource('departments', DepartmentController::class);





// GET       /roles              → roles.index
// GET       /roles/create       → roles.create
// POST      /roles              → roles.store
// GET       /roles/{role}       → roles.show
// GET       /roles/{role}/edit  → roles.edit
// PUT/PATCH /roles/{role}       → roles.update
// DELETE    /roles/{role}       → roles.destroy
// Route::middleware('auth')->group(function () {
//     Route::resource('roles', RoleController::class);
// });
Route::resource('roles', RoleController::class);



// | Method    | URL                        | Controller  |
// | --------- | -------------------------- | ----------- |
// | GET       | `/programs`                | `index()`   |
// | GET       | `/programs/create`         | `create()`  |
// | POST      | `/programs`                | `store()`   |
// | GET       | `/programs/{program}`      | `show()`    |
// | GET       | `/programs/{program}/edit` | `edit()`    |
// | PUT/PATCH | `/programs/{program}`      | `update()`  |
// | DELETE    | `/programs/{program}`      | `destroy()` |

Route::resource('programs', ProgramController::class);



// GET       /subjects
// GET       /subjects/create
// POST      /subjects
// GET       /subjects/{subject}
// GET       /subjects/{subject}/edit
// PUT/PATCH /subjects/{subject}
// DELETE    /subjects/{subject}
Route::resource('subjects', SubjectController::class);

Route::get(
    '/program-subject/create',
    [ProgramSubjectController::class, 'create']
)->name('program-subject.create');

Route::post(
    '/program-subject',
    [ProgramSubjectController::class, 'store']
)->name('program-subject.store');