<?php

namespace App\Http\Controllers;

use App\Models\AuthModel;
use App\Models\BerlanggananModel;
use App\Models\PaymentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller {

	public function invoice(Request $request) {
		$v = $request->input("v");
		return view("student.payment.invoice", ["v" => $v]);
	}

	public function metodepembayaran(Request $request) {
		$pay = $request->input("pay");
		return view("student.payment.metodepembayaran", ["pay" => $pay]);
	}

	public function account(Request $request) {
		$user = AuthModel::where('username', $_SESSION["username"])->first();

		$pay = $request->input("pay");
		$payment = $request->input("metodepembayaran");
		$kodebayar = "8909" . sprintf("%013d", $user->hp);

		$bankimg = str_replace(' ', '_', strtolower($payment)) . ".png";

		return view("student.payment.account", ["pay" => $pay, "payment" => $payment, "kodebayar" => $kodebayar, "bankimg" => $bankimg]);
	}

	public function createtrans(Request $request) {
		try {
			$user = AuthModel::where('username', $_SESSION["username"])->first();

			DB::beginTransaction();

			PaymentModel::create([
				"id_user" => $user->id_user,
				"nominal" => $request->input("pay"),
				"metode_pembayaran" => $request->input("payment"),
				"kode_pembayaran" => $request->input("kodebayar"),
			]);

			$paket = "";
			if ($request->input("pay") == "500000") {
				$paket = "Masih Newbie";
			} elseif ($request->input("pay") == "800000") {
				$paket = "Sudah Advance";
			} elseif ($request->input("pay") == "1000000") {
				$paket = "Jadi Programmer";
			}

			BerlanggananModel::create([
				"id_user" => $user->id_user,
				"paket" => $paket,
				"start" => date("Y-m-d"),
				"end" => date('Y-m-d', strtotime("+6 months", strtotime(date("Y-m-d")))),
			]);

			DB::commit();

			return redirect('/student/berlangganan/done');
		} catch (\Throwable$th) {
			DB::rollBack();
			return redirect('/student/berlangganan')->with('error', 'Gagal melakukan pembayaran.');
		}
	}
}
