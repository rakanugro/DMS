<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use File;



//use Illuminate\Support\Facades\Storage;

class Dmscontroller extends Controller
{

	public function index()
	{



		$title = "Halaman Utama";
		return view('dashboard', ['title' => $title]);


	}

	public function page_admin()
	{

		$title = "Halaman User Admin";
		return view('page_admin', ['title' => $title]);

	}

	public function page_user_admin()
	{

		$title = "User Page Admin";

		$file = DB::table('master_file')->orderBy('no_id','desc')->get();

		$produsen = DB::table('produsen')->get();

		$dokumen = DB::table('dokumen')->get();

		return view('user_page_admin',compact('title','file','produsen','dokumen'));
	}


	public function produsen()
	{
		$produsen = DB::table('produsen')->orderBy('no_id','desc')->get();

		$title = "Form Produsen";
		return view('form_produsen', ['title' => $title, 'produsen' => $produsen]);

	}



	public function produsen_store(Request $request)
	{

		DB::table('produsen')->insert([

			'nama_produsen' => $request->nama_produsen,
			'alamat_produsen' => $request->alamat_produsen,
			'telepon' => $request->telepon

		]);

		return redirect('/produsen');

	}

	public function produsen_edit($no_id)
	{

		$title = 'Edit Produsen';

		$produsen = DB::table('produsen')->where('no_id',$no_id)->get();

		return view('edit_produsen',compact('title','produsen'));

	}

	public function produsen_update(Request $request)
	{

		DB::table('produsen')->where('no_id',$request->no_id)->update([

			'nama_produsen' => $request->nama_produsen,
			'alamat_produsen' => $request->alamat_produsen,
			'telepon' => $request->telepon

		]);

		return redirect('/produsen');

	}


	public function produsen_delete($no_id)
	{

		DB::table('produsen')->where('no_id',$no_id)->delete();

		return redirect('/produsen');

	}

	public function dokumen()
	{	
		$dokumen = DB::table('dokumen')->orderBy('no_id','desc')->get();

		$title = 'Form Jenis Dokumen';

		return view('form_dokumen',['title' => $title, 'dokumen' => $dokumen]);

	}


	public function dokumen_store(Request $request)
	{

		DB::table('dokumen')->insert([

			'jenis_dokumen' => $request->jenis_dokumen,
			'ket' => $request->ket

		]);

		return redirect('/dokumen');
	}

	public function dokumen_edit($no_id)
	{

		$title = 'Edit Dokumen';

		$dokumen =	DB::table('dokumen')->where('no_id',$no_id)->get();

		return view('edit_dokumen',compact('title','dokumen'));


	}

	public function dokumen_update(Request $request)
	{

		DB::table('dokumen')->where('no_id',$request->no_id)->update([


			'jenis_dokumen' => $request->jenis_dokumen,
			'ket' => $request->ket

		]);

		return redirect('/dokumen');

	}

	public function dokumen_delete($no_id)
	{

		DB::table('dokumen')->where('no_id',$no_id)->delete();

		return redirect('/dokumen');

	}


	public function user()
	{	
		$user = DB::table('login')->orderBy('no_id','desc')->get();

		$title = 'Form User';
		return view('form_user',['title' => $title, 'user' => $user]);
	}


	public function user_store(Request $request)
	{
		DB::table('login')->insert([

			'username' => $request->username,
			'password' => $request->password,
			'level_user' => $request->level_user,
			'ket' => $request->ket


		]);

		return redirect('/user');

	}


	public function user_edit($no_id)
	{

		$title = 'Edit User';

		$user = DB::table('login')->where('no_id',$no_id)->get();
		
		return view('edit_user',compact('title','user'));


	}

	public function user_update(Request $request)
	{
		DB::table('login')->where('no_id',$request->no_id)->update([

			'password' => $request->password,
			'level_user' => $request->level_user,
			'ket' => $request->ket

		]);

		return redirect('/user');

	}


	public function user_delete($no_id)
	{

		DB::table('login')->where('no_id',$no_id)->delete();

		return redirect('/user');
	}



	public function file()
	{

		$title = 'Form File';

		$produsen = DB::table('produsen')->get();

		$dokumen = DB::table('dokumen')->get();

		$file = DB::table('master_file')->orderBy('no_id','desc')->get();

		return view('form_file',compact('title','produsen','dokumen','file'));
	}

	public function file_store(Request $request)
	{

		
		DB::table('master_file')->insert([

			'nama_produsen' => $request->nama_produsen,
			'nama_produk' => $request->nama_produk,
			'jenis_dokumen' => $request->jenis_dokumen,
			'tgl_upload' => $request->tgl_upload,
			'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
			'file' => $request->file->getClientOriginalName()

		]);

		

		$file = $request->file('file');
		$nama_file = $file->getClientOriginalName();
		$tujuan_upload = 'store_file';
		$file->move($tujuan_upload,$nama_file);

		/*$filename = time().'.'.$request->file->extension();

		$request->file->move(public_path('store_file'),$filename);*/
		
		
		return redirect('/file');

	}

	public function file_edit($no_id)
	{	

		$title = 'Edit File';

		$produsen = DB::table('produsen')->get();

		$dokumen = DB::table('dokumen')->get();

		$file = DB::table('master_file')->where('no_id',$no_id)->get();

		return view('edit_file',compact('title','file','produsen','dokumen'));

	}

	public function file_update(Request $request )
	{
		/*$gambar = DB::table('master_file')->where('no_id',$no_id)->first();

		File::delete('store_file/'.$gambar->file);*/

		//return $this->file_delete($no_id);
		
		DB::table('master_file')->where('no_id',$request->no_id)->update([

			'nama_produsen' => $request->nama_produsen,
			'nama_produk' => $request->nama_produk,
			'jenis_dokumen' => $request->jenis_dokumen,
			'tgl_upload' => $request->tgl_upload,
			'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
			'file' => $request->file->getClientOriginalName()

		]);




		$file = $request->file('file');
		$nama_file = $file->getClientOriginalName();
		$tujuan_upload = 'store_file';
		$file->move($tujuan_upload,$nama_file);

				
		return redirect('/file');



	}


	public function file_delete($no_id)
	{

		$gambar = DB::table('master_file')->where('no_id',$no_id)->first();

		File::delete('store_file/'.$gambar->file);

		DB::table('master_file')->where('no_id',$no_id)->delete();

		return redirect('/file');
		
	}



	public function download($no_id)
	{

	    $gambar = DB::table('master_file')->where('no_id', $no_id)->first();

	    $pathToFile = public_path('store_file/' . $gambar->file);

	    return response()->download($pathToFile);

	      
	}


	public function login()
	{

		$title = "DMS Login";

		return view('login_dms',compact('title'));

	}

	public function login_proses(Request $request)
	{

		

	}

	public function page_user()
	{

		$title = "User Page";

		$file = DB::table('master_file')->orderBy('no_id','desc')->get();

		$produsen = DB::table('produsen')->get();

		$dokumen = DB::table('dokumen')->get();

		return view('user_page',compact('title','file','produsen','dokumen'));
	}


}