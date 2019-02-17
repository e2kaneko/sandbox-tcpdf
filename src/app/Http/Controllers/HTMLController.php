<?php

namespace App\Http\Controllers;

use TCPDF;

class HTMLController extends Controller
{
    public function index()
    {
        $tcpdf = new TCPDF;

        $tcpdf->AddPage();
        $tcpdf->SetFont("ipaexm", "", 10);
        $html = file_get_contents(public_path() . '/html/template-page1.html');
        $tcpdf->writeHTML($html);

        $tcpdf->AddPage();
        $tcpdf->SetFont("ipaexm", "", 10);
        $html = file_get_contents(public_path() . '/html/template-page2.html');
        $tcpdf->writeHTML($html);

        $tcpdf->Output("output.pdf");
    }
}
