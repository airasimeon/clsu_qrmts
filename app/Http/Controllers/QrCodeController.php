<?php

namespace App\Http\Controllers;

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function generateQrCode(Request $request)
    {
        $code = $request->input('code');

        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );

        $writer = new Writer($renderer);
        $writer->writeFile($code, public_path('qrcodes/' . $code . '.png'));

        return response()->download(public_path('qrcodes/' . $code . '.png'));
    }
}