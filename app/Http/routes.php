<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Members;
use Illuminate\Http\Request;  



Route::get('/', function () {
    $members = Members::orderBy('created_at', 'asc')->get();
    return view('members',[
        'members' => $members
    ]);
});

Route::post('/members', function (Request $request) {
//バリデーション
    $validator = Validator::make($request->all(), [
        'item_name' => 'required |min:1 |max:255',  
    ]);
//バリデーションエラー
    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    } 
//Eloquentモデル
 
    $members = new Members;
    $members->lastname = $request->item_name;
    $members->firstname = 'test';
    $members->mail = 'test@test.jp';
    $members->password = 'password';
    $members->face_photo = 'http:www.face.html';
    $members->country = '2';
    $members->address = 'address test1';
    $members->building = 'bulding';
    $members->birthday = '2017/8/25';
    $members->tel = '0000000000';
    $members->nation = '2';
    $members->birthplace = '3';           
    $members->lang = '1';
    $members->affiliation = '1';
    $members->register = '1';
    $members->last_login = '2017/8/25';
    $members->admin_flg = '1';
    $members->life_flg = '1';
    $members->myPoint = '100';
    $members->myRank = '2';
    $members->save();
    
    return redirect('/');
    
});

Route::delete('/members/{member}', function (Member $member) {
    //
    $member->delete();
    return redirect('/');
});