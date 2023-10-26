<?php
$conn = new mysqli('localhost', 'root', '', 'HACATOON');
if($conn->connect_error){
    die('Ошибка: ' . $conn->connect_error);
}
    $sql = 'SELECT * FROM TASK';
    $id_task = 'SELECT id_task FROM TASK';
    $result = $conn->query($sql);
    $result_id = $conn->query($id_task);
    foreach($result  as $row){
            echo
            '<div class="t3" >'
            .'<h7>'
            .$row['name_task']
            .'</h7>'
            .  '<div> '
            . $row['cel_task'] 
            .'<div class="date"> Установите сроки выполнения задачи <div> Дата '
            .$row['data_task']
            .'   Время '
            .$row['time_task']
            .' <div>Количество участников '
            .$row['numbers_task']
            .'<div> Приоритет '
            .$row['priority_task'] 
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>';    
    }
?> 