<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page2)
    {
        if (view()->exists("pdf.{$page2}")) {
            return view("pdf.{$page2}");
        }
        return abort(404);
    } 
}
