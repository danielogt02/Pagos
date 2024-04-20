<?php

    use App\Http\Controllers\CursoController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\homeController;

    Route::get('/', HomeController::class);
    Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
    route::get('cursos/create',[CursoController::class, 'create'])->name('cursos.create');
    Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

    /*Route::controller(CursoController::class)->group(function(){
        Route::get('cursos', 'index');
        route::get('cursos/create','create');
        Route::get('cursos/{curso}','show');
    });*/
    /*Route::get('cursos/{curso}/{categoria?}',function($curso,$categoria=null){
        if($categoria){
            return "Bienvenido al curso $curso de la categoria de $categoria";
        }else{
            return "Bienvenido al curso $curso";
        }
    });*/
