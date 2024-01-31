<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show_page(Request $r)
    {
        $compact = [];

        switch ($r["pages"]) {
            case 'dashboard':
                array_push($compact, 'r');
                break;
            default:
                array_push($compact, 'r');
                break;
        }
        $pages =  $r['pages'];
        array_push($compact, "pages");
        return view("pages.public." . $pages, compact($compact));
    }
}
