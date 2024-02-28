<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\CompanyCircularController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleManagementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/add-role', [RoleManagementController::class, 'addRole'])->name('add.role');
    Route::post('/new-role', [RoleManagementController::class, 'saveRole'])->name('new.role');
    Route::get('/role-status/{id}',[RoleManagementController::class, 'roleStatus'])->name('role.status');
    Route::get('/manage-role', [RoleManagementController::class, 'manageRole'])->name('manage.role');
    Route::get('/edit-role/{id}', [RoleManagementController::class, 'editRole'])->name('edit.role');
    Route::post('/update-role', [RoleManagementController::class, 'updateRole'])->name('update.role');
    Route::post('/delete-role', [RoleManagementController::class, 'deleteRole'])->name('delete.role');

    Route::get('/add-company', [CompaniesController::class, 'addCompanies'])->name('add.company');
    Route::post('/new-company', [CompaniesController::class, 'saveCompanies'])->name('new.company');
    Route::get('/company-status/{id}',[CompaniesController::class, 'companiesStatus'])->name('company.status');
    Route::get('/manage-company', [CompaniesController::class, 'manageCompanies'])->name('manage.company');
    Route::get('/edit-company/{id}', [CompaniesController::class, 'editCompanies'])->name('edit.company');
    Route::post('/update-company', [CompaniesController::class, 'updateCompanies'])->name('update.company');
    Route::post('/delete-company', [CompaniesController::class, 'deleteCompanies'])->name('delete.company');

    Route::get('/add-company-circular', [CompanyCircularController::class, 'addCompanyCircular'])->name('add.company.circular');
    Route::post('/new-company-circular', [CompanyCircularController::class, 'saveCompanyCircular'])->name('new.company.circular');
    Route::get('/company-circular-status/{id}',[CompanyCircularController::class, 'companyCircularStatus'])->name('company.circular.status');
    Route::get('/manage-company-circular', [CompanyCircularController::class, 'manageCompanyCircular'])->name('manage.company.circular');
    Route::get('/edit-company-circular/{id}', [CompanyCircularController::class, 'editCompanyCircular'])->name('edit.company.circular');
    Route::post('/update-company-circular', [CompanyCircularController::class, 'updateCompanyCircular'])->name('update.company.circular');
    Route::post('/delete-company-circular', [CompanyCircularController::class, 'deleteCompanyCircular'])->name('delete.company.circular');

    Route::get('/add-personal-info', [CandidatesController::class, 'addPersonalInfo'])->name('add.personal.info');
    Route::post('/new-personal-info', [CandidatesController::class, 'savePersonalInfo'])->name('new.personal.info');
    Route::get('/personal-info-status/{id}',[CandidatesController::class, 'personalInfoStatus'])->name('personal.info.status');
    Route::get('/manage-personal-info', [CandidatesController::class, 'managePersonalInfo'])->name('manage.personal.info');
    Route::get('/edit-personal-info/{id}', [CandidatesController::class, 'editPersonalInfo'])->name('edit.personal.info');
    Route::post('/update-personal-info', [CandidatesController::class, 'updatePersonalInfo'])->name('update.personal.info');
    Route::post('/delete-personal-info', [CandidatesController::class, 'deletePersonalInfo'])->name('delete.personal.info'); 
    
      
    Route::get('/add-candidate-education', [CandidatesController::class, 'addCandidateEducation'])->name('add.candidate.education');
    Route::post('/new-candidate-education', [CandidatesController::class, 'saveCandidateEducation'])->name('new.candidate.education');
    Route::get('/candidate-education-status/{id}', [CandidatesController::class, 'educationStatus'])->name('candidate.education.status');
    Route::get('/manage-candidate-education', [CandidatesController::class, 'manageCandidateEducation'])->name('manage.candidate.education');
    Route::get('/edit-candidate-education', [CandidatesController::class, 'editCandidateEducation'])->name('edit.candidate.education');
    Route::post('/update-candidate-education', [CandidatesController::class, 'updateCandidateEducation'])->name('update.candidate.education');
    Route::post('/delete-candidate-education', [CandidatesController::class, 'deleteCandidateEducation'])->name('delete.candidate.education');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
