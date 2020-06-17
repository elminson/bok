<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Account;
use App\Activity;
use App\Models\Auth\User;
use App\Mykid;
use Auth;
use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function transfer()
	{

		$userParent = Auth::user();
		$data['accounts'] = Mykid::where('parent_user_id', '=', $userParent->id)->get();
		$data['my_accounts'] = Account::where('holder_id', '=', $userParent->id)->get();

		return view('bok.transfers', $data);

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function add(Request $request)
	{

		$userParent = Auth::user();
		$data = $request->only('account', 'amount', 'myaccount', 'description');

		// Update client balance
		// Update kids balance
		// Insert in to trasaction
		$kidAccount = Mykid::where('number', '=', $data['account'])->first();
		$myAccount = Account::where('holder_id', '=', $userParent->id)->where('number', '=', $data['myaccount'])->first();
		$kidAccountToUpdate = Mykid::find($kidAccount->id);

		$kidAccountToUpdate->balance = $kidAccount->balance + $data['amount'];
		$kidAccountToUpdate->update();
		$myAccount->balance = $myAccount->balance - $data['amount'];
		$myAccount->update();

		Activity::create([
							 'holder_id' => $userParent->id,
							 'from_account_number' => $data['myaccount'],
							 'to_account_number' => $data['account'],
							 'transaction_amount' => $data['amount'],
							 'available_balance' => $myAccount->balance,
							 'description' => $data['description'],
							 'transaction_type' => 'transfer',
							 'status' => '1',
						 ]);

		return redirect('/mykids')->withFlashSuccess('Transfer Success!');

	}
}
