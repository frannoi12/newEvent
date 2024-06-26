<?php

use App\Exports\EntreprisesExport;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
use App\Exports\UsersExport;
use App\Models\Entreprise;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf as PDF;


// Route::get("/users",[UserController::class, 'users']);



Route::get("/",[HomeController::class, 'show_welcome'])->name("welcome");
Route::get("/about",[HomeController::class, 'show_about'])->name("about");
Route::get("/contact",[HomeController::class, 'show_contact'])->name("contact");


Route::prefix('entreprises')->group(function () {
    Route::get('/', [EntrepriseController::class, 'index'])->name('entreprises.index');
    Route::get('/create', [EntrepriseController::class, 'create'])->name('entreprises.create');
    Route::post('/save', [EntrepriseController::class, 'store'])->name('entreprises.store');
    Route::delete('/delete/{entreprise}', [EntrepriseController::class, 'destroy'])->name('entreprises.delete');
    Route::get('/edit/{entreprise}', [EntrepriseController::class, 'edit'])->name('entreprises.edit');
    Route::get('/show/{entreprise}', [EntrepriseController::class, 'show'])->name('entreprises.show');
    Route::patch('/update/{entreprise}', [EntrepriseController::class, 'update'])->name('entreprises.update');
});

// Export des Entreprises en pdf où excel

Route::get('entreprises/export', function(){
    return Excel::download(new EntreprisesExport, 'entreprises.xls');
})->name('entreprises.collection');


Route::get('entreprises/pdf', function () {
    $entreprises = Entreprise::all();
    $pdf = PDF::loadView('entreprises.entreprises_pdf', compact('entreprises'));
    return $pdf->download('entreprises.pdf');
})->name('entreprises.pdfexport');



Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/save', [UserController::class, 'store'])->name('users.store');
    Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('users.delete');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/show/{user}', [UserController::class, 'show'])->name('users.show');
    Route::patch('/update/{user}', [UserController::class, 'update'])->name('users.update');
    Route::get('/export-pdf', [UserController::class, 'exportPdf'])->name('users.exportPdf');
    Route::get('/export-excel', [UserController::class, 'exportExcel'])->name('users.exportExcel');
});

