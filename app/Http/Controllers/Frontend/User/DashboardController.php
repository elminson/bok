<?php

namespace App\Http\Controllers\Frontend\User;

use App\Account;
use App\Http\Controllers\Controller;
use App\Mykid;
use Auth;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{

		$userParent = Auth::user();
		$data['accounts'] = Mykid::where('parent_user_id', '=', $userParent->id)->get();
		$data['my_accounts'] = Account::where('holder_id', '=', $userParent->id)->get();
		$data['fico'] = 800;
		$data['number_deposits'] = 25;
		$balance = 0;
		foreach ($data['my_accounts'] as $account) {
			$balance += $account['balance'];
		}

		$data['balance'] = $balance;

		return view('bok.dashboard-data', $data);
	}
}
