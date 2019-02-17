<?php

namespace App\Http\Controllers;

use TCPDF;

class BladeController extends Controller
{
    public function index()
    {
        $tcpdf = new TCPDF;

        $tcpdf->AddPage();
        $tcpdf->SetFont("ipaexm", "", 10);
        $html = view('template-page1')->with('company_name', '株式会社サンプル')->render();
        $tcpdf->writeHTML($html);

        $tcpdf->AddPage();
        $tcpdf->SetFont("ipaexm", "", 10);
        $html = view('template-page2')->render();
        $tcpdf->writeHTML($html);

        $tcpdf->Output("output.pdf");


    }
}
