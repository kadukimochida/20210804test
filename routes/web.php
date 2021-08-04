<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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

Route::get('/',[ContactController::class,'index']);
Route::post('/create',[ContactController::class,'create']);


/*
 問題１
「ORM」はSQLよりもPHPに近い処理でデータベースを操作することができます。
「Eloquant」はORMと呼ばれる機能をLaravelに実装したもので、MVCの「Model」を定義し、これを利用してデータベースを操作するように設計されています。
CRUDとはシステムに必要な4つの主要機能である「Create」、「Read」、「Update」、Deleteの頭文字を並べた用語です。
Laravelではデータベースの接続の設定を行う際に「.env」というファイルを編集します。
「migration」を行うことで「migration」ファイルで定義した内容をデータベースに反映させることができます。
初期状態でいくつかのダミーデータを用意できる機能は「モデルファクトリ」と呼ばれます。
*/