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

    public function novedades(Request $request)
    {
        $page = isset($request->page) ? $request->page : 1;
        $news = News::where('type', 'Noticia')
            ->where('language', session('lang'))
            ->orderBy('created_at','desc')
            ->limit(5)->offset(($page-1)*5)->get();
        $count = News::where('type', 'Noticia')
            ->where('language', session('lang'))
            ->orderBy('created_at','desc')->count();
        $eventos = News::where('type', 'Evento')
            ->where('language', session('lang'))
            ->orderBy('id','desc')->get();
        return view('novedades', compact('news', 'eventos', 'page', 'count'));
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
                ->where('language', session('lang'))
                ->where('type','!=','Evento')
                ->orderBy('created_at', 'desc')->get()->first();
        } catch (\Exception $e){
            Redirect::back();
        }
        $eventos = News::where('type', 'Evento')
            ->where('language', session('lang'))
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
