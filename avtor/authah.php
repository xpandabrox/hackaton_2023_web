<?php
$conn = new mysqli("localhost", "root", "", "HACATOON");

if (isset($_POST["login"]) && isset($_POST["psw"])) {
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
	$login = $conn->real_escape_string($_POST["login"]);
	$psw = $conn->real_escape_string($_POST["psw"]);
    // $NAME_TASK = $conn->real_escape_string($_POST["NAME_TASK"]);
    // $CEL_TASK = $conn->real_escape_string($_POST["CEL_TASK"]);
    // $TIME_TASK = $conn->real_escape_string($_POST["TIME_TASK"]);
    // $NUMBERS_TASK = $conn->real_escape_string($_POST["NUMBERS_TASK"]);
    // $DATE_TASK = $conn->real_escape_string($_POST["DATE_TASK"]);
    // $PRIORITY_TASK = $conn->real_escape_string($_POST["PRIORITY_TASK"]);

    // $sql = "INSERT INTO TASK (name_task,cel_task,data_task,time_task,numbers_task,priority_task) VALUES ('$NAME_TASK', '$CEL_TASK','$DATE_TASK','$TIME_TASK','$NUMBERS_TASK','$PRIORITY_TASK')";
    // if($conn->query($sql)){
    //     echo "Данные успешно добавлены";
    // } else{
    //     echo "Ошибка: " . $conn->error;
    // }
	if(($login=="admin")&&($psw== "12345")){
		echo '<script type="text/javascript">function Imba(s){
			window.location.assign(http://bimbam/HACATOON_2/sait_admin/test.php);
		}</script>';
		echo '<button onclick="Imba(1)">Вы админ</button>';
	}else{

	}

    // $sqll = "SELECT name_task ,cel_task, data_task, time_task ,numbers_task ,priority_task FROM TASK;";
    // if($conn->query($sqll)){
    //     echo "BIMBAM";
    // }

    $conn->close();
}
?>

