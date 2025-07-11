<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = [
            [
                'link' => url('/'),
                'lastmod' => now()->toAtomString()
            ],
            [
                'link' => url('/aliaga-emlak'),
                'lastmod' => now()->toAtomString()
            ],
            [
                'link' => url('/bergama-emlak'),
                'lastmod' => now()->toAtomString()
            ],
            [
                'link' => url('/danismanlar'),
                'lastmod' => now()->toAtomString()
            ],
            [
                'link' => url('/hakkimizda'),
                'lastmod' => now()->toAtomString()
            ],
            [
                'link' => url('/subeler'),
                'lastmod' => now()->toAtomString()
            ],
        ];

        return response()->view('sitemap', compact('pages'))->header('Content-Type', 'text/xml');
    }
}
