<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;


class UserController extends Controller{

    function index(){
        $data ['list_user'] = User::all();
        return view("user.index", $data);
    }

        function create(){
        return view("user.create");
    }

        function store(){
        $user = new User();
        $user->username = request('username');
        $user->nama = request('nama');
        $user->email = request('email');
        $user->password = bcrypt(request('password')) ;
        $user->save();

        $userDetail = new UserDetail();
        $userDetail->id_user = $user->id;
        $userDetail->tempat_tinggal = request('tempat_tinggal');
        $userDetail->no_handphone = request('no_handphone');
        $userDetail->save();

        return redirect('admin/user')->with('success','Data Berhasil Ditambahkan');
    }

        function show(User $user){
        $data['user'] = $user;
        return view('user.show', $data);
    }

    function edit(User $user){
        $data['user'] = $user;
        return view('user.edit', $data); 
    }

    function update(User $user){
        $user->username = request('username');
        $user->nama = request('nama');
        $user->email = request('email');
        if(request('password')) $user->password = bcrypt(request('password')) ;
        $user->save();

        return redirect('admin/user')->with('success','Data Berhasil Diedit');;
    }

    function destroy(User $user){
        \Log::info('Deleting data with ID: ' . $user->id);
        $user->delete();
        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }

}