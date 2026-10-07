<?php
use App\Models\Gallery;
use App\Models\Notice;
use App\Models\Event;
use App\Models\Program;
use App\Http\Controllers\AdmissionInquiryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\FacultyMembersController;
use App\Http\Controllers\frontend\FeeStructureController;
use App\Http\Controllers\frontend\ProgramController as PC;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProgramSubjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GalleryController;
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

Route::get('/programs', [ProgramController::class, 'index'])
    ->name('programs.index');

//fontend routes
Route::get('/',[HomeController::class,'index'])->name('frontend.index');

// Route::get('/', function () {
//     return view('frontend.index');
// })->name('frontend.index');

Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('frontend.about-us');

Route::get('/admissions', function () {
    $image = Gallery::find(3);
    $programs = Program::select('id','name')->get();
    return view('frontend.admissions',compact('image','programs'));
})->name('frontend.admissions');

Route::get('/academics', function () {
    return view('frontend.academics');
})->name('frontend.academics');

Route::get('/mission', function () {
    return view('frontend.mission');
})->name('frontend.mission');

Route::get('/downloads', function () {
    $admissions = Notice::where('category','=','admission')->get();
    $notices = Notice::where('category','=','notice')->get();
    
    return view('frontend.downloads',compact('admissions','notices'));
})->name('frontend.downloads');

// Route::get('/principal', function () {
//     return view('frontend.principal');
// })->name('frontend.principal');

// Route::get('/faculty-members', function () {
//     return view('frontend.faculty-members');
// })->name('frontend.faculty-members');

Route::get('/faculty-members', [FacultyMembersController::class, 'index'])
        ->name('frontend.faculty-members');

Route::get('/galleries', function () {
   $galleries = Gallery::all();
    return view('frontend.gallery',compact('galleries'));
})->name('frontend.gallery');

Route::get('/campus-facilities', function () {
    $galleries = Gallery::where('category','=','Laboratories')->get();
    return view('frontend.campus-facilities',compact('galleries'));
})->name('frontend.campus-facilities');

Route::get('/events', function () {
    $events = Event::latest()->get();
    return view('frontend.events',compact('events'));
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

Route::resource('gallery', GalleryController::class)
    ->names('gallery');

// | Method    | URL                      | Controller  |
// | --------- | ------------------------ | ----------- |
// | GET       | `/notices`               | `index()`   |
// | GET       | `/notices/create`        | `create()`  |
// | POST      | `/notices`               | `store()`   |
// | GET       | `/notices/{notice}`      | `show()`    |
// | GET       | `/notices/{notice}/edit` | `edit()`    |
// | PUT/PATCH | `/notices/{notice}`      | `update()`  |
// | DELETE    | `/notices/{notice}`      | `destroy()` |


Route::resource('notices', NoticeController::class);
// use Illuminate\Support\Facades\Route;
Route::get('/notices/{notice}/view-pdf', [App\Http\Controllers\NoticeController::class, 'viewPdf'])
    ->name('notices.viewPdf');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');
// backend.events.index
// backend.events.create
// backend.events.store
// backend.events.show
// backend.events.edit
// backend.events.update
// backend.events.destroy
    Route::prefix('admin')
    ->name('backend.')
    ->group(function () {
        Route::resource('events', EventController::class);
    });

    

Route::post('/admission-inquiry', [AdmissionInquiryController::class, 'store'])
    ->name('admission.inquiry');