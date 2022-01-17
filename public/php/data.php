<?php


// if(isset($_REQUEST['data'])){
//     $data = $_REQUEST['data'];
// }

if(isset($_POST['data'])){
    $arr = json_decode(stripslashes($_POST['data']),true);
    $arwah=array();
    
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
            $dum_arwah['arwah_address']=$arwah_address;
            $dum_arwah['arwah_name']=$arwah_name;
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
    echo $arr;
}
?>