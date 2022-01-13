<?php

namespace App\Http\Controllers;

use App\Models\PengajarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PengajarController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$pengajar = PengajarModel::all();
		return view("student.guru", ["pengajar" => $pengajar]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view("admin.addpengajar");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		try {
			DB::beginTransaction();

			$file = $request->file('profile');
			$newfilename = Str::random(30) . '-' . $file->getClientOriginalName();

			PengajarModel::create([
				"nama" => $request->input('nama'),
				"tamatan" => $request->input('pendidikan'),
				"umur" => $request->input('umur'),
				"keahlian" => $request->input('keahlian'),
				"profile" => $newfilename,
			]);

			$file->move('upload/pengajar', $newfilename);

			DB::commit();

			return redirect('/admin/pengajar')->with('success', 'Pengajar ditambahkan');
		} catch (\Throwable$th) {
			DB::rollBack();
			throw $th;
			return redirect('/admin/pengajar')->with('error', 'Gagal menambahkan pengajar');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$pengajar = PengajarModel::where('id_pengajar', $id)->first();

		return view("admin.editpengajar", ["pengajar" => $pengajar]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		try {
			if (count($request->file()) == 0) {
				PengajarModel::where('id_pengajar', $id)
					->update([
						"nama" => $request->input('nama'),
						"tamatan" => $request->input('pendidikan'),
						"umur" => $request->input('umur'),
						"keahlian" => $request->input('keahlian'),
					]);
			} else {
				$pengajar = PengajarModel::where('id_pengajar', $id)->first();
				File::delete('upload/pengajar/' . $pengajar->profile);

				$file = $request->file('profile');
				$newfilename = Str::random(30) . '-' . $file->getClientOriginalName();

				PengajarModel::where('id_pengajar', $id)
					->update([
						"nama" => $request->input('nama'),
						"tamatan" => $request->input('pendidikan'),
						"umur" => $request->input('umur'),
						"keahlian" => $request->input('keahlian'),
						"profile" => $newfilename,
					]);
				$file->move('upload/pengajar', $newfilename);
			}
			return redirect('/admin/pengajar')->with('success', 'Update berhasil');
		} catch (\Throwable$th) {
			return redirect('/admin/pengajar')->with('error', 'Update gagal');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		try {
			$pengajar = PengajarModel::where('id_pengajar', $id)->first();
			File::delete('upload/pengajar/' . $pengajar->profile);

			DB::table('tb_pengajar')->where('id_pengajar', $id)->delete();
			return redirect('/admin/pengajar')->with('success', 'Berhasil menghaupus data');
		} catch (\Throwable$th) {
			return redirect('/admin/pengajar')->with('error', 'Gagal menghapus data');
		}
	}
}
