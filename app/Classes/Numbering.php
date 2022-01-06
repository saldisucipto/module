<?php

namespace App\Classes;

//  CSTMR21ABC00001

class Numbering
{
    public function createNumbering(String $data_terakhir, String $alias_trsansaksi, String $alias_code)
    {
        //  Convert Code Data To Numeric Value
        $tahunIni = date('y');
        $numeric_code = substr($data_terakhir, 10, 5);
        $incrementingCode = str_pad(++$numeric_code, 5, '0', STR_PAD_LEFT);
        $remove_PT = str_replace('PT. ', '', $alias_code);
        $finalAlias = substr($remove_PT, 0, 3);
        $finalCode = $alias_trsansaksi . $tahunIni . strtoupper($finalAlias) . $incrementingCode;
        return $finalCode;
    }
}
