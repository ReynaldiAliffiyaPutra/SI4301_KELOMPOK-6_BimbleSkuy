<?php

namespace App\Http\Controllers;
use App\Models\AuthModel;
use App\Models\PaymentModel;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller {
	public function home() {
		$user = AuthModel::where('username', $_SESSION["username"])->first();

		return view("student.home", ["user" => $user]);
	}

	public function pembayaran() {
		$user = AuthModel::where('username', $_SESSION["username"])->first();

		$pembayaran = PaymentModel::where('id_user', $user->id_user)->get();

		return view("student.riwayatpembayaran", ["pembayaran" => $pembayaran]);
	}

	public function history()
	{
		$user = AuthModel::where('username', $_SESSION["username"])->first();

		$pembelajaran = DB::table('tb_history')
			->join('tb_pembelajaran', 'tb_history.id_pembelajaran', '=', 'tb_pembelajaran.id_pembelajaran')
			->orderBy('updated_at', 'desc')
			->get();

		return view("student.history", ["pembelajaran" => $pembelajaran]);
	}
}
