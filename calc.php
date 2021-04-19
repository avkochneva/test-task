<?php

if (isset($_POST["summadd"]) && isset($_POST["summadd"]) ) { 

    if($_POST['choice']=='no'){

        $result = array(
            'date' => $_POST['date'],
            'years' => $_POST['years'],
            'summ' => $_POST['summ'],
            // 'summn',
            // 'summadd' => $_POST["summadd"]
            'sum' =>  $_POST['summ']+$_POST['summ']*$_POST['years']*(0.1/365)
            
        );

    }
    else{
        $result = array(
            'date' => $_POST['date'],
            'years' => $_POST['years'],
            'summ' => $_POST['summ'],
            // 'summn',
            // 'summadd' => $_POST["summadd"]
            'sum' =>  $_POST['summ']+($_POST['summ']+$_POST["summadd"])*$_POST['years']*(0.1/365)
            
        );

    }
	// Формируем массив для JSON ответа
     


    
    // Переводим массив в JSON
    echo json_encode($result); 
}

?>