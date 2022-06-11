<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/index');
});

Route::get('/index', function () {
    return view('home.index');
});

Route::get('/index-user', function () {
    return view('home.index-user');
});

Route::get('/add-component', function () {
    return view('pages.add-component');
});

Route::get('/add-data-risiko', function () {
    return view('pages.add-data-risiko');
});

Route::get('/risiko-unit', function () {
    return view('pages.resiko-unit');
});

// Custom Auth Routes Views
Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});


// Risk Routes
Route::get("/risk", [RiskController::class, 'all']);
Route::get("/export-risk", [RiskController::class, 'export']);
Route::get("/risk/{riskId}", [RiskController::class, 'getOne']);
Route::post("/risk", [RiskController::class, 'create']);
Route::put("/risk", [RiskController::class, 'update']);
Route::delete("/risk/{riskId}", [RiskController::class, 'remove']);

// Unit & Risk Category Routes
Route::get("/unit", [UnitController::class, 'getUnit']);
Route::get("/adminUnit", [UnitController::class, 'getAdminUnit']);

Route::post("/unit", [UnitController::class, 'createUnit']);
Route::delete("/unit/{deletedId}", [UnitController::class, 'deleteUnit']);
Route::post("/riskCategory", [UnitController::class, 'createRiskCategory']);
Route::delete("/riskCategory/{deletedId}", [UnitController::class, 'deleteRiskCategory']);
Route::post("/sourceOfRisk", [UnitController::class, 'createSourceOfRisk']);
Route::delete("/sourceOfRisk/{deletedId}", [UnitController::class, 'deleteSourceOfRisk']);
Route::post("/standarAcademic", [UnitController::class, 'createStandarAcademic']);
Route::delete("/standarAcademic/{deletedId}", [UnitController::class, 'deleteStandarAcademic']);

// User Routes
Route::post("/login", [UserController::class, 'login']);
Route::post("/register", [UserController::class, 'register']);