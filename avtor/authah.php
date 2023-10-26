<?php
$conn = new mysqli("localhost", "root", "", "HACATOON");

if (isset($_POST["login"]) && isset($_POST["psw"])) {
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    
	$login = $conn->real_escape_string($_POST["login"]);
	$psw = $conn->real_escape_string($_POST["psw"]);
	$log = "SELECT  login FROM USER_CREATE";
	$pas = "SELECT  password FROM USER_CREATE";
	$sql ="SELECT * FROM USER_CREATE";
	// if(($login=="admin")&&($psw== "12345")){
		
	// }else if($conn->query($sql)){
	// 	if(($conn->query($log)==$login)&&($conn->query($pas)==$psw)){
	// 		echo"BIMBAM";
	// }else{
		if($result = $conn->query($sql)){
			foreach($result as $row){
                 if(($row["login"] == "admin")&&($login == "admin")){

                    if(($row["password"] == "12345")&&($psw == "12345")){
    
                        header( 'Location: http://bimbam/HACATOON_2/sait_admin/test.php' );
    
                    }
                } 
                else if($row["login"] == $login){
                    if($row["password"] == $psw){
                    // echo"Такой пользователь существует";
                    // $handle = fopen("http://bimbam/HACATOON_2/sait_user/test.php","r");
                    header( 'Location: http://bimbam/HACATOON_2/sait_user/test.php' );
                    
                    }
            }
            
            else if($row["login"] != $login){
                if($row["password"] != $psw){
                    header( 'Location: http://bimbam/HACATOON_2/avtor/auth.php' );
                    
                }
          }
		}
    }
	// }
	
// }
    $conn->close();
}
?>