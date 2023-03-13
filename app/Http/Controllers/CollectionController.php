<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(Request $request,$by=NULL){
        
        
        //require_once('vendor/autoload.php');
        
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://testnets-api.opensea.io/api/v1/assets?order_by=sale_price&order_direction=desc&offset=0&limit=50&include_orders=true');
        $data=json_decode($response->getBody());
        $data=$data->assets;
        // echo"<pre>";
        
        // print_r($data);
        // echo"</pre>";
        $orderBY = array();
        if(!empty($by)){
            if($by=='byid'){
                $orderBY=array_column($data, 'id');
                array_multisort($orderBY, SORT_ASC, $data);
            }elseif($by=='recent'){
                $orderBY=array_column($data, 'id');
                array_multisort($orderBY, SORT_DESC, $data);
            }elseif($by=='price_desc'){
                $orderBY=array_column($data, 'id');
                array_multisort($orderBY, SORT_DESC, $data);
            }elseif($by=='price_asc'){
                $orderBY=array_column($data, 'id');
                array_multisort($orderBY, SORT_ASC, $data);
            }elseif($by=='rarity'){
                foreach ($data as $key => $row)
                {
                    
                    
                    if(is_array($row->rarity_data)){
                        $orderBY[$key] = $row->rarity_data['rank'];
                        // echo"hello <br/>";
                    }
                    
                }
                // array_multisort($rank, SORT_ASC, $data);
            }
        }else{
            
            
            // $data['collections']=$obj->assets;
            // $data['next']
            // $rank=array_column($data->assets, 'rarity_data');
            
            foreach ($data as $key => $row)
            {
                
                
                if(is_array($row->rarity_data)){
                    $orderBY[$key] = $row->rarity_data['rank'];
                    // echo"hello <br/>";
                }
                
            }
            // array_multisort($rank, SORT_ASC, $data);
        }

        
        // echo"<pre>";
        // print_r($orderBY);
        //     echo"</pre>";
        // $rank=array_column($rank, 'rank');
        // array_multisort($rank, SORT_ASC, $data);
        // echo"<pre>";
        
        // print_r($data);
        // echo"</pre>";

        return view('scott/collections',compact('data'));
    }
    
}
