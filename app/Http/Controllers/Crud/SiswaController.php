<?php

namespace App\Http\Controllers\Crud;

use App\Model\Siswa;
use App\Model\Kelas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SiswaController extends Controller
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


    public function index()
    {

        $data = Siswa::with('Kelas')->get();
        return view('admin.crud_siswa.index', compact('data'));


 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('admin.crud_siswa.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required',
            'kelas_id'=> 'required', 
            'nis'=> 'required', 
            'alamat'=> 'required',
            'no_telp'=> 'required',
            'email'=> 'required', 
            'password'=> 'required', 
        ]);
        /**Siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'kelas_id' => $request->kelas_id,
            'nis' => $request->nis,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            ]);
            **/

    
            /**$data = new Siswa;
            $data->nama_siswa = $request->nama_siswa;
            $data->kelas_id = $request->kelas_id;
            $data->nis = $request->nis;
            $data->alamat = $request->alamat;
            $data->no_telp = $request->no_telp;
            $data->email = $request->email;
            $data->password = $request->password;
            $data->save();
            **/
        Siswa::create($request->all());
        return redirect('/Siswa');

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
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('admin.crud_siswa.edit',compact('siswa','kelas'));
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

        $update = Siswa::find($id);
        $update->nama_siswa = $request->nama_siswa;
        $update->kelas_id = $request->kelas_id;
        $update->nis = $request->nis;
        $update->alamat = $request->alamat;
        $update->no_telp = $request->no_telp;
        $update->email = $request->email;
        $update->password = Hash::make($request->password);
        $update->save();
        return redirect('Siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Siswa::find($id);
        $delete->delete();
        return redirect('Siswa');
    }
}
