<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(Request $request)
	{
	    $members = \App\Member::orderBy('created_at', 'asc')->get();

	    return view('members', [
	        'members' => $members
	    ]);
	}

	public function insert(Request $request)
	{
	    $member = new \App\Member;
	    $member->name = $request->name;
	    $member->save();

	    return redirect('/');
	}

	public function delete(Request $request, $id)
	{
	    \App\Member::findOrFail($id)->delete();

    	return redirect('/');
	}

	public function go_to_detail(Request $request, $id)
	{
	    $member = \App\Member::findOrFail($id);
	    return view('member_detail', [
	        'member' => $member
	    ]);
	}

	public function update(Request $request, $id)
	{
	    $member = \App\Member::findOrFail($id);
	    $member->name = $request->name;
	    $member->save();
    	return redirect('/');
	}
}

