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

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/transfer-data-tuntutan', function () {

        $dbb = DB::table('epp_waris')->get();
        $tuntutan = DB::table('tuntutan')->get();

        foreach ($tuntutan as $tt) {
            foreach ($dbb as $db) {
                if ($db->idperibadi == $tt->idPesakit) {
                    DB::table('tuntutan')
                        ->where('idPesakit', $tt->idPesakit)
                        ->update(
                            [
                                'idpenjawatawam' => $db->idPesara,
                                'idwaris' => $db->id
                            ]
                        );
                }
            }
        }
    });

    Route::get('/transfer-data-tuntutan-pa', function () {

        $dbb = DB::table('peribadi')
        ->where('status', '<>', 'waris')->get();

        $tuntutan = DB::table('tuntutan')->get();

        foreach ($tuntutan as $tt) {
            foreach ($dbb as $db) {
                if ($db->idPeribadi == $tt->idPesakit) {
                    DB::table('tuntutan')
                        ->where('idPesakit', $tt->idPesakit)
                        ->update(
                            [
                                'idpenjawatawam' => $db->idPeribadi
                            ]
                        );
                }
            }
        }
        // return view('welcome');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
    Route::get('{page}/{id}', ['as' => 'page.withid', 'uses' => 'PageController@withid']);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    // Route::post('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    // Route::post('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::post('profile/update', 'ProfileController@update')->name('profile.update');
    Route::post('profile/password', 'ProfileController@password')->name('profile.password');


    Route::post('tambahpentadbir', 'PageController@tambahpentadbir');

    Route::post('tambah-jabatan', 'PageController@tambahjabatan');
    Route::post('kemaskini-jabatan', 'PageController@kemaskinijabatan');
    Route::post('tambah-jawatan', 'PageController@tambahjawatan');
    Route::post('kemaskini-jawatan', 'PageController@kemaskinijawatan');

    Route::post('tambah-peribadi', 'PageController@tambahperibadi');
    Route::post('kemaskini-peribadi', 'PageController@kemaskiniperibadi');
    Route::post('tambah-waris', 'PageController@tambahwaris');
    Route::post('kemaskini-waris', 'PageController@kemaskiniwaris');

    Route::post('kemaskini-perkhidmatan', 'PageController@kemaskiniperkhidmatan');
    Route::post('kemaskini-perubatan', 'PageController@kemaskiniperubatan');
    Route::post('tambahperubatan', 'PageController@tambahperubatan');
    Route::post('tambahperubatan-waris', 'PageController@tambahperubatanwaris');

    Route::post('tambah-bilrawatan', 'PageController@tambahbilrawatan');
    Route::post('tambah-bilrawatanwaris', 'PageController@tambahbilrawatanwaris');
    Route::post('kemaskini-bilrawatan', 'PageController@kemaskinibilrawatan');

    Route::post('padam-pegawai-pesara', 'PageController@padampegawaipesara');
    Route::post('padam-waris', 'PageController@padamwaris');
    Route::post('padam-perubatan', 'PageController@padamperubatan');
    Route::post('padam-bil', 'PageController@padambil');

    Route::post('laporan', 'PageController@laporan');

    Route::post('tambah-hospital', 'PageController@tambahhospital');
    Route::post('tambah-pembekal', 'PageController@tambahpembekal');

    Route::get('pdf/pdf-jumlah-kos/{id}', 'PageController@laporanjumlahkos')->name('pdf.pdf-jumlah-kos');
    Route::get('pdf/pdf-jumlah-permohonan/{id}', 'PageController@laporanjumlahpermohonan')->name('pdf.pdf-jumlah-permohonan');
});
