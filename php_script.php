<?php
$conn = new mysqli("localhost", "root", "", "HACATOON");

if (isset($_POST["NAME_TASK"]) && isset($_POST["CEL_TASK"]) && isset($_POST["TIME_TASK"]) && isset($_POST["NUMBERS_TASK"])) {
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $NAME_TASK = $conn->real_escape_string($_POST["NAME_TASK"]);
    $CEL_TASK = $conn->real_escape_string($_POST["CEL_TASK"]);
    $TIME_TASK = $conn->real_escape_string($_POST["TIME_TASK"]);
    $NUMBERS_TASK = $conn->real_escape_string($_POST["NUMBERS_TASK"]);

    $sql = "INSERT INTO TASK (name_task,cel_task,time_task,numbers_task) VALUES ('$NAME_TASK', '$CEL_TASK','$TIME_TASK','$NUMBERS_TASK')";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    

    $conn->close();
}

if(isset($_POST["deadline"])){
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }

    $DEADLINE = $conn->real_escape_string($_POST["DEADLINE"]);


    $conn->close();
}


?>