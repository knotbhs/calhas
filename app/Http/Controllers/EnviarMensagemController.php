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

        $servicos = [];

        $servicos[0]["img"] = asset('images/Portfolio02.png');
        $servicos[0]["thumb_title"] = 'Calha Moldura Tipo 01';
        $servicos[0]["thumb_caption"] = 'Calhas';
        $servicos[0]["text_title_button"] = 'Conversar via Whatsapp';
        $servicos[0]["text_link"] = route("welcome");
        $servicos[0]["text_description"] = 'Calha moldura, eficaz na quebra de força na queda de agua, evitando que respingue agua para os lados.';



        return view('content', ["target" => $target, "servicos" => $servicos]);
    }
}
