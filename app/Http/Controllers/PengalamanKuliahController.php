<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanKuliahController extends Controller
{
    //
    public function pengalaman(){
        
        return view('pengalaman')
            ->with('sfull_name', 'Syahla Syafiqah Fayra')
            ->with('sname', 'Syahla')
            ->with('spengalaman', '"Hidup adalah perjalanan, maka kita perlu jalan-jalan untuk hidup"')
            ->with('rfull_name', 'Rr. Denti Nurramadhona')
            ->with('rname', 'Denti')
            ->with('rpengalaman', '"Kuliah sangat menyenangkan, apalagi jika ips kurang 0.5 ke sempurna :)"')
            ->with('zfull_name', 'Zahra Annisa Wahono')
            ->with('zname', 'Zahra')
            ->with('zpengalaman', '"Di era teknologi yang semakin maju ini, dunia IT semakin luas yang membuat seorang Zahra bingung mau ngapain"')
            ;
    }
}
