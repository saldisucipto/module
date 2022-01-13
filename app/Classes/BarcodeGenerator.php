<?php

namespace App\Classes;

class BarcodeGenerator
{
    public function createBarcode(String $qrCodeName, String $qrCodeValue, String $qrCodePath)
    {
        \QrCode::size(500)->format('png')
            ->generate($qrCodeValue, public_path($qrCodePath . '/' . $qrCodeName . '.png'));
        return $qrCodeName;
    }
}
