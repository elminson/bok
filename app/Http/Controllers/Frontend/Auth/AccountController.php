<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Account;
use App\Models\Auth\User;
use Auth;
use Illuminate\Http\Request;

class AccountController
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(User $user)
	{

		$data = [];
		$user = Auth::user();
		$accounts = Account::where("holder_id", '=', $user->id)->paginate(10);
		$totalBalance = 0;
		foreach ($accounts as $account){
			$totalBalance += $account->balance;
		}

		$data['totalBalance'] = $totalBalance;
		$data['accounts'] = $accounts;

		return view('bok.accounts', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param \App\Account $account
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show(Account $account)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \App\Account $account
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Account $account)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Account             $account
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Account $account)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Account $account
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Account $account)
	{
		//
	}
}
