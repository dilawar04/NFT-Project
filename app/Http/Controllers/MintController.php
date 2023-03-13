<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pre_sale;

class MintController extends Controller
{
    public function index(){
        $data['sale']="pre-sale";
        

        if(Pre_sale::where('id', 1)->exists()){
            $data['raw']=Pre_sale::find(1);
            $data['exists'] = true;
        } else {
            $data['exists'] = false;
        }
        return view ('scott/mint',compact('data'));
    }

    public function mintModal(){
        // echo"hello";
        
        $data['sale']="pre-sale";
        

        if(Pre_sale::where('id', 1)->exists()){
            $data['raw']=Pre_sale::find(1);
            $data['exists'] = true;
        } else {
            $data['exists'] = false;
        }

        return view('scott.components.mint_modal',compact('data'));
        
    }
    public function preSale(){
        // echo"hello";
        
        $data['sale']="pre-sale";
        

        if(Pre_sale::where('id', 1)->exists()){
            $data['raw']=Pre_sale::find(1);
            $data['exists'] = true;
        } else {
            $data['exists'] = false;
        }

        return view('scott.components.mint_modal',compact('data'));
        
    }
    public function publicSale(){
        // echo"hello";
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://testnets-api.opensea.io/api/v1/assets?order_by=sale_price&order_direction=desc&offset=0&limit=50&include_orders=true');
        $data=json_decode($response->getBody());
        $data=$data->assets;
        
        // echo"<pre>";
        // print_r($data);
        // echo"</pre>";
        // $orderBY = array();
        
        // $data['sale']="pre-sale";
        

        // if(Pre_sale::where('id', 1)->exists()){
        //     $data['raw']=Pre_sale::find(1);
        //     $data['exists'] = true;
        // } else {
        //     $data['exists'] = false;
        // }

        return view('scott/public_sale',compact('data'));
        
    }
}
