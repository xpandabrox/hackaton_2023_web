<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    	<link rel = "stylesheet" href="auth.css">
	    	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
<script src="TESTING_SCRIPTS.js"></script>

<div class="auth">
				<span class="fontar"><h1>Регистрация</h1></span>
	<form action="auth_copy.php" method="post">
		<div class="sosa">
			<label>Введите логин:   </label>
			<input type="text" name="username" placeholder="Логин" >
		</div>
		<div class="sosa">
			<label>Введите пароль:   </label>
			<input type="password" name="password" placeholder="Пароль" >
		</div>
		<div class="sosas">
			<input type="submit" name="authar" value="Регистрация" onclick="Imba()">
		</div>
	</form>	
	<div class="RETURN">
	<button  onclick="Imba()">Вернуться</button>
	</div>
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
            echo "<p>Вы зарегистрировали нового пользовотеля<p> ";
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

?>
</div>
</head>
<body>

</body>
</html>

