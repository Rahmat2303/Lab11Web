<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function article()
    {
        return view('article', [
            'title' => 'Halaman Artikel',
            'content' => 'Ini halaman Artikel'
        ]);
    }

    public function about() 
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi 
            halaman ini.'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Contact',
            'content' => 'Ini adalah halaman kontak.'
        ]);
    }

    public function faqs()
    {
        echo "Ini halaman FAQ";
    }

    public function tos()
    {
        echo "ini halaman Term of Services";
    }
}
