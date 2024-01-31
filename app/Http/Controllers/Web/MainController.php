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
        $exploded = explode("-", $r['pages']);
        switch ($exploded[0]) {
            case 'company':
                $pages = "company." . $r['pages'];
                break;
            case 'insight':
                $pages = "insight." . $r['pages'];
                break;
            case 'market':
                $pages = "market." . $r['pages'];
                break;
            default:
                $pages = $r["pages"];
                break;
        }
        array_push($compact, "pages");
        return view("pages.public." . $pages, compact($compact));
    }
}
