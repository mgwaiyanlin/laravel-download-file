<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function generatePDF()
    {
        $data = Item::get();

        $pdf = Pdf::loadView('invoice', $data->toArray());
        return $pdf->download('invoice.pdf');
    }
}
