<?php

// use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswiController;
use App\Http\Controllers\UriController;
use App\Http\Controllers\SubmissionController;

Route::get('/', function () {
    return "Hello World";
});


Route::get('form', [SiswiController::class, 'form']);
Route::post('/form/hasil', [SiswiController::class, 'hasil']);

Route::get('uri', [UriController::class, 'index']);

// use App\Http\Controllers\Contact1Controller;

// Route::get('contact', [Contact1Controller::class, 'index']);
// Route::post('contact', [Contact1Controller::class, 'hasil']);


use App\Http\Controllers\JsonInputController;

Route::get('/json-form', [JsonInputController::class, 'showForm']);
Route::post('/json-submit', [JsonInputController::class, 'handleForm']);

use App\Http\Controllers\InputController;

Route::get('/input', [InputController::class, 'showForm']);
Route::post('/input', [InputController::class, 'processForm']);

use App\Http\Controllers\FormulirController;

Route::get('/masukan', [FormulirController::class, 'showForm']);
Route::post('/masukan', [FormulirController::class, 'handleForm']);



// use App\Http\Controllers\StudentController;

// Route::get('/student/register', [StudentController::class, 'showRegistrationForm']);
// Route::post('/student/register', [StudentController::class, 'register']);


use App\Http\Controllers\DeterminingController;

Route::get('/check-input', [DeterminingController::class, 'showForm']);
Route::post('/check-input', [DeterminingController::class, 'checkInput']);

use App\Http\Controllers\DataController;

Route::get('/retrieve-input', [DataController::class, 'showForm']);
Route::post('/retrieve-input', [DataController::class, 'retrieveInput']);

use App\Http\Controllers\PartialDataController;

Route::get('/retrieve-partial-input', [PartialDataController::class, 'showForm']);
Route::post('/retrieve-partial-input', [PartialDataController::class, 'retrievePartialInput']);

use App\Http\Controllers\FileController;

Route::get('/upload-file', [FileController::class, 'showForm']);
Route::post('/upload-file', [FileController::class, 'uploadFile']);

use App\Http\Controllers\UploadController;

Route::get('/upload', [UploadController::class, 'showForm']);
Route::post('/upload', [UploadController::class, 'handleUpload']);

use App\Http\Controllers\FileUploadController;

Route::get('/upload-files', [FileUploadController::class, 'showForm']);
Route::post('/upload-files', [FileUploadController::class, 'uploadFile']);

use App\Http\Controllers\JsonController;

Route::get('/json-response', [JsonController::class, 'getJsonResponse']);
Route::post('/json-response', [JsonController::class, 'postJsonResponse']);

use App\Http\Controllers\FileDownloadController;

Route::get('download', [FileDownloadController::class, 'download'])->name('file.download');

use App\Http\Controllers\FilesController;

Route::get('/download-file', [FilesController::class, 'downloadFile']);
Route::get('/view-file', [FilesController::class, 'viewFile']);

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile/{id}/{name}/{address}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/redirect-example', [HomeController::class, 'redirectExample'])->name('redirect.example');

use App\Http\Controllers\PageController;

Route::get('/page', [PageController::class, 'showForm']);
Route::post('/submit-form', [PageController::class, 'submitForm']);
Route::get('/success', [PageController::class, 'success']);


// Route::get('/form', function () {
//     return view('form');
// });Route::post('/submit-form', [SubmissionController::class, 'submitForm'])->name('form.submit');

// Flashed Session Data
Route::get('/halaman-awal', function() {
    return redirect('/halaman-tujuan')->with('pesan', 'Ini adalah pesan dari halaman awal');
});

Route::get('/flasedview', function() {
        $pesan = session('pesan');
        return view('submissions',['pesan' => $pesan]);
});


use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);


use App\Http\Controllers\SharingController;

Route::get('/sharing', [SharingController::class, 'index']);
Route::get('/about', [SharingController::class, 'about']);

Route::get('/awal', function () {
    return view('awal');
});

Route::get('/tentang', function () {
    return view('tentang');
});

use App\Http\Controllers\DisplayController;

Route::get('/display-data', [DisplayController::class, 'tampilkanData']);

