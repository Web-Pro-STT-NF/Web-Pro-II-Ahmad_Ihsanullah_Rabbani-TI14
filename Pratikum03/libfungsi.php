<?php
//merhod presentase nilai akhir
function persentase(  $_uts,  $_uas,  $_tugas){
    $result = (30 * (int)$_uts / 100) + (35 * (int)$_uas / 100) + (35 *  (int)$_tugas / 100);
    return $result;
}

//method nilai kelulusan
function lulus(int $nilai){
    if ($nilai > 55){
    return "LULUS";
    } else {
        "TIDAK LULUS";
    }
}

//method grade nilai 
function grade( $_nilai){
    if ($_nilai > 85){
        return "A";
    }elseif ($_nilai > 70){
        return "B";
    }elseif($_nilai > 56){
        return "C";        
    }elseif ($_nilai > 36){
        return "D";
    }elseif ($_nilai > 0){
        return "E";        
    }else{
        return "I";
    }
}

//method predikat nilai
function predikat($predikat){
    switch($predikat){
        case "A":
            return "Sangat Memuaskan";
            break;
        case "B":
            return "Memuaskan";
            break;
        case "C":
            return "Cukup Memuaskan";
            break;
        case "D":
            return "Kurang Memuaskan";
            break;
        case "E":
            return "Sangat Kurang";
            break;
        default:
            return "undefined case";
    }
}