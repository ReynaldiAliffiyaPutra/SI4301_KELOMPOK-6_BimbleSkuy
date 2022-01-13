<?php

namespace App\Http\Controllers;

use App\Models\AuthModel;
use App\Models\BerlanggananModel;
use App\Models\HistoryModel;
use App\Models\PembelajaranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PembelajaranController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		$user = AuthModel::where('username', $_SESSION["username"])->first();
		$berlangganan = BerlanggananModel::where('id_user', $user->id_user)->get();

		$paket = array();
		for ($i = 0; $i < count($berlangganan); $i++) {
			if ($berlangganan[$i]->paket == "Masih Newbie") {
				$paket[$i] = "1";
			} elseif ($berlangganan[$i]->paket == "Sudah Advance") {
				$paket[$i] = "2";
			} elseif ($berlangganan[$i]->paket == "Jadi Programmer") {
				$paket[$i] = "3";
			}
		}

		$pembelajaran = DB::table('tb_pembelajaran')->whereIn('paket', $paket)->get();

		return view("student.materi", ["pembelajaran" => $pembelajaran]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view("admin.addpembelajaran");
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

			$file = $request->file('covermateri');
			$newfilename = Str::random(30) . '-' . $file->getClientOriginalName();

			PembelajaranModel::create([
				"title" => $request->input('judulmateri'),
				"cover" => $newfilename,
				"kategori" => $request->input('kategori'),
				"paket" => $request->input('paket'),
				"materi" => $request->input('materi'),
			]);

			$file->move('upload/pembelajaran', $newfilename);

			DB::commit();

			return redirect('/admin/pembelajaran')->with('success', 'Pembelajaran ditambahkan');
		} catch (\Throwable$th) {
			DB::rollBack();
			throw $th;
			return redirect('/admin/pembelajaran')->with('error', 'Gagal menambahkan pembelajaran');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		try {
			$pembelajaran = PembelajaranModel::where('id_pembelajaran', $id)->first();
			$user = AuthModel::where('username', $_SESSION["username"])->first();

			$gethistory = HistoryModel::where('id_user', $user->id_user)->where('id_pembelajaran', $id)->first();

			if ($gethistory == null) {
				HistoryModel::create([
					"id_user" => $user->id_user,
					"id_pembelajaran" => $id,
				]);
			} else {
				HistoryModel::find($gethistory->id_history)->touch();
			}

			return view("student.content", ["pembelajaran" => $pembelajaran]);
		} catch (\Throwable$th) {
			throw $th;
			return redirect("/student/materi")->with('error', 'Gagal memuat pembelajaran');
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$materi = PembelajaranModel::where('id_pembelajaran', $id)->first();

		return view("admin.editpembelajaran", ["materi" => $materi]);
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
				PembelajaranModel::where('id_pembelajaran', $id)
					->update([
						"title" => $request->input('judulmateri'),
						"kategori" => $request->input('kategori'),
						"paket" => $request->input('paket'),
						"materi" => $request->input('materi'),
					]);
			} else {
				$materi = PembelajaranModel::where('id_pembelajaran', $id)->first();
				File::delete('upload/pembelajaran/' . $materi->cover);

				$file = $request->file('covermateri');
				$newfilename = Str::random(30) . '-' . $file->getClientOriginalName();

				PembelajaranModel::where('id_pembelajaran', $id)
					->update([
						"title" => $request->input('judulmateri'),
						"cover" => $newfilename,
						"kategori" => $request->input('kategori'),
						"paket" => $request->input('paket'),
						"materi" => $request->input('materi'),
					]);

				$file->move('upload/pembelajaran', $newfilename);
			}
			return redirect('/admin/pembelajaran')->with('success', 'Update berhasil');
		} catch (\Throwable$th) {
			return redirect('/admin/pembelajaran')->with('error', 'Update gagal');
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
			$materi = PembelajaranModel::where('id_pembelajaran', $id)->first();
			File::delete('upload/pembelajaran/' . $materi->cover);

			DB::table('tb_pembelajaran')->where('id_pembelajaran', $id)->delete();
			return redirect('/admin/pembelajaran')->with('success', 'Berhasil menghaupus data');
		} catch (\Throwable$th) {
			return redirect('/admin/pembelajaran')->with('error', 'Gagal menghapus data');
		}
	}
}
