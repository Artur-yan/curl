<?php

namespace src;

class Curl
{
    public function getData()
    {
        $curl = curl_init('http://numbersapi.com/09/27');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-type: application/json']);
        return curl_exec($curl);

    }
}