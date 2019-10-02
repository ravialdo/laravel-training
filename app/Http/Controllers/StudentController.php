<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Session;

class StudentController extends Controller
{
    public function __construct(){

        $this->middleware([
            'auth',
            'level:admin',
        ]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'siswa' => Student::all(),
        );

        return view('students', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Student::create([
            'nama'  => $request->get('nama'),
            'nis'   => $request->get('nis')
        ]);

        Session::flash('status','Data berhasil ditambahkan!');

        return redirect('/students');
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
        $data = array(
            'siswa' => Student::find($id),
        );

        return view('students-edit', $data);
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
        Student::where('id', $id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
        ]);

        Session::flash('status','Data berhasil diubah!');

        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();

        Session::flash('status','Data berhasil dihapus!');

        return redirect('students');
    }
}
