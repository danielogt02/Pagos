<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;


Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index']);

route::get('cursos/create',[CursoController::class, 'create']);

Route::get('cursos/{curso}', [CursoController::class, 'show']);

/*Route::get('cursos/{curso}/{categoria?}',function($curso,$categoria=null){
    if($categoria){
        return "Bienvenido al curso $curso de la categoria de $categoria";
    }else{
        return "Bienvenido al curso $curso";
    }
});*/
