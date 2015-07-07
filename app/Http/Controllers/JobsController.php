<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $jobs =  Job::with('user', 'category', 'type')->get();
        return view('index', compact('posts'));
	}

	public function show($id)
	{
        $job = Job::with('user', 'category', 'type')->find($id);
        return view('job', compact('job'));
	}
}