use App\Http\Controllers\EchoController;

Route::get('/echo-input', [EchoController::class, 'showForm']);
Route::post('/echo-input', [EchoController::class, 'echoInput']);

use App\Http\Controllers\IfStatementController;

Route::get('/if-statement', [IfStatementController::class, 'showForm']);
Route::post('/if-statement', [IfStatementController::class, 'processForm']);

use App\Http\Controllers\LoopController;

Route::get('/loops', [LoopController::class, 'showLoops']);

Route::get('/sub-view', function () {
    return view('sub-view');
});

use App\Http\Controllers\UnescapedController;

Route::get('/display-unescaped', [UnescapedController::class, 'showForm']);
Route::post('/display-unescaped', [UnescapedController::class, 'displayUnescapedData']);

use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);

use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

use App\Http\Controllers\PasswordController;

Route::get('/hash', [PasswordController::class, 'hash']);

use App\Http\Controllers\VerifyController;

Route::get('/verify-password', [VerifyController::class, 'showForm']);
Route::post('/verify-password', [VerifyController::class, 'verifyPassword']);

// Route untuk generate hash
Route::get('/generate-hash', function() {
    return view('generate-hash');
});
Route::post('/generate-hash', [VerifyController::class, 'generateHash']);

use App\Http\Controllers\UserController;

Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/url-helpers', [UserController::class, 'urlHelpers']);

use App\Http\Controllers\ArticleController;

Route::get('/articles', [ArticleController::class, 'index']);

use App\Http\Controllers\RandomStringController;

Route::get('/random-string', [RandomStringController::class, 'showForm'])->name('show.random.string.form');
Route::post('/random-string', [RandomStringController::class, 'generateRandomString'])->name('generate.random.string');

use App\Http\Controllers\StringController;

Route::get('/contains', [StringController::class, 'index'])->name('string.index');
Route::post('/check', [StringController::class, 'check'])->name('string.check');

use App\Http\Controllers\EventController;

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');

use App\Http\Controllers\CsrfController;

Route::get('/csrf', [CsrfController::class, 'showForm'])->name('show.form');
Route::post('/csrf', [CsrfController::class, 'submitForm'])->name('submit.form');

use App\Http\Controllers\TokenController;

Route::get('/token', [TokenController::class, 'showForm']);
Route::post('/submit', [TokenController::class, 'submitForm']);

use App\Http\Controllers\SendingMailController;
Route::get('/sendingmail',[SendingMailController::class, 'index']);

use App\Http\Controllers\ArtikelController;

Route::get('/artikel', [ArtikelController::class, 'index']);

use App\Http\Controllers\BeritaController;

Route::resource('berita', BeritaController::class);

use App\Http\Controllers\CustomerController;

Route::get('/customers', [CustomerController::class, 'index']);

use App\Http\Controllers\AcaraController;

Route::get('/acaras', [AcaraController::class, 'index']);

use App\Http\Controllers\RecipeController;

Route::get('/recipes', [RecipeController::class, 'index']);

use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index']);


// use App\Http\Controllers\SessionManagerController;

// Route::get('/session', [SessionManagerController::class, 'showData'])->name('show.data');
// Route::post('/session/store', [SessionManagerController::class, 'storeData'])->name('store.data');
// Route::post('/session/delete', [SessionManagerController::class, 'deleteData'])->name('delete.data');

use App\Http\Controllers\ListController;

Route::get('/list', [ListController::class, 'index'])->name('list.index');
Route::post('/list', [ListController::class, 'store'])->name('list.store');

// use App\Http\Controllers\OrderController;

// Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
// Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

use App\Http\Controllers\CartController;

// Route untuk menampilkan item dari sesi
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Route untuk menambahkan item ke sesi
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');

// Route untuk menghapus item dari sesi
Route::delete('/cart', [CartController::class, 'destroy'])->name('cart.destroy');

use App\Http\Controllers\LanguageCourseRegistrationController;

Route::get('/course/register', [LanguageCourseRegistrationController::class, 'showForm']);
Route::post('/course/register', [LanguageCourseRegistrationController::class, 'submitForm']);

use App\Http\Controllers\RegistrationController;

Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);

