<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\PembelajaranModel;
use App\Models\PengajarModel;
use App\Models\AuthModel;

class AdminPagesController extends Controller {
	public function dashboard() {
		$user = DB::table('tb_user')
			->leftJoin('tb_payment', 'tb_user.id_user', '=', 'tb_payment.id_user')
			->orderBy('tb_user.id_user', 'desc')
			->select('tb_user.*', 'tb_payment.id_payment')
			->take(5)
			->get();
		$pembelajaran = PembelajaranModel::all()->take(4);
		$pengajar = PengajarModel::all()->take(5);
		return view("admin.dashboard", ["user" => $user, "pembelajaran" => $pembelajaran, "pengajar" => $pengajar]);
	}

	public function user() {
		$user = DB::table('tb_user')
			->leftJoin('tb_payment', 'tb_user.id_user', '=', 'tb_payment.id_user')
			->orderBy('tb_user.id_user', 'desc')
			->select('tb_user.*', 'tb_payment.id_payment')
			->get();

		return view("admin.user", ["user" => $user]);
	}

	public function userdetail($id) {
		$user = DB::table('tb_user')
			->leftJoin('tb_payment', 'tb_user.id_user', '=', 'tb_payment.id_user')
			->select('tb_user.*', 'tb_payment.id_payment')
			->where('tb_user.id_user', $id)
			->first();

		$bayar = DB::table('tb_payment')
			->where('id_payment', $user->id_payment)
			->first();

		$paket = "";
		if ($user->id_payment != null) {
			if ($bayar->nominal == "500000") {
				$paket = "Masih Newbie";
			} elseif ($bayar->nominal == "800000") {
				$paket = "Sudah Advance";
			} elseif ($bayar->nominal == "1000000") {
				$paket = "Jadi Programmer";
			}
		}

		return view("admin.userdetail", ["user" => $user, "paket" => $paket, "bayar" => $bayar]);
	}

	public function pembelajaran() {
		$pembelajaran = PembelajaranModel::all();
		return view("admin.pembelajaran", ["pembelajaran" => $pembelajaran]);
	}

	public function pengajar()
	{
		$pengajar = PengajarModel::all();
		return view("admin.pengajar", ["pengajar" => $pengajar]);
	}
}
