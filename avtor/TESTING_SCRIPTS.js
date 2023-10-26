
// function Imba(){
    
    
    // if((document.getElementById("login").value=="admin")&&(document.getElementById("psw").value=="12345")){
    //     window.location.assign("http://bimbam/HACATOON_2/sait_admin/test.php");
    // }else{
    //     window.location.assign("http://bimbam/HACATOON_2/sait_user/test.php");
    // }
    const mysql = require("mysql2");
  
    const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  port:"3336",
  database: "HACATOON",
  password: ""
  
    }   );
 connection.connect(function(err){
    if (err) {
      return console.error("Ошибка: " + err.message);
    }
    else{
      console.log("Подключение к серверу MySQL успешно установлено");
    }
 });
// }
