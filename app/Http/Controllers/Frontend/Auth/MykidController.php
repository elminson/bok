<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Mykid;
use App\Repositories\Frontend\Auth\UserRepository;
use Auth;
use App\Models\Auth\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class MykidController extends Controller
{

	use RegistersUsers;

	/**
	 * @var UserRepository
	 */
	protected $userRepository;

	/**
	 * RegisterController constructor.
	 *
	 * @param UserRepository $userRepository
	 */
	public function __construct(UserRepository $userRepository)
	{

		$this->userRepository = $userRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{

		$data = [];
		$user = Auth::user();
		$accounts = Mykid::where("parent_user_id", '=', $user->id)->get();

		$data['kids'] = $accounts;

		return view('bok.mykids', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function add(Request $request)
	{

		$data = [];


		if (isset($_POST['name'])) {
			$userParent = Auth::user();
			$parentUserId = $userParent->id;
			$data = $request->only('name', 'password');

			$data['first_name'] = $data['name'];
			$data['last_name'] = $userParent->last_name;
			$data['active'] = 1;
			$data['confirmed'] = 1;
			$data['email'] = "";
			$user = $this->userRepository->create($data);
			$data['email'] = $this->generateKidEmail($data['first_name'], $data['last_name'], $user->id);
			$user->email = $data['email'];
			$user->update();
			$data['birthday'] = $request->only('birthday');

			$request = $request->only('birthday');

			$time = strtotime($request['birthday']);

			$newformat = date('Y-m-d', $time);

			$number = rand(1000000, 99999999);

			$kid = Mykid::create([
									 'name' => $data['name'],
									 'holder_id' => $user->id,
									 'dob' => $newformat,
									 'parent_user_id' => $parentUserId,
									 'number' => $number,
									 'balance' => '0',

								 ]);

			return redirect('/mykids')->withFlashSuccess('Success saved!');
		}

		return view('bok.mykids-add', $data);
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

	}

	/**
	 * Display the specified resource.
	 *
	 * @param \App\Mykid $mykid
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show(Mykid $mykid)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \App\Mykid $mykid
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Mykid $mykid)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Mykid               $mykid
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Mykid $mykid)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Mykid $mykid
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Mykid $mykid)
	{
		//
	}

	/**
	 * Check for a valid email and make it unique
	 *
	 * @param $first_name
	 * @param $last_name
	 * @param $userId
	 *
	 * @return string
	 */
	private function generateKidEmail($first_name, $last_name, $userId)
	{

		$email = strtolower(str_replace(" ", "", $first_name . $last_name));

		return $email . "_" . $userId . "@bok.com";

	}

	/**
	 * Check for a valid email and make it unique
	 *
	 * @param $first_name
	 * @param $last_name
	 *
	 * @return string
	 */
	private function generateKidEmailA($first_name, $last_name)
	{

		$email = strtolower(str_replace(" ", "", $first_name . $last_name));
		$condition = true;
		$newEmail = $email . "@bok.com";
		$i = 1;
		while ($condition) {

			$found = User::where('email', '=', $newEmail)->first();
			print_r($found);
			if (!$found) {

				$condition = false;
				break;

			} else {

				$explode = explode("_", $found[0]['email']);

				print_r($explode);
				if (!empty($explode[1])) {
					$i = $explode[1];
				}
				$i++;
				print_r($explode);
				$newEmail = $email . "_" . $i . "@bok.com";
			}

		}

		return $newEmail;
	}
}
