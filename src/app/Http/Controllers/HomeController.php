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
        $html = <<<HTML
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <div class="container">
      <h1 style="text-align:center;">請求書</h1>
      <div class="row">
        <div class="col-md-7 col-xs-7">
          <h2 id="name">株式会社サンプル御中</h2>
          〒<span id="zip">999-9999</span><br/>
          <span id="address1">東京都●●区●●●●9-9-9</span><br/>
          <span id="address2">●●●●1F</span><br/>
          TEL:<span id="tel">03-1234-5678</span><br/>
          FAX:<span id="fax">00-0000-0000</span>
        </div>
        <div class="col-md-5 col-xs-5" style="text-align:right;">
          <h3>株式会社イーツー・インフォ</h3>
          〒220-0022<br/>
          神奈川県横浜市西区花咲町6-145<br/>
          横浜花咲ビル9F<br/>
          TEL: 045-620-5788<br/>
          FAX: 045-620-5789<br/>
        </div>
      </div>
      <div style="margin-top:2em;"></div>
      <div class="row">
        <div class="col-md-8 col-xs-8">
          下記のとおり御請求申し上げます。
        </div>
        <div class="col-md-4 col-xs-4" style="text-align:right;">
          単位: 円
        </div>
      </div>

<style>
table{
border:1px solid black;width:100%;
}
td,th{
border:1px solid black;
}
</style>
<table>
  <tr><th>項目A</th><th>項目B</th><th>項目C</th><th>項目D</th></tr>
  <tr><td>こんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちは</td><td>B-1</td><td>C-1</td><td>D-1</td></tr>
  <tr><td>テスト</td><td>B-2</td><td>C-2</td><td>D-2</td></tr>
  <tr><td>春夏秋冬</td><td>B-3</td><td>C-3</td><td>D-3</td></tr>
  <tr><td>A-4</td><td>B-4</td><td>C-4</td><td>D-4</td></tr>
  <tr><td>A-4</td><td>B-4</td><td>C-4</td><td>D-4</td></tr>
  <tr><td>A-4</td><td>B-4</td><td>C-4</td><td>D-4</td></tr>
  <tr><td>A-4</td><td>B-4</td><td>C-4</td><td>D-4</td></tr>
  <tr><td>A-4</td><td>B-4</td><td>C-4</td><td>D-4</td></tr>
  <tr><td>A-4</td><td>B-4</td><td>C-4</td><td>D-4</td></tr>
  <tr><td>A-4</td><td>B-4</td><td>C-4</td><td>D-4</td></tr>
</table>

    </div>
  </body>
</html>
HTML;

        $tcpdf->writeHTML($html);
        $tcpdf->Output("output.pdf");
    }
}