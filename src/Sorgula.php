<?php

namespace Sorgula;

use SoapClient;

class Sorgula {

    public $base_url = "https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL";
    public $sonuc;

    public function tc_sorgula($tc_no, $ad, $soyad, $dogum_yil)
    {
        $client = new SoapClient($this->base_url);
        $result = $client->TCKimlikNoDogrula([
            'TCKimlikNo' => floatval($tc_no),
            'Ad' => $this->tr_strtoupper($ad),
            'Soyad' => $this->tr_strtoupper($soyad),
            'DogumYili' => intval($dogum_yil)
        ]);

        if ($result->TCKimlikNoDogrulaResult) {
            $this->sonuc = 1;
        } else {
            $this->sonuc = 0;
        }

        return $this->sonuc;
    }


    public function tr_strtoupper($text)
    {
        $search = array("ç", "i", "ı", "ğ", "ö", "ş", "ü");
        $replace = array("Ç", "İ", "I", "Ğ", "Ö", "Ş", "Ü");
        $text = str_replace($search, $replace, $text);
        $text = strtoupper($text);
        return $text;
    }
}