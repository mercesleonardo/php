<?php


function dia($data) {
    
    if(date('N', strtotime($data)) == 1) {
        return 'Segunda-Feira';
    } else if(date('N', strtotime($data)) == 2) {
        return 'Terça-Feira';
    } else if(date('N', strtotime($data)) == 3) {
        return 'Quarta-Feira';
    } else if(date('N', strtotime($data)) == 4) {
        return 'Quinta-Feira';
    } else if(date('N', strtotime($data)) == 5) {
        return 'Sexta-Feira';
    } else if(date('N', strtotime($data)) == 6) {
        return 'Sábado';
    } else  {
        return 'Domingo';
    }
        
}

echo dia('2022-09-28');
