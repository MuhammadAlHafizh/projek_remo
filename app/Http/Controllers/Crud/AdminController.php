<?php

namespace App\Http\Controllers\Crud;

use App\Model\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function index(Request $request)
    {
        $data = Admin::when($request->keyword, function ($query) use ($request) 
        {
            $query->where('nama_admin', 'like', "%{$request->keyword}%")
                  ->orWhere('email', 'like', "%{$request->keyword}%");
            })->paginate(5);
        $data->appends($request->only('keyword'));
        return view('admin.crud_admin.index', compact('data'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Admin::create([
            'nama_admin' => $request->nama_admin,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
            return redirect('/Admin');
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
        $edit = Admin::find($id);
        return view('admin.crud_admin.edit',compact('edit'));
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

        $update = Admin::find($id);
        $update->nama_admin = $request->nama_admin;
        $update->email = $request->email;
        $update->password = Hash::make($request->password);
        $update->save();
        return redirect('/Admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Admin::find($id);
        $delete->delete();
        return redirect('/Admin');
    }
}
