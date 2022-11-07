<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserGroup;

class UserGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('usergroup.index');
    }

    public function data()
    {
        $usrGrp = UserGroup::orderBy('id','asc')->get();

        return DataTables()
            ->of($usrGrp)
            ->addIndexColumn()
            ->addColumn('aksi', function($usrGrp) {
                return '
                 <button class = "btn btn-xs btn-info btn-flat"><i class= "fa fa-edit"></i> </button>
                 <button class = "btn btn-xs btn-danger btn-flat"><i class= "fa fa-trash"></i> </button>';
            })
            ->rawColumns(['aksi'])
            ->make(true);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user_grp = new UserGroup();
        $user_grp->user_group_name = $request->user_group_name;
        $user_grp->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
