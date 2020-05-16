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

 Route::get('/',[
        'as' => 'index',
        'uses' => 'HomeController@index'
    ]);
 Route::get('/about',[
        'as' => 'about',
        'uses' => 'HomeController@about'
    ]);


 Route::get('/contact',[
        'as' => 'contact',
        'uses' => 'ContactController@contact'
    ]);

Route::post('/NewContact', [
        'as' => 'NewContact',
        'uses' => 'ContactController@ClientContact'
    ]);

Route::post('/NewRdv', [
        'as' => 'NewRdv',
        'uses' => 'RendezvousController@Consultation'
    ]);

Route::post('/Newletter', [
        'as' => 'Newletter',
        'uses' => 'NewsController@NewEmail'
    ]);

 Route::get('/service',[
        'as' => 'service',
        'uses' => 'ServiceController@service'
    ]);

 Route::get('/PrendreRendezVous',[
        'as' => 'rdv',
        'uses' => 'RendezvousController@rdv'
    ]);
 Route::get('/service/OneService/{id}',[
        'as' => 'OneService',
        'uses' => 'ServiceController@OneService'
    ])->where('id','[0-9]+');
 Route::get('/service/OneService/SingleService/{id}',[
        'as' => 'SingleService',
        'uses' => 'ServiceController@SingleService'
    ])->where('id','[0-9]+');






// ROUTE ADMIN
 Route::group(['prefix'=> 'admin'],function(){

        Route::get('/login',[
            'as' => 'adminLogin',
            'uses' => 'AdminController@login'
        ]);

        Route::get('/Accueil',[
            'as' => 'admin',
            'uses' => 'ArticleController@admin'
        ]);

         Route::get('/NosFormations',[
            'as' => 'NosForamtions',
            'uses' => 'ArticleController@formation'
        ]);

         Route::get('/AddFormation',[
            'as' => 'AddFormation',
            'uses' => 'ArticleController@AddFormation'
        ]);

          Route::post('/createArticle', [
            'as'=>'createArticle',
            'uses'=>'ArticleController@createArticle'
            ]);

           Route::get('/EditArticle/{id}',[
              'as' => 'EditArticle',
              'uses' => 'ArticleController@EditArticle'
         ])->where('id','[0-9]+');

           Route::get('/ArticleUpdate/{id}',[
              'as' => 'ArticleUpdate',
              'uses' => 'ArticleController@ArticleUpdate'
         ])->where('id','[0-9]+');

           Route::get('/ShowArticle/{id}',[
              'as' => 'ShowArticle',
              'uses' => 'ArticleController@ShowArticle'
         ])->where('id','[0-9]+');

            Route::get('/deleteArticle/{id}',[
              'as' => 'deleteArticle',
              'uses' => 'ArticleController@deleteArticle'
         ])->where('id','[0-9]+');

          Route::get('/ListRendezVous',[
            'as' => 'listRendezVous',
            'uses' => 'RendezvousController@RendezVous'
        ]);

           Route::get('/deleteRdv/{id}',[
              'as' => 'deleteRdv',
              'uses' => 'RendezvousController@deleteRdv'
         ])->where('id','[0-9]+');


           Route::get('/NosServices',[
            'as' => 'NosServices',
            'uses' => 'ServiceController@NosServices'
        ]);
           Route::get('/AddService',[
            'as' => 'AddService',
            'uses' => 'ServiceController@AddService'
        ]);
            Route::get('/ShowService/{id}',[
              'as' => 'ShowService',
              'uses' => 'ServiceController@ShowService'
         ])->where('id','[0-9]+');

            Route::get('/EditService/{id}',[
              'as' => 'EditService',
              'uses' => 'ServiceController@EditService'
         ])->where('id','[0-9]+');
            
             Route::get('/ServiceUpdate/{id}',[
              'as' => 'ServiceUpdate',
              'uses' => 'ServiceController@ServiceUpdate'
         ])->where('id','[0-9]+');

             Route::get('/deleteService/{id}',[
              'as' => 'deleteService',
              'uses' => 'ServiceController@deleteService'
         ])->where('id','[0-9]+');

          Route::post('/createService', [
            'as'=>'createService',
            'uses'=>'ServiceController@createService'
            ]);

            Route::get('/AddTemoignage',[
            'as' => 'AddTemoignage',
            'uses' => 'TemoinController@AddTemoignage'
        ]);

             Route::get('/NosTemoignages',[
            'as' => 'NosTemoignages',
            'uses' => 'TemoinController@NosTemoignages'
        ]);

              Route::post('/createTemoin', [
            'as'=>'createTemoin',
            'uses'=>'TemoinController@createTemoin'
        ]);
              Route::get('/ShowTemoin/{id}',[
              'as' => 'ShowTemoin',
              'uses' => 'TemoinController@ShowTemoin'
         ])->where('id','[0-9]+');

              Route::get('/EditTemoin/{id}',[
              'as' => 'EditTemoin',
              'uses' => 'TemoinController@EditTemoin'
         ])->where('id','[0-9]+');

              Route::get('/TemoinUpdate/{id}',[
              'as' => 'TemoinUpdate',
              'uses' => 'TemoinController@TemoinUpdate'
         ])->where('id','[0-9]+');

              Route::get('/deleteTemoin/{id}',[
              'as' => 'deleteTemoin',
              'uses' => 'TemoinController@deleteTemoin'
         ])->where('id','[0-9]+');


               Route::get('/AddMembre',[
            'as' => 'AddMembre',
            'uses' => 'TeamController@AddMembre'
        ]);

              Route::post('/createTeam', [
            'as'=>'createTeam',
            'uses'=>'TeamController@createTeam'
        ]);
               Route::get('/ShowTeam/{id}',[
              'as' => 'ShowTeam',
              'uses' => 'TeamController@ShowTeam'
         ])->where('id','[0-9]+');

               Route::get('/EditTeam/{id}',[
              'as' => 'EditTeam',
              'uses' => 'TeamController@EditTeam'
         ])->where('id','[0-9]+');

                Route::get('/TeamUpdate/{id}',[
              'as' => 'TeamUpdate',
              'uses' => 'TeamController@TeamUpdate'
         ])->where('id','[0-9]+');

                Route::get('/deleteTeam/{id}',[
              'as' => 'deleteTeam',
              'uses' => 'TeamController@deleteTeam'
         ])->where('id','[0-9]+');


                Route::get('/NotreEquipe',[
            'as' => 'NotreEquipe',
            'uses' => 'TeamController@NotreEquipe'
        ]);

                Route::get('/Configuration',[
            'as' => 'config',
            'uses' => 'ConfigController@config'
        ]);

                Route::get('/ConfigUpdate/',[
              'as' => 'ConfigUpdate',
              'uses' => 'ConfigController@ConfigUpdate'
         ])->where('id','[0-9]+');
 });



