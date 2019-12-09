<?php

// 名前空間：クラスを階層的に整理するための仕組み
namespace App\Http\Controllers;

// use文：クラスのインポート
use Illuminate\Http\Request;

// クラスの定義：○○Controllerという命名にすると分かり易いためそれで統一
class HelloController extends Controller
{
    public function index($id='no name')
    {
        return <<<EOF
    
    <html>
    <head>
    
    </head>
    <body>
        <h1>controller</h1>
        <li>{$id}</li>
    </body>
    </html>

EOF;
    }
}