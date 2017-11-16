<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Http\Request;
use Mail;

class EmailsController extends Controller
{
    public function contacto(Request $request)
    {
        Mail::send('mails.contacto', $request->all(), function ($m){
            $m->from('Coffeeta@clientship.com', 'Mensaje de contacto recibido');

            $m->to(env('MAIL_COMPANY'), env('MAIL_COMPANY_NAME'))->subject('Mensaje de contacto recibido');
        });
        Session::flash('message', 'Mensaje enviado correctamente!!');
        return Redirect::back();
    }

    public function news(Request $request)
    {
        Mail::send('mails.news', $request->all(), function ($m){
            $m->from('Coffeeta@clientship.com', 'Suscripcion recibida');

            $m->to(env('MAIL_COMPANY'), env('MAIL_COMPANY_NAME'))->subject('Suscripcion recibida');
        });
        Session::flash('message', 'Suscripcion enviada correctamente!!');
        return Redirect::back();
    }

    public function cv(Request $request)
    {
        Mail::send('mails.cv', $request->all(), function ($m){
            $m->from('Coffeeta@clientship.com', 'Cv recibido');

            $m->to(env('MAIL_COMPANY'), env('MAIL_COMPANY_NAME'))->subject('Cv recibido');
        });
        Session::flash('message', 'Cv enviado correctamente!!');
        return Redirect::back();
    }
}
