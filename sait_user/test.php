<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="styles.css">
    <link rel = "stylesheet" href="style.css">
    <script src="tests.js"> </script>
    <!-- <script src="test_2.js"> </script> -->
    
</head>
<body vlink="black" link="black" >
    <div id="JJJJ">
        
        <button class="NEW_USER" id="button" onclick="JJJ('absolute','1')">
        
        
        +
        
        
        </button>
    </div>
<table class="tabtask" >
    <tr >
        <td > 
        <div class="process"  >
            
            <h1>В процессе</h1>
        


            
            <?php
            $i=1;
            $conn = new mysqli('localhost', 'root', '', 'HACATOON');
            
    
    if($conn->connect_error){
    die('Ошибка: ' . $conn->connect_error);
}
    $a=0;
    $id=0;
    $w_id=0;
    $ww_id[]= $a;
    $sql = 'SELECT * FROM TASK';
    $del ='DELETE FROM TASK WHERE TASK.id_task = id;';
    $del_1 =$conn->query($del) ;
    $id_task = 'SELECT id_task FROM TASK';
    $result = $conn->query($sql);
    $result_id = $conn->query($id_task);
    foreach($result  as $row){
            $ww_id[$a]=
            '<div class="t1" id='.$a.'>'
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
            .'<div><input type="submit" id='.' name="" onclick="I_MINUS(+1)" value="<" style="width:20px">'
            .'<input type="submit" '.' name="" onclick="I_PLUS(+1)" value=">" style="width:20px"></div>'
            .'<div><input type="submit" '.' name="" onclick="DEL()" value="Удалить задачу" style="width:100px"></div>'
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>';    
            $a++;
             
    }
    
    while($w_id!=$a){
        echo $ww_id[$w_id];
        $w_id++;
    }





?>
<!-- <script>
    var js_var = <?php echo $i; ?>;
    // var js_del = <?php echo $del; ?>;
    var js_id = <?php echo $a; ?>;
    var js_id_ww = <?php echo $id; ?>;
    function I_PLUS(){
    
    if(js_var>3){
        js_var--;
        console.log(js_var);
    }else if (js_var<3){
        js_var++;
        console.log(js_var);
    }else if (js_var==3){
       
        console.log(js_var);
    }
    }
    function I_MINUS(){
    
    if(js_var<1){
        js_var++;
        
        console.log(js_var);
    }else if(js_var>1){
        js_var--;
        console.log(js_var);
    }else if(js_var==1){
        
        console.log(js_var);
    }
    }
    function DEL(){
        while((js_id>js_id_ww)||(js_id<js_id_ww)||(js_id==js_id_ww)){
        if(js_id==js_id_ww){
            console.log(js_id_ww);
            break;
            
            
        }else if(js_id<js_id_ww){
            console.log(js_id_ww);
            js_id--;
            
        }else if(js_id>js_id_ww){
            console.log(js_id_ww);
            js_id++;
            
        }
    }
    }
    

</script> -->
            
        </div>
        <td > 
    <div class="work" >
        <h1>Выполнено</h1>
        
        
        
        <td> 
    <div class="denied">
        <h1>Отложено</h1>
         
</tr>
</table>
<div class="JJJ" id="JJJ">
<div class="MAIN_DIV" id="MAIN_DIV">
<div>
    <button class="X" id="X" onclick="JJJ('static','0')">X</button>
        <div>
            <button onclick=" visibility('scroll_2')" ondblclick="visibility('scroll_revers_2')">Новый запрос</button>
            
        </div>
</div>
        <div class="input" id="inputs"  >
            <form action="php_script.php" method="post">
        
         
            <div>
                Название задачи
                <p><input type="text" name="NAME_TASK"></p>
            </div>
            <div>
                Цели задачи
                <p> <input type="text" class="CEL" name="CEL_TASK"></p>
            </div>
            
            <div>
                Сроки на выполнение
                <p> <input type="date" name="DATE_TASK"></p>
                <p><input type="time" name="TIME_TASK"></p>
            </div>
            <div>
                Количество
                <p><input type="text" name="NUMBERS_TASK"></p>
                </div>
            
            <div>
                  
                <div >
                <div>
                Приоритет от 0 до 100
                <p><input type="text" name="PRIORITY_TASK"></p>
                </div>
                
            </div>
            <div>
            <form action="/TASK/NEW_TASK.php" method="post">
                <input type="submit"  value="Сохранить запрос">
                </form>
            </div>    
            
            </form>
        </div>
        
        
    
</div>

    
</div>


</body>
</html>