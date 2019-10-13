<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
use App\MailType;
use Session;

class MailController extends Controller
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
          'surat' => Mail::all(),
        );

        return view('mails', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
          'type' => MailType::all(),
        );

        return view('mails-create', $data);
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
			'file_upload' => 'required|image',
		]); 
		
		$extension = $request->file_upload->getClientOriginalExtension();
		$file = $request->file_upload;
          $size = $request->file_upload->getClientSize();
	     $file_name = now()->format('d-m-Y').'-'.$request->file_upload->getClientOriginalName();
	
		Mail::create([
			'incoming_at' => $request->incoming_at,
			'mail_code' => $request->mail_code,
			'mail_date' => $request->mail_date,
			'mail_from' => $request->mail_from,
			'mail_to' => $request->mail_to,
			'mail_subject' => $request->mail_subject,
			'description' => $request->description,
			'file_upload' => $file_name,
			'mail_type_id' => $request->mail_type_id,
			'user_id' => $request->user_id,
		]);
	
       	 $file->move('files', $file_name);
		 Session::flash('status','Surat Berhasil Dikirim!');
		 Session::flash('color','success');
		
		return redirect('/Mails');
		
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
			'surat' => Mail::find($id),
			'type' => MailType::all(),
		);
		
		return view('mails-edit', $data);
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
        Mail::where('id',$id)->delete();
        Session::flash('status','Data surat berhasil dihapus!');

        return redirect('Mails');
    }
}
