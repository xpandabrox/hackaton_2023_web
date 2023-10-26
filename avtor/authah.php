		<?php
		if(isset($_POST['login'])&&isset($_POST['psw'])){
			setcookie("user",$_POST['login'],time()+3600);
			if($_POST['login']=='admin'&&$_POST['psw']=='12345'){
				echo "Hello, ";
                echo $_COOKIE["user"];
			
			}	
			else{
                echo "Такого пользователя нет в системе";
            }
			
		}
		?>