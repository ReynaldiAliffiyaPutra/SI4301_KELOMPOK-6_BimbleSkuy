<?php

namespace App\Http\Controllers;

use App\Models\AuthModel;
use App\Models\FeedbackModel;
use Illuminate\Http\Request;

class FeedbackController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$feedback = FeedbackModel::all();
		return view("admin.feedback", ['feedback' => $feedback]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view("student.layanan");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		try {
			$user = AuthModel::where('username', $_SESSION["username"])->first();

			FeedbackModel::create([
				"name" => $user->full_name,
				"feedback" => $request->input("feedback"),
			]);

			return redirect('/student/layanan')->with('success', 'Feedback dikirimkan');
		} catch (\Throwable$th) {
			throw $th;
			return redirect('/student/layanan')->with('error', 'Gagal mengirim feedback.');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$feedback = FeedbackModel::where('id_feedback', $id)->first();
		return view("admin.feedbackdetail", ['feedback' => $feedback]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
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
