<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\News;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function marketing()
    {
        return view('marketing');
    }

    public function comunicacion()
    {
        return view('comunicacion');
    }

    public function traduccion()
    {
        return view('traduccion');
    }

    public function novedades()
    {
        $news = News::where('type', 'Noticia')
            ->orderBy('created_at','desc')->get();
        $eventos = News::where('type', 'Evento')
            ->orderBy('id','desc')->get();
        return view('novedades', compact('news', 'eventos'));
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function noticia($id)
    {
        try{
            $new = News::find($id);
            $new2 = News::where('created_at','<',$new->created_at)
                ->where('type','!=','Evento')->get()->first();
        } catch (\Exception $e){
            Redirect::back();
        }
        $eventos = News::where('type', 'Evento')
            ->orderBy('id','desc')->get();
        return view('noticia', compact('new', 'eventos', 'new2'));
    }

    public function casos()
    {
        return view('casos');
    }

    public function caso()
    {
        return view('casos.caso');
    }

    public function home()
    {
        return view('home');
    }

}
