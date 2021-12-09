<?php 
function catChuoi($chuoi){
if(strlen($chuoi)>30){
    $chuoi = substr($chuoi,0,30)."...";
}
return $chuoi;
}
//Cắt số
function catSo($so){
    if(strlen($so) > 10){
        $so = substr($so,0,7)."...";
    }
    return $so;
}
?>