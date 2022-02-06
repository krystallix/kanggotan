<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NyadranController extends Controller
{
    public function index()
    {
        return view('nyadran');        
    }
    
    public function AjaxRequest()
    {
        if(isset($_POST['data'], $_POST['token'])){
            $arr = json_decode(stripslashes($_POST['data']),true);
            $arwah=array();
            $token = $_POST['token'];
            $arwah_type="";
            $arwah_name="";
            $arwah_address="";
            for($i=0;$i<count($arr);$i++){
                if($arr[$i]['name']=="name"){
                    $arr_final_json['name']=$arr[$i]['value'];
                    continue;
                } 
                if($arr[$i]['name']=="phone"){
                    $arr_final_json['phone']=$arr[$i]['value'];
                    continue;
                }     
                if($arr[$i]['name']=="address"){
                    $arr_final_json['address']=$arr[$i]['value'];
                    continue;
                }   
                if($arr[$i]['name']=="arwah_type[]"){
                    $arwah_type=$arr[$i]['value'];
                }
                
                if($arr[$i]['name']=="arwah_name[]"){
                    $arwah_name=$arr[$i]['value'];
                }
                
                if($arr[$i]['name']=="arwah_address[]"){
                    $arwah_address=$arr[$i]['value'];
                }
                
                if($arwah_type!="" && $arwah_name!="" && $arwah_address!==""){
                    $dum_arwah['arwah_name']=$arwah_name;
                    $dum_arwah['arwah_address']=$arwah_address;
                    $dum_arwah['arwah_type']=$arwah_type;
                    $arwah[]=$dum_arwah;
                    $arwah_name="";
                    $arwah_type="";
                    $arwah_address="";
                }
            }
            
            $arr_final_json['data']=$arwah;
            $arr_fin['data']=$arr_final_json;
            $arr_final_json=$arr_fin;
            $arr = json_encode($arr_final_json,true);
            // echo $arr;

            // $arr = '{"data":{"name":"asdfsdf","phonesf":"083423410","address":"Ketonggo","data":[{"arwah_name":"Aji","arwah_address":"Kanggotan","arwah_type":"Saudara"},{"arwah_name":"Sopo","arwah_address":"Arab","arwah_type":"Saudara"}]}}';
            
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://103.179.56.179/api/nyadran/store',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $arr,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer ' .$token
                )
                ));
                $response = curl_exec($curl);
                
                curl_close($curl);
                echo $response;
                
                
            }
        }

        public function nyadran2022()
        {
            return view('nyadran2022');        
        }
        
    }