
<?php
$conn = new mysqli("localhost", "root", "", "HACATOON");
if (isset($_POST["username"]) && isset($_POST["password"])) {
      
    
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $login = $conn->real_escape_string($_POST["username"]);
    $password = $conn->real_escape_string($_POST["password"]);
    
    $MAX_ID = "SELECT login FROM `USER_CREATE`;";
    $JOPA = "SELECT * \n"

    . "FROM `USER_CREATE` \n"

    . "WHERE ROW(login,password)=ROW('$login', '$password');";
    if($result=$conn->query($JOPA)){
        foreach($result as $row){
            
        }

        
    if($row["login"] !=  $login){
        if(($row["password"]!=$password)&&($row["login"]!=$login)){
        $sql = "INSERT INTO USER_CREATE (login,password) VALUES ('$login', '$password')";
        if($conn->query($sql)){
            echo "Данные успешно добавлены";
        } else{
            echo "Ошибка: " . $conn->error;
        }
    }
    
}
else if($row["login"]=$login){
    if($row["password"]!=$password){
        echo"Пароль неверен";
    }
    else if($row["password"]=$password){
        echo "ТАКОЙ ПОЛЬЗОВАТЕЛЬ СУЩЕСТВУЕТ";
    }
}
}

    $conn->close();
    
}
//Я того рот ебал
?>
