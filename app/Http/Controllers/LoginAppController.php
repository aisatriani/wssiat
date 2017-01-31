<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class LoginAppController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('login')){
            return redirect('/');
        }

        return view('login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $input = $request->all();

        if($request->input('jenis_user') == 'mahasiswa'){

            $param['nim'] = $request->input('username');
            $param['pwd'] = $request->input('password');

            $response = Api::getService('login_mahasiswa',$param);

            if($response['err_no'] > 0){
                return redirect(url('login'))->withErrors(['error'=>'Username or password tidak cocok']);
            }

            $request->session()->put('login', true);
            $request->session()->put('jenis_user', 'mahasiswa');
            $request->session()->put('nim', $param['nim']);
            $request->session()->put('pa', key($response['data']['DOSENPA']));

        }

        if($request->input('jenis_user') == 'dosen'){

            $param['nidn'] = $request->input('username');
            $param['pwd'] = $request->input('password');

            $response = Api::getService('getlogindosen',$param);

            if($response['err_no'] > 0){
                return redirect(url('login'))->withErrors(['error'=>'Username or password tidak cocok']);
            }

            $request->session()->put('login', true);
            $request->session()->put('nidn', $param['nidn']);
            $request->session()->put('jenis_user', 'dosen');
            //$request->session()->put('pa', key($response['data']['DOSENPA']));

        }



        return redirect(url('/'));

    }

    public function logout(Request $request)
    {
        $request->session()->clear();
        return redirect(url('/'));
    }
}
