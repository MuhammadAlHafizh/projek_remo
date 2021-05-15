<?php

namespace App\Http\Controllers\Crud;

use App\Model\Prioritas;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\Crud;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;

class PrioritasController extends Controller
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
    $data = Prioritas::when($request->keyword, function ($query) use ($request) 
    {
        $query->where('prioritas', 'like', "%{$request->keyword}%");
            //   ->orWhere('email', 'like', "%{$request->keyword}%");
    })->paginate();
    $data->appends($request->only('keyword'));
    return view('admin.crud_prioritas.index', compact('data'));
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud_prioritas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request ,[
            'prioritas' => 'required|min:3|max:25|alpha|unique:prioritas',
        ]);

        $store = Prioritas::create([
            'prioritas' => $request->prioritas,
        ]);

        if($store){
            Session::flash('status','Data berhasil disimpan.');
            }else{
            Session::flash('status','Data gagal disimpan.');
            }
            return redirect('/Prioritas');
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
        $edit = Prioritas::find($id);
        return view('admin.crud_prioritas.edit',compact('edit'));
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
        $this->validate($request ,[
            'prioritas' => 'required|min:3|max:25|alpha|unique:prioritas',
        ]);

        $update = Prioritas::find($id);
        $update->prioritas = $request->prioritas;
        $update->save();
        return redirect('/Prioritas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Prioritas::find($id);
        $delete->delete();
        return redirect('/Prioritas');
    }
}
