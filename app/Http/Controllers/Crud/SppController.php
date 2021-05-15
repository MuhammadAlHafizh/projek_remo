<?php

namespace App\Http\Controllers\Crud;

use App\Model\Spp;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\Crud;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;

class SppController extends Controller
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
   
    $data = Spp::when($request->keyword, function ($query) use ($request) 
    {
        $query->where('nama_spp', 'like', "%{$request->keyword}%")
              ->orWhere('nominal', 'like', "%{$request->keyword}%");
    })->paginate(5);
    $data->appends($request->only('keyword'));
    return view('admin.crud_spp.index', compact('data'));

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud_spp.create');
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
            'nama_spp' => 'required|min:4|max:25',
            'nominal' => 'required|min:4|max:25',
            'tahun' => 'required|min:4|max:25',
            'bulan' => 'required|min:4|max:25',
        ]);

        $store = Spp::create([
            'nama_spp' => $request->nama_spp,
            'nominal' => $request->nominal,
            'tahun' => $request->tahun,
            'bulan' => $request->bulan,
        ]);

        if($store){
            Session::flash('status','Data berhasil disimpan.');
            }else{
            Session::flash('status','Data gagal disimpan.');
            }
            return redirect('/Spp');
            

            
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
        $edit = Spp::find($id);
        return view('admin.crud_Spp.edit',compact('edit'));
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
            'nama_spp' => 'required|max:25',
            'nominal' => 'required|max:25',
            'tahun' => 'required|max:25',
            'bulan' => 'required|max:25',
        ]);

        $update = Spp::find($id);
        $update->nama_spp = $request->nama_spp;
        $update->nominal = $request->nominal;
        $update->tahun = $request->tahun;
        $update->bulan = $request->bulan;
        $update->save();
        return redirect('/Spp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Spp::find($id);
        $delete->delete();
        return redirect('/Spp');
    }
}
