<?php

namespace App\Http\Controllers\Web3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;

class PinataController extends Controller
{
    public function mint_index()
    {
        return view('mint');
    }

    public function pinata_communicating()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.pinata.cloud/data/testAuthentication',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'pinata_api_key: 6d4fdb3642f869a4a88f',
            'pinata_secret_api_key: 7acf04069fa2b22cbb59ba10aa12de48e7ea9a54dc1b4024f3c1772add6c51d4'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
    }

    public function ipfshash()
    {

        // $ch = curl_init('http://example.com/upload.php');
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, ['file' => $txt_curlfile]);
        // curl_exec($ch);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pinata.cloud/pinning/pinFileToIPFS',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        $txt_curlfile = new \CURLFile('images/ipfs.jpg', 'images/ipfs.jpg', 'images/ipfs.jpg'),
        // print_r($txt_curlfile),
        // exit,
        CURLOPT_POSTFIELDS => array('file'=> $txt_curlfile),
        CURLOPT_HTTPHEADER => array(
            'pinata_api_key: 6d4fdb3642f869a4a88f',
            'pinata_secret_api_key: 7acf04069fa2b22cbb59ba10aa12de48e7ea9a54dc1b4024f3c1772add6c51d4'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}
