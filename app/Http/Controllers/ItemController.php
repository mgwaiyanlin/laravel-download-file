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

        $itemData = [
            'items' => $data,
        ];

        // $data->toArray();
        // dd($data);
        $pdf = Pdf::loadView('invoice', $itemData);
        return $pdf->download('invoice.pdf');
    }

    public function view() {
        $items = Item::all();

        return view('invoice', [
            'items' => $items
        ]);
    }

}
