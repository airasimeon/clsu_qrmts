<?php

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

// Load the Laravel application
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Get all products from the database
$products = DB::table('products')->get();

// Loop through each product and generate a QR code
foreach ($products as $product) {
    // Generate the QR code image
    $renderer = new ImageRenderer(
        new RendererStyle(400),
        new ImagickImageBackEnd()
    );

    $writer = new Writer($renderer);
    $writer->writeFile($product->id, public_path('qrcodes/' . $product->id . '.png'));

    // Update the product with the QR code file name
    DB::table('products')
        ->where('id', $product->id)
        ->update(['qrcode' => $product->id . '.png']);
}

echo 'QR codes generated for all products!';