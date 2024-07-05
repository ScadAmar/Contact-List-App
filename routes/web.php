<?php
use App\Livewire\CreateContactinfo;
use App\Livewire\Contacts;
use Illuminate\Support\Facades\Route;
use App\Livewire\ViewContact;
use App\Livewire\EditContact;
use App\Livewire\Register;
use App\Livewire\Login;
Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('/contactinfo/create',CreateContactinfo::class);
    Route::get('/Contacts',Contacts::class);
    Route::get('/Contacts/{contact}',ViewContact::class);
    Route::get('/Contacts/{contact}/edit',EditContact::class);
    
});

Route::get('/register',Register::class);
Route::get('/login',Login::class)->name('login');