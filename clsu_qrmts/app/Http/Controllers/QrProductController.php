<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Product;

class QrProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('qrproducts', ['products' => $products]);
    }

    public function generateQrCode($id)
    {
        $product = Product::find($id);
        $qr = QrCode::size(500)->generate(route('products.show', $id));
        return view('qr', ['product' => $product, 'qr' => $qr]);
    }
}