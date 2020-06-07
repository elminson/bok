<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function aboutUs()
    {
        return view('frontend.about-us');
    }

	/**
	 * @return \Illuminate\View\View
	 */
	public function service()
	{

		return view('frontend.service');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function portfolio()
	{

		return view('frontend.portfolio');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function portfolioDetails()
	{

		return view('frontend.portfolio-details');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function blog()
	{

		return view('frontend.blog');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function singleBlog()
	{

		return view('frontend.single-blog');
	}

}
