<?php

use App\Livewire\Front\Home;
use App\Livewire\Front\ReceitaDetalhe;
use App\Livewire\Front\Sobre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

    Route::get('/', Home::class);
    Route::get('/sobre', Sobre::class)->name('sobre');
    Route::get('/receita/detalhe/{id}', ReceitaDetalhe::class)->name('detalhe');
    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/');
    })->middleware('auth')->name('logout');
?>
