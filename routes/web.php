<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\FooterController;



Route::get('/',[HomeController::class,'index'])->name('home.home');


Route::get('/about',[AboutController::class,'index'])->name('about.about');







Route::get('/education',[EducationController::class,'index'])->name('education.education');





Route::get('/service',[ServiceController::class,'index'])->name('service.service');



Route::get('/portfolio',[PortfolioController::class,'index'])->name('portfolio.portfolio');




Route::get('/contact-add',[ContactController::class,'index'])->name('contact.add');
Route::post('/contact-stored',[ContactController::class,'storedContactMethod'])->name('contact.stored');









Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {



    Route::get('/dashboard',[DashBoardController::class,'index'])->name('dashboard');
    Route::get('/home-add',[DashBoardController::class,'add'])->name('home.add');
    Route::post('/home-stored',[DashBoardController::class,'stored'])->name('home.stored');
    Route::get('/home-manage',[DashBoardController::class,'manage'])->name('home.manage');
    Route::get('/home-edit{id}',[DashBoardController::class,'edit'])->name('home.edit');
    Route::post('/home-update{id}',[DashBoardController::class,'update'])->name('home.update');
    Route::get('/home-delete{id}',[DashBoardController::class,'delete'])->name('home.delete');



    Route::get('/about-add',[DashBoardController::class,'addAboutMethod'])->name('about.add');
    Route::post('/about-stored',[DashBoardController::class,'storedAboutMethod'])->name('about.stored');
    Route::get('/about-manage',[DashBoardController::class,'manageAboutMethod'])->name('about.manage');
    Route::get('/about-edit{id}',[DashBoardController::class,'editAboutMethod'])->name('about.edit');
    Route::post('/about-update{id}',[DashBoardController::class,'updateAboutMethod'])->name('about.update');
    Route::get('/about-delete{id}',[DashBoardController::class,'deleteAboutMethod'])->name('about.delete');




    Route::get('/footer-add',[DashBoardController::class,'addFooterMethod'])->name('footer.add');
    Route::post('/footer-stored',[DashBoardController::class,'storedFooterMethod'])->name('footer.stored');
    Route::get('/footer-manage',[DashBoardController::class,'manageFooterMethod'])->name('footer.manage');
    Route::get('/footer-edit{id}',[DashBoardController::class,'editFooterMethod'])->name('footer.edit');
    Route::post('/footer-update{id}',[DashBoardController::class,'updateFooterMethod'])->name('footer.update');
    Route::get('/footer-delete{id}',[DashBoardController::class,'deleteFooterMethod'])->name('footer.delete');


    Route::get('/contact-manage',[DashBoardController::class,'manageContactMethod'])->name('contact.manage');
    Route::get('/contact-edit{id}',[DashBoardController::class,'editContactMethod'])->name('contact.edit');
    Route::post('/contact-update{id}',[DashBoardController::class,'updateContactMethod'])->name('contact.update');
    Route::get('/contact-delete{id}',[DashBoardController::class,'deleteContactMethod'])->name('contact.delete');



    Route::get('/education-add',[DashBoardController::class,'addEducationMethod'])->name('education.add');
    Route::post('/education-stored',[DashBoardController::class,'storedEducationMethod'])->name('education.stored');
    Route::get('/education-manage',[DashBoardController::class,'manageEducationMethod'])->name('education.manage');
    Route::get('/education-edit{id}',[DashBoardController::class,'editEducationMethod'])->name('education.edit');
    Route::post('/education-update{id}',[DashBoardController::class,'updateEducationMethod'])->name('education.update');
    Route::get('/education-delete{id}',[DashBoardController::class,'deleteEducationMethod'])->name('education.delete');


    Route::get('/service-add',[DashBoardController::class,'addserviceMethod'])->name('service.add');
    Route::post('/service-stored',[DashBoardController::class,'storedserviceMethod'])->name('service.stored');
    Route::get('/service-manage',[DashBoardController::class,'manageserviceMethod'])->name('service.manage');
    Route::get('/service-edit{id}',[DashBoardController::class,'editserviceMethod'])->name('service.edit');
    Route::post('/service-update{id}',[DashBoardController::class,'updateserviceMethod'])->name('service.update');
    Route::get('/service-delete{id}',[DashBoardController::class,'deleteserviceMethod'])->name('service.delete');


    Route::get('/portfolio-add',[DashBoardController::class,'addPortfolioMethod'])->name('portfolio.add');
    Route::post('/portfolio-stored',[DashBoardController::class,'storedPortfolioMethod'])->name('portfolio.stored');
    Route::get('/portfolio-manage',[DashBoardController::class,'managePortfolioMethod'])->name('portfolio.manage');
    Route::get('/portfolio-edit{id}',[DashBoardController::class,'editPortfolioMethod'])->name('portfolio.edit');
    Route::post('/portfolio-update{id}',[DashBoardController::class,'updatePortfolioMethod'])->name('portfolio.update');
    Route::get('/portfolio-delete{id}',[DashBoardController::class,'deletePortfolioMethod'])->name('portfolio.delete');





















});
