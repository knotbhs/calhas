<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnviarMensagemController extends Controller
{

 
    public function isMobile() {
        $is_mobile = false;
 
        if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
            $is_mobile = false;
        } elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
            
                $is_mobile = true;
        } else {
            $is_mobile = false;
        }
 
        return $is_mobile;
    }

    public function enviar(Request $request)
    {
        
        
        $ddi = $request->ddi;
        $ddd = $request->ddd;
        $tel = $request->tel;
        $msg = $request->msg;
        $numeroMontado = preg_replace('/[^0-9]/', '', $ddi.$ddd.$tel);
        if($this->isMobile()){
            return redirect()->to("https://api.whatsapp.com/send?phone=+".$numeroMontado."&text=".$msg);
        }else{
            return redirect()->to("https://web.whatsapp.com/send?phone=+".$numeroMontado."&text=".$msg);
        }

    }
    public function index()
    {
        if($this->isMobile())
        {
            $target = "_self";
        }else{            
            $target = "_blank";
        }
        return view('content', ["target" => $target]);
    }
}
