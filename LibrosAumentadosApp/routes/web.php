<?php

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
    return view('welcome');
});

#Rutas Libros
Route::get("/libro/destroy/{id}", "LibrosController@destroy")->name("libro.delete");
Route::get("/libro/loginVisitante/{id}", "LibrosController@loginVisitante")->name("libro.loginVisitante");
Route::get("/libro/comprobarPalabra", "LibrosController@comprobarPalabra")->name("libro.comprobarPalabra");
Route::resource('/libro', 'LibrosController');
Route::get("/libro/loginVisitante/{id}", "LibrosController@loginVisitante")->name("libro.login");
//Libros confirmacion de borrado 
Route::get("/libro/deleteConfirm/{id}", "LibrosController@deleteConfirm")->name("libro.deleteConfirm");



#Rutas Capitulos
Route::get("/capitulo/index/{id}", "CapitulosController@index")->name("capitulo.all");    
Route::get("/capitulo/destroy/{id}", "CapitulosController@destroy")->name("capitulo.delete");
Route::get("/capitulo/contenido/{id}", "CapitulosController@contenido")->name("capitulo.contenido");
Route::resource('/capitulo', 'CapitulosController');
//Capitulos confirmacion de borrado 
Route::get("/capitulo/deleteConfirm/{id}", "CapitulosController@deleteConfirm")->name("capitulo.deleteConfirm");



#Rutas Páginas
Route::get("/pagina/index/{id}", "PaginasController@index")->name("pagina.all");     
Route::get("/pagina/destroy/{id}", "PaginasController@destroy")->name("pagina.delete");
Route::resource('/pagina', 'PaginasController');



//Rutas Imagenes
Route::get("/imagen/index/{id}", "ImagensController@index")->name("imagen.all");   
Route::get("/imagen/destroy/{id}", "ImagensController@destroy")->name("imagen.delete");
Route::resource('/imagen', 'ImagensController');
    //AJAX
    Route::post("/imagen/buscador", "ImagensController@buscador")->name("imagen.buscador");
//Imagenes confirmacion de borrado 
Route::get("/imagen/deleteConfirm/{id}", "ImagensController@deleteConfirm")->name("imagen.deleteConfirm");



//Rutas Galerias
Route::get("/galeria/index/{id}", "GaleriasController@index")->name("galeria.all");   
Route::get("/galeria/destroy/{id}", "GaleriasController@destroy")->name("galeria.delete");
Route::resource('/galeria', 'GaleriasController');
    //Buscador de imagenes AJAX
    Route::post("/galeria/imagenBuscador", "GaleriasController@imagenBuscador")->name("galeria.buscador");

//Rutas Modelos_3d
Route::get("/modelo/index/{id}", "Modelo_3dController@index")->name("modelo.all");   
Route::get("/modelo/destroy/{id}", "Modelo_3dController@destroy")->name("modelo.delete");
Route::resource('/modelo', 'Modelo_3dController');



//Rutas Videos
Route::get("/video/index/{id}", "VideosController@index")->name("video.all");  
Route::get("/video/destroy/{id}", "VideosController@destroy")->name("video.delete");
Route::resource('/video', 'VideosController');



//Rutas Audios
Route::get("/audio/index/{id}", "AudiosController@index")->name("audio.all");   
Route::get("/audio/destroy/{id}", "AudiosController@destroy")->name("audio.delete");
Route::resource('/audio', 'AudiosController');


//Rutas Descargas (Otros Archivos)
Route::get("/descarga/index/{id}", "DescargasController@index")->name("descarga.all");    
Route::get("/descarga/destroy/{id}", "DescargasController@destroy")->name("descarga.delete");
Route::resource('/descarga', 'DescargasController');

//Rutas para usuarios
Route::get('admin/users/destroy/{id}', 'AdminUserController@destroy')->name('user.delete');
Route::resource('admin/users', 'AdminUserController');








//Frontend
//Rutas de Contenido 
Route::get("/contenido/index/{libro_id}", "PruebaController@index")->name("contenido.contenido");
    #Rutas Ajax
    Route::post("/contenido/libros", "PruebaController@libros")->name("contenido.libros");
    Route::get("/contenido/login/{libro_id}", "PruebaController@login")->name("contenido.login");
    Route::post("/contenido/loginConfirma", "PruebaController@loginConfirma")->name("contenido.loginConfirma");
    Route::get("/contenido/capitulos/{libro_id}", "PruebaController@capitulos")->name("contenido.capitulos");
    Route::post("/contenido/multimedia", "PruebaController@multimedia")->name("contenido.multimedia");
    Route::get("/contenido/galeria/{galeria_id}", "PruebaController@galeria")->name("contenido.galeria");
    Route::get("/contenido/video/{video_id}", "PruebaController@video")->name("contenido.video");
    Route::get("/contenido/descarga/{descarga_id}", "PruebaController@descarga")->name("contenido.descarga");
    Route::get("/contenido/modelo/{modelo_id}", "PruebaController@modelo")->name("contenido.modelo");




