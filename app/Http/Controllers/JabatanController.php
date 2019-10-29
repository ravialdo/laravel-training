<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jabatan;
use Session;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
          'jabatan' => Jabatan::all(),
        );

        return view('jabatan', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jabatan::create([
          'nama' => $request->nama_jabatan,
        ]);

        Session::flash('status','Data berhasil ditambahkan!');

        return redirect('jabatan');

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
        // $jabatan = Jabatan::find($id);
        //
        // $data = array(
        //   'jabatan' => $jabatan,
        //   'jabatan_selected' => $jabatan->users->pluck('id')->toArray(),
        //   'users' => \App\User::all(),
        //   'id' => $id
        // );
        //
        // return view('jabatan-edit', $data);

        $data = [
          'judul' => 'Edit Jabatan',
          'jabatan'=> Jabatan::find($id),
        ];

        return view('jabatan-edit', $data);
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
        // Jabatan::where('id', $id)->update([
        //   'nama' => $request->nama_jabatan,
        // ]);
        //
        // Session::flash('status','Data berhasil Diubah!');
        //
        // return redirect('jabatan');

        $jabatan = Jabatan::find($id);
        $jabatan->nama = $request->get('nama_jabatan');
        $jabatan->save();

        return redirect('jabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Jabatan::find($id)->delete();

      Session::flash('status','Data berhasil dihapus!');

      return redirect('jabatan');
    }
}
