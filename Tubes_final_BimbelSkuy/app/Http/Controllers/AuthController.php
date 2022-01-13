<?php

namespace App\Http\Controllers;

use App\Models\AuthModel;
use Illuminate\Http\Request;

class AuthController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view("login");
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function auth(Request $request) {
		$user = AuthModel::where('username', $request->input('username'))->first();

		if ($user != null) {
			if (password_verify($request->input('password'), $user->password)) {
				$_SESSION["isLogin"] = true;
				$_SESSION["username"] = $user->username;
				$_SESSION["status"] = $user->status;

				if ($user->status == "usr") {
					return redirect('/student/home');
				} elseif ($user->status == "adm") {
					return redirect('/admin/dashboard');
				} else {
					return redirect('/logout');
				}
			}
			return redirect('/login')->with('error', 'Username/Kata sandi salah.');
		}
		return redirect('/login')->with('error', 'Akun tidak terdaftar.');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		try {
			$user = AuthModel::where('username', $request->input('username'))->first();

			if ($user == null) {
				$pass = password_hash($request->input("password"), PASSWORD_DEFAULT);
				AuthModel::create([
					"username" => $request->input("username"),
					"email" => $request->input("email"),
					"password" => $pass,
					"full_name" => $request->input("fullname"),
					"sekolah" => $request->input("sekolah"),
					"hp" => $request->input("nohp"),
					"status" => "usr",
				]);

				return redirect('/login')->with('success', 'Akun berhasil dibuat. Silahkan login.');
			}
			return redirect('/daftar')->with('error', 'Username telah digunakan.');
		} catch (\Throwable$th) {
			return redirect('/daftar')->with('error', 'Gagal membuat akun.');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function logout() {
		session_destroy();
		return redirect("/");
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function profile(Request $request) {
		$user = AuthModel::where('username', $_SESSION["username"])->first();

		return view("student.profile", ["user" => $user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