//Backend
//Menu
Route::get('admin/users', 'AdminUserController@index')->name('user.index');
Route::get("/admin/index", "LibrosController@adminIndex")->name("libro.adminIndex");
Route::get("/admin/libros", "LibrosController@admin")->name("libro.admin");
Route::get("/admin/capitulos", "CapitulosController@admin")->name("capitulo.admin");  
Route::get("/admin/paginas", "PaginasController@admin")->name("pagina.admin");  
Route::get("/admin/imagenes", "ImagensController@admin")->name("imagen.admin");
Route::get("/admin/galerias", "GaleriasController@admin")->name("galeria.admin");
Route::get("/admin/modelos", "Modelo_3dController@admin")->name("modelo.admin");
Route::get("/admin/videos", "VideosController@admin")->name("video.admin");
Route::get("/admin/audios", "AudiosController@admin")->name("audio.admin");
Route::get("/admin/descargas", "DescargasController@admin")->name("descarga.admin");
//Rutas para modificar directamente las tablas
        //Libros
        Route::get("/admin/libros/showAdmin", "LibrosController@showAdmin")->name("libro.showAdmin");
        Route::get("/admin/libros/createAdmin", "LibrosController@createAdmin")->name("libro.createAdmin");
        Route::get("/admin/libros/{libro}/editAdmin", "LibrosController@editAdmin")->name("libro.editAdmin");
        //Capitulos
        Route::get("/admin/capitulos/showAdmin", "CapitulosController@showAdmin")->name("capitulo.showAdmin");
        Route::get("/admin/capitulos/createAdmin", "CapitulosController@createAdmin")->name("capitulo.createAdmin");
        Route::get("/admin/capitulos/{capitulo}/editAdmin", "CapitulosController@editAdmin")->name("capitulo.editAdmin");
        //Paginas
        Route::get("/admin/paginas/showAdmin", "PaginasController@showAdmin")->name("pagina.showAdmin");
        Route::get("/admin/paginas/createAdmin", "PaginasController@createAdmin")->name("pagina.createAdmin");
        Route::get("/admin/paginas/{pagina}/editAdmin", "PaginasController@editAdmin")->name("pagina.editAdmin");
        //Imagenes
        Route::get("/admin/imagenes/showAdmin", "ImagensController@showAdmin")->name("imagen.showAdmin");
        Route::get("/admin/imagenes/createAdmin", "ImagensController@createAdmin")->name("imagen.createAdmin");
        Route::get("/admin/imagenes/{imagen}/editAdmin", "ImagensController@editAdmin")->name("imagen.editAdmin");
        //Galerias
        Route::get("/admin/galerias/showAdmin", "GaleriasController@showAdmin")->name("galeria.showAdmin");
        Route::get("/admin/galerias/createAdmin", "GaleriasController@createAdmin")->name("galeria.createAdmin");
        Route::get("/admin/galerias/{galeria}/editAdmin", "GaleriasController@editAdmin")->name("galeria.editAdmin");
        //Audios
        Route::get("/admin/audios/showAdmin", "AudiosController@showAdmin")->name("audio.showAdmin");
        Route::get("/admin/audios/createAdmin", "AudiosController@createAdmin")->name("audio.createAdmin");
        Route::get("/admin/audios/{audio}/editAdmin", "AudiosController@editAdmin")->name("audio.editAdmin");
        //Videos
        Route::get("/admin/videos/showAdmin", "VideosController@showAdmin")->name("video.showAdmin");
        Route::get("/admin/videos/createAdmin", "VideosController@createAdmin")->name("video.createAdmin");
        Route::get("/admin/videos/{video}/editAdmin", "VideosController@editAdmin")->name("video.editAdmin");
        //Descargas
        Route::get("/admin/descargas/showAdmin", "DescargasController@showAdmin")->name("descarga.showAdmin");
        Route::get("/admin/descargas/createAdmin", "DescargasController@createAdmin")->name("descarga.createAdmin");
        Route::get("/admin/descargas/{descarga}/editAdmin", "DescargasController@editAdmin")->name("descarga.editAdmin");
        //Modelos3d
        Route::get("/admin/modelos/showAdmin", "Modelo_3dController@showAdmin")->name("modelo.showAdmin");
        Route::get("/admin/modelos/createAdmin", "Modelo_3dController@createAdmin")->name("modelo.createAdmin");
        Route::get("/admin/modelos/{modelo}/editAdmin", "Modelo_3dController@editAdmin")->name("modelo.editAdmin");





//Login y Logout
Auth::routes();
Route::get('/home', 'LibrosController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::get('/aboutUs', function () {
    return view('acercade');
});



//Rutas para la instalación
Route::get('install', 'InstallController@index')->name('install.index');
Route::get('install/migration', 'InstallController@migration')->name('install.migration');
Route::post('install/storeUser', 'InstallController@storeUser')->name('install.storeUser');
Route::post('install/createFile', 'InstallController@createFile')->name('install.createFile');
Route::get('install/createUser', 'InstallController@createUser')->name('install.createUser');
Route::get('install/erase', 'InstallController@erase')->name('install.erase');