<?php

namespace App\Classes;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BarcodeGenerator
{
    public function createBarcode(String $qrCodeName, String $qrCodeValue, String $qrCodePath)
    {
        $qrname = $qrCodeName .'-'.time().'.png';
        QrCode::size(500)->format('png')
            ->generate($qrCodeValue, public_path($qrCodePath.'/' .'qrcode' . '/' .$qrname));
        return $qrCodeName;
    }
}
