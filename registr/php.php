<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="PHP.css">
    <?php


$conn = new mysqli("localhost", "root", "", "TEST");
if (isset($_POST["username"]) && isset($_POST["password"])) {
      
    
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $login = $conn->real_escape_string($_POST["username"]);
    $password = $conn->real_escape_string($_POST["password"]);
    
    $MAX_ID = "SELECT login FROM `test`;";
    $JOPA = "SELECT * \n"

    . "FROM `test` \n"

    . "WHERE ROW(login,password)=ROW('$login', '$password');";
    if($result=$conn->query($JOPA)){
        foreach($result as $row){
            
        }

        
    if($row["admin"] ==  $login){
        if(($row["password"]==$password)&&($row["login"]==$login)){
        $sql = "INSERT INTO test (login,password) VALUES ('$login', '$password')";
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

    
    

    <title>REGISTR</title>
</head>
<body vlink="black" link="black">
    <div class="button">
        <button onclick="Test('running')" class="button_reg">Регистрация</button>
    </div>
    
    <form action="php.php" method="post">
        <div class="Main_div" id="Main__div">  
        <h1>Регистрация</h1>  
    <div class="Login_div">
        <p class="text_login">
        <h2>Логин</h2>
        <p>
        <input type="text"  class="input_1" id="login" name="username">
        </p>
    </p>
    </div>
    <div class="Password_div">
    <p class="text_password">
        <h2>Пароль</h2>
        <p>
            <input type="password"  class="input_2" id="password" name="password">
        </p>
    </p>
</div>
    <div class="Last_div">
        
        <p>
            
            <button id="submit" class="submit" onclick="POD('running')" type="submit">Подтвердить</button>
        </p>
    
</div>
</form>
</div>


    
<script src="TESTING_SCRIPTS.js" ></script>

       
</body>


</html>