<?php

namespace App\Http\Controllers;

use App\Models\Qr;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function link(Qr $qr)
    {
        $url = $qr->data['link'];
        return view('pages.link', compact('url'));
    }
}
