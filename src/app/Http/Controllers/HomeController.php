<?php

namespace App\Http\Controllers;

use TCPDF;

class HomeController extends Controller
{
    public function index()
    {
        $tcpdf = new TCPDF;
        $tcpdf->AddPage();
        $tcpdf->SetFont("ipaexm", "", 10);
        $html = file_get_contents(public_path() . '/html/template.html');
        $tcpdf->writeHTML($html);
        $tcpdf->Output("output.pdf");
    }
}
