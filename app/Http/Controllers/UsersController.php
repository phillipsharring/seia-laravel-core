<?php

namespace Seia\Core\Http\Controllers;

use Illuminate\Http\Request;

use Seia\Core\Http\Requests;
use Seia\Core\Http\Controllers\Controller;

use Seia\Core\Model\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     *
     * @return Response
     */
    public function admin(Request $request)
    {
        $cols = ['id', 'first_name', 'last_name', 'email', 'created_at', 'status'];
        $recentUsers = User::select($cols)
            ->where('created_at', '>=', date('Y-m-d', strtotime('-2 weeks')))
            ->orderBy('created_at', 'DESC')
            ->get();
        $allUsers = User::select($cols)->orderBy('last_name', 'ASC')->orderBy('first_name', 'ASC')->paginate(2);
        $q = $request->get('q', null);
        $foundUsers = [];
        if (!empty($q)) {
            $like = '%' . $q . '%';
            $foundUsers = User::select($cols)->where(function($query) use ($like) {
                $query->where('first_name', 'LIKE', $like)
                    ->orWhere('last_name', 'LIKE', $like)
                    ->orWhere('email', 'LIKE', $like);
            })->get();
        }
        return view('users.admin', compact('recentUsers', 'allUsers', 'q', 'foundUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function ban($id)
    {
        User::find($id)->fill(['status' => 'banned'])->save();
        return redirect()->route('users.admin')->with('message', 'User was banned');
    }
}
