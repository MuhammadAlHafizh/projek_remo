<?php

namespace App\Http\Controllers\Crud;

use App\Model\Kelas;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\Crud;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;

class KelasController extends Controller
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
    $data = Kelas::when($request->keyword, function ($query) use ($request) 
    {
        $query->where('nama_kelas', 'like', "%{$request->keyword}%")
              ->orWhere('kompetensi', 'like', "%{$request->keyword}%");
    })->paginate();
    $data->appends($request->only('keyword'));
    return view('admin.crud_kelas.index', compact('data'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud_kelas.create');
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
            'nama_kelas' => 'required|max:25',
            'kompetensi' => 'required|max:25',
        ]);

        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi' => $request->kompetensi
        ]);

        return redirect('/Kelas');
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
        $edit = Kelas::find($id);
        return view('admin.crud_kelas.edit',compact('edit'));
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
            'nama_kelas' => 'required|max:25',
            'kompetensi' => 'required|max:25'
        ]);

        $update = Kelas::find($id);
        $update->nama_kelas  = $request->nama_kelas;
        $update->kompetensi  = $request->kompetensi;
        $update->save();

        return redirect('/Kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        $delete = Kelas::find($id);
        $delete->delete();
        return redirect('/Kelas');
    }

 
}
