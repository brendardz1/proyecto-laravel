<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use mikehaertl\wkhtmlto\Pdf;

class pdfController extends Controller
{
    public function preview()
    {
        return view('chart');
    }
  
    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function download()
    {
        $render = view('chart')->render();
  
        $pdf = new Pdf;
        $pdf->addPage($render);
        $pdf->setOptions(['javascript-delay' => 5000]);
        $success= $pdf->saveAs(storage_path('pdf/report.pdf'));
        if(!$success){
            echo $pdf->getError();exit;
        }

       
   
        return response()->download(storage_path('pdf/report.pdf'));
    }
}

