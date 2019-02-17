<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<div class="container">
    <h1 style="text-align:center;">請求書</h1>
    <div class="row">
        @include('parts-destination')
        @include('parts-ourcompany')
    </div>
    <div class="row">
        <div>
            下記のとおり御請求申し上げます。
        </div>
        <div style="text-align:right;">
            単位: 円
        </div>
    </div>
    <style>
        table {
            border: 1px solid black;
            border-collapse:collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid black;
        }
    </style>
    <table>
        <tr>
            <th>項目A</th>
            <th>項目B</th>
            <th>項目C</th>
            <th>項目D</th>
        </tr>
        <tr>
            <td>こんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちはこんにちは</td>
            <td>B-1</td>
            <td>C-1</td>
            <td>D-1</td>
        </tr>
        <tr>
            <td>テスト</td>
            <td>B-2</td>
            <td>C-2</td>
            <td>D-2</td>
        </tr>
        <tr>
            <td>春夏秋冬</td>
            <td>B-3</td>
            <td>C-3</td>
            <td>D-3</td>
        </tr>
        <tr>
            <td>A-4</td>
            <td>B-4</td>
            <td>C-4</td>
            <td>D-4</td>
        </tr>
        <tr>
            <td>A-5</td>
            <td>B-5</td>
            <td>C-5</td>
            <td>D-5</td>
        </tr>
        <tr>
            <td>A-6</td>
            <td>B-6</td>
            <td>C-6</td>
            <td>D-6</td>
        </tr>
        <tr>
            <td>A-7</td>
            <td>B-7</td>
            <td>C-7</td>
            <td>D-7</td>
        </tr>
    </table>


</div>
</body>
</html>
