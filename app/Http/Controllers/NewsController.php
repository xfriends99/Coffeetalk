<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Request;
use Session;
use Auth;
use App\Helpers\Helper;

class NewsController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */


	public function listNews($id = null)
	{

	if($id==null){

		if(Auth::user()->roles_id==1){

			$news = \App\News::where('is_active','=','1')->get();

		}else{

			$news = \App\News::where('users_id','=',Auth::user()->id)->where('is_active','=','1')->get();

		}

		return view('news.list')->with('news',$news);

	}else{

		 $news = \App\News::find($id);

		 return view('news.edit')->with('news',$news);


		}

	}

	public function getAddNew()
	{	

		return view('news.add');
		
	}

	public function postAddNew()
	{	
        if(Input::get('type')=='Evento'){
            $rules = array(
                'title' => 'required|max:140',
                'date'  => 'required',
                'lugar'  => 'required',
            );
            $messages = array(
                'date.required'  => 'La fecha y hora es requerida',
                'lugar.required'  => 'El lugar es requerido',
            );
        } else {
            $rules = array(
                'title' => 'required|max:140',
                'volanta' => 'required',
                'copete' => 'required',
            );

            $messages = array();

        }

		$validator = Validator::make(Input::all(), $rules, $messages);

		if ($validator->fails()) {
			return Redirect::to('addNew')
			->withErrors($validator);
		} else {

		$news = new \App\News;
        $news->type = Input::get('type');
        if (Request::hasFile('small_pic')){
            $imageName = Request::file('small_pic')->getClientOriginalName();
            Request::file('small_pic')->move('publicaciones', $imageName);
            $news->small_pic = $imageName;
        }
        if (Request::hasFile('big_pic')){
            $imageName = Request::file('big_pic')->getClientOriginalName();
            Request::file('big_pic')->move('publicaciones', $imageName);
            $news->big_pic = $imageName;
        }

		$news->title = Input::get('title');
        $news->users_id = \Auth::user()->id;

        if(Input::get('type')=='Evento'){
            $news->date = Input::get('date');
            $news->place = Input::get('lugar');
        } else {
            $news->category = Input::get('category');
            $news->volanta = Input::get('volanta');
            $news->copete = Input::get('copete');
            $news->bajada = Input::get('bajada');
        }

        if(Auth::user()->roles_id==1){
			$news->is_approved = 1;
		}else{
			$news->is_approved = 0;
		}
        if($news->save()){
            Session::flash('message', 'Publicación creada correctamente!!');
            return Redirect::to('addNew');
        }


		}
		
	}

	public function postEditNew()
	{
        if(Input::get('type')=='Evento'){
            $rules = array(
                'title' => 'required|max:140',
                'date'  => 'required',
                'lugar'  => 'required',
            );
            $messages = array(
                'date.required'  => 'La fecha y hora es requerida',
                'lugar.required'  => 'El lugar es requerido',
            );
        } else {
            $rules = array(
                'title' => 'required|max:140',
                'volanta' => 'required',
                'copete' => 'required',
            );

            $messages = array();

        }

        $validator = Validator::make(Input::all(), $rules, $messages);
		
		$id = Input::get('id');
		
		if ($validator->fails()) {
			return Redirect::to('news/'.$id)
			->withErrors($validator);
		} else {


        $news = \App\News::find($id);
        $news->type = Input::get('type');
        if (Request::hasFile('small_pic')){
            $imageName = Request::file('small_pic')->getClientOriginalName();
            Request::file('small_pic')->move('publicaciones', $imageName);
            $news->small_pic = $imageName;
        }
        if (Request::hasFile('big_pic')){
            $imageName = Request::file('big_pic')->getClientOriginalName();
            Request::file('big_pic')->move('publicaciones', $imageName);
            $news->big_pic = $imageName;
        }

        $news->title = Input::get('title');
        $news->users_id = \Auth::user()->id;

        if(Input::get('type')=='Evento'){
            $news->date = Input::get('date');
            $news->place = Input::get('lugar');
        } else {
            $news->category = Input::get('category');
            $news->volanta = Input::get('volanta');
            $news->copete = Input::get('copete');
            $news->bajada = Input::get('bajada');
        }

		if(Auth::user()->roles_id==1){
			$news->is_approved = 1;
		}else{
			$news->is_approved = 0;
		}
			
        if($news->save()){
            Session::flash('message', 'Publicación actualizada correctamente!!');
            return Redirect::to('news/'.$id);
        }

		}
	}




public function deleteNew( $id = null )
	{

		$news = \App\News::find($id);
				
		if($news!=null){

				$news->is_active = 0;			
				if($news->save()) {
					Session::flash('message', 'Publicación eliminada correctamente!!');
					return Redirect::to('news/');
				}
			}else{
				return view('home');
			}

	}

public function approveNew( $id = null )
	{

		$news = \App\News::find($id);
				
		if($news!=null){

				$news->is_approved = 1;			
				if($news->save()) {
					Session::flash('message', 'Publicación aprobada correctamente!!');
					return Redirect::to('news/');
				}
			}else{
				return view('home');
			}

	}



}
