<?php
$conn = new mysqli("localhost", "root", "", "HACATOON");

if (isset($_POST["PRIORITY_TASK"]) && isset($_POST["DATE_TASK"]) && isset($_POST["NAME_TASK"]) && isset($_POST["CEL_TASK"]) && isset($_POST["TIME_TASK"]) && isset($_POST["NUMBERS_TASK"])) {
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $NAME_TASK = $conn->real_escape_string($_POST["NAME_TASK"]);
    $CEL_TASK = $conn->real_escape_string($_POST["CEL_TASK"]);
    $TIME_TASK = $conn->real_escape_string($_POST["TIME_TASK"]);
    $NUMBERS_TASK = $conn->real_escape_string($_POST["NUMBERS_TASK"]);
    $DATE_TASK = $conn->real_escape_string($_POST["DATE_TASK"]);
    $PRIORITY_TASK = $conn->real_escape_string($_POST["PRIORITY_TASK"]);

    $sql = "INSERT INTO TASK (name_task,cel_task,data_task,time_task,numbers_task,priority_task) VALUES ('$NAME_TASK', '$CEL_TASK','$DATE_TASK','$TIME_TASK','$NUMBERS_TASK','$PRIORITY_TASK')";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }


    $sqla = "SELECT name_task,cel_task,data_task,time_task,numbers_task,priority_task FROM TASK )";
    echo $conn->query($sqla);

    $conn->close();
}




?>