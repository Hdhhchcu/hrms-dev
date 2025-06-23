<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Assets;
use App\Http\Controllers\Attendance;
use App\Http\Controllers\Department;
use App\Http\Controllers\Designation;
use App\Http\Controllers\Employee;
use App\Http\Controllers\EmployeeAddress;
use App\Http\Controllers\EmployeeBank;
use App\Http\Controllers\EmployeeDocument;
use App\Http\Controllers\EmployeeEducation;
use App\Http\Controllers\EmployeeExperience;
use App\Http\Controllers\Event;
use App\Http\Controllers\Holiday;
use App\Http\Controllers\Leaves;
use App\Http\Controllers\Policy;
use App\Http\Controllers\Team;
use App\Http\Controllers\BackgroundVerification;
use App\Http\Controllers\Login;
use App\Http\Controllers\UserManagement;
use App\Http\Middleware\Authenticate;
use App\Models\User;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('dashboard.dashboard',['page'=>"Dashboard"]);
// });

// Route::get('/employee', function () {
//     return view('employee.employees',['page'=>"Employee List"]);
// });





//////employee routes
Route::prefix('employee')->controller(Employee::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/grid', 'grid');
    Route::post('/add', 'add');
    Route::get('/view/{id}', 'view');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});

/////////employee bank details
Route::prefix('employee/bank')->controller(EmployeeBank::class)->group(function () {
    Route::post('/add', 'add');
    Route::get('/view/{id}', 'view');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});

/////////employee document details
Route::prefix('employee/document')->controller(EmployeeDocument::class)->group(function () {
    Route::post('/add', 'add');
    Route::get('/view/{id}', 'view');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});

/////////employee Address details
Route::prefix('employee/address')->controller(EmployeeAddress::class)->group(function () {
    Route::post('/add', 'add');
    Route::get('/view/{id}', 'view');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});

/////////employee Education details
Route::prefix('employee/education')->controller(EmployeeEducation::class)->group(function () {
    Route::post('/add', 'add');
    Route::get('/view/{id}', 'view');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});

/////////employee Experience details
Route::prefix('employee/experience')->controller(EmployeeExperience::class)->group(function () {
    Route::post('/add', 'add');
    Route::get('/view/{id}', 'view');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});






//////designation routes
Route::prefix('designation')->controller(Designation::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/add', 'add');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});




//////department routes
Route::prefix('department')->controller(Department::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/add', 'add');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});



//////Team routes
Route::prefix('team')->middleware(["auth", "role:Employee,Team,read"])->controller(Team::class)->group(function () {
    // Route::get('/', 'index');
    ///guddu
    Route::get('/', function () {
        // echo "<pre>";
        dd(User::with('check')->where('id', 3)->first());
        // echo "Hii";
    });
    Route::post('/add', 'add');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});

//////Leaves routes
Route::prefix('leave')->controller(Leaves::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/add', 'add');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});


//////Holiday routes
Route::prefix('holiday')->controller(Holiday::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/add', 'add');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});


//////Events routes
Route::prefix('event')->controller(Event::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/all', 'all');
    Route::post('/add', 'add');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});

//////Events routes
Route::prefix('policy')->controller(Policy::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/all', 'all');
    Route::post('/add', 'add');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});


//////Assets routes
Route::prefix('assetmanage')->controller(Assets::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/all', 'all');
    Route::post('/add', 'add');
    Route::post('/update/{id}', 'update');
    Route::get('/edit/{id}', 'edit');
    Route::get('/delete/{id}', 'delete');
});


//////Attendance routes
Route::prefix('attendance')->controller(Attendance::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/all', 'all');
    Route::get('/chat', 'chat');
    Route::post('/add', 'add');
    Route::get('/allattendance', 'allatt');
    Route::get('/calendar', 'calendar');
    Route::get('/delete/{id}', 'delete');
});



//////Background verification routes
Route::prefix('backgroundverification')->controller(BackgroundVerification::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/add', 'add');
    Route::get('/list', 'list');
    Route::get('/edit/{id}', 'edit');
    // Route::get('/delete/{id}', 'delete');
});



//////Background verification routes
Route::prefix('login')->controller(Login::class)->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/', 'handlelogin');
    Route::get('/logout', 'logout');
});




//////User Management routes
Route::prefix('user_management')->controller(UserManagement::class)->group(function () {
    Route::get('/', 'index');
});





/////routes

Route::get('/chat/{friend}', function (User $friend) {
    return view('chat.chat', [
        'friend' => $friend
    ]);
})->name('chat');


Route::get('/messages/{friend}', function (User $friend) {
    return ChatMessage::query()
        ->where(function ($query) use ($friend) {
            $query->where('sender_id', auth()->id())
                ->where('receiver_id', $friend->id);
        })
        ->orWhere(function ($query) use ($friend) {
            $query->where('sender_id', $friend->id)
                ->where('receiver_id', auth()->id());
        })
        ->with(['sender', 'receiver'])
        ->orderBy('id', 'asc')
        ->get();
});


Route::post('/messages/{friend}', function (User $friend) {
    $message = ChatMessage::create([
        'sender_id' => auth()->id(),
        'receiver_id' => $friend->id,
        'text' => request()->input('message')
    ]);

    broadcast(new MessageSent($message));

    return $message;
});