use App\Http\Controllers\CategoryController;

Route::get('/categories', [CategoryController::class, 'index']);


use App\Http\Controllers\TaskController;

Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');

use App\Http\Controllers\ContactController;

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

use App\Http\Controllers\OrderController;

Route::get('/orders', [OrderController::class, 'index']);

use App\Http\Controllers\StudentController;

Route::resource('/students', StudentController::class);

use App\Http\Controllers\InvoiceController;

Route::get('/invoices', [InvoiceController::class, 'index']);

//inner join
use App\Http\Controllers\SaleController;

Route::get('/sales', [SaleController::class, 'index']);

//left join
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);

//advance
use App\Http\Controllers\DoctorPatientController;

Route::get('/doctor-patients', [DoctorPatientController::class, 'index']);

//simple clause
use App\Http\Controllers\TeacherController;

Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');

//addtional where clause
use App\Http\Controllers\FilmController;

Route::get('/films', [FilmController::class, 'index'])->name('films.index');

//or statement
use App\Http\Controllers\MovieController;

Route::get('/movies', [MovieController::class, 'index']);

//whereNotBetween
use App\Http\Controllers\RentalController;

Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index');

//whereIn
use App\Http\Controllers\ReservationController;

Route::get('/reservations', [ReservationController::class, 'index']);

//wherenotin
use App\Http\Controllers\ItemController;

Route::get('/items', [ItemController::class, 'index']);

//whereNull
use App\Http\Controllers\ProjectController;

Route::get('/projects', [ProjectController::class, 'index']);

//whereNotNull
use App\Http\Controllers\AssignmentController;

Route::get('/assignments', [AssignmentController::class, 'index']);

//Advanced Where Clauses
use App\Http\Controllers\ServiceController;

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

//orderby
use App\Http\Controllers\MusicController;

Route::get('/music', [MusicController::class, 'index'])->name('music.index');

//groupBy
use App\Http\Controllers\TransaksiController;

Route::get('/transaksi', [TransaksiController::class, 'index']);

//having
use App\Http\Controllers\PaymentController;

Route::get('/payments', [PaymentController::class, 'index']);

//havingRaw
use App\Http\Controllers\PurchasesController;

Route::get('/purchases', [PurchasesController::class, 'index']);

//skip
use App\Http\Controllers\SeriesController;

Route::get('/series', [SeriesController::class, 'index'])->name('series.index');

//take
use App\Http\Controllers\ElectronicsController;

Route::get('/electronics', [ElectronicsController::class, 'index']);

//insert
use App\Http\Controllers\GadgetController;

Route::get('/gadgets/create', [GadgetController::class, 'create'])->name('gadgets.create');
Route::post('/gadgets', [GadgetController::class, 'store'])->name('gadgets.store');

//update
use App\Http\Controllers\StoreController;

Route::get('/stores', [StoreController::class, 'index'])->name('stores.index');
Route::put('/stores/{id}', [StoreController::class, 'update'])->name('stores.update');

use App\Http\Controllers\AlbumController;

Route::get('albums', [AlbumController::class, 'index'])->name('albums.index'); // Menampilkan daftar album
Route::get('albums/create', [AlbumController::class, 'create'])->name('albums.create'); // Menampilkan form untuk menambah album
Route::post('albums', [AlbumController::class, 'store'])->name('albums.store'); // Menyimpan album baru

Route::get('albums/{album}/edit', [AlbumController::class, 'edit'])->name('albums.edit'); // Menampilkan form untuk mengedit album
Route::post('albums/{album}', [AlbumController::class, 'update'])->name('albums.update'); // Memperbarui data album

Route::post('albums/{album}/delete', [AlbumController::class, 'destroy'])->name('albums.destroy'); // Menghapus album


use App\Http\Controllers\SessionItemController;

Route::get('/set-session', [SessionItemController::class, 'setSession'])->name('set.session');
Route::get('/check-session', [SessionItemController::class, 'checkSession'])->name('check.session');

use App\Http\Controllers\Session3Controller;

Route::get('/form-session', [Session3Controller::class, 'showForm'])->name('form.show');
Route::post('/form-session', [Session3Controller::class, 'storeForm'])->name('form.store');


