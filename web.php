Route::get('/', function () {
    return 'Welcome to Laravel';
});


Route::get('/about', function () {
    return view('about');
});  


// Required parameter
Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
});

// Optional parameter with default fallback
Route::get('/user/{name?}', function ($name = 'Guest') {
    return "Hello " . $name;
});


use App\Http\Controllers\UserController;

Route::get('/user/{id}', [UserController::class, 'show']);