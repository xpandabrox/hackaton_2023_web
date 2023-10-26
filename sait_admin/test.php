<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="styles.css">
    <link rel = "stylesheet" href="style.css">
    <script src="tests.js"> </script>
    <script src="test_2.js"> </script>
    
</head>
<body vlink="black" link="black" >
    <div id="JJJJ">
        <button onclick="NEW_USER(1)" class="NEW_USER">Создать нового пользователя</button>
        <button class="NEW_USER" id="button" onclick="JJJ('absolute','1')">
        
        
        +
        
        
        </button>
    </div>
<table class="tabtask" >
    <tr >
        <td > 
        <div class="process"  >
        
            <h1>В процессе</h1>
        


            <!-- <div class="t1" >
        
                 <h7>• Task 1</h7>
                <div>
                     Инфа внутри задачи.
                    <div class="date">
                        Установите сроки выполнения задачи
                        <div>
                            <input type="date">
                            <input type="time">
                        </div>
                    </div>
                </div>
            </div> -->
            <?php
$conn = new mysqli('localhost', 'root', '', 'HACATOON');
if($conn->connect_error){
    die('Ошибка: ' . $conn->connect_error);
}
    $sql = 'SELECT * FROM TASK';
    $id_task = 'SELECT id_task FROM TASK';
    $result = $conn->query($sql);
    $result_id = $conn->query($id_task);
    foreach($result  as $row){
            echo
            '<div class="t1" >'
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
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>';    
    }
?>
            
        </div>
        <td> 
    <div class="work">
        <h1>Выполнено</h1>
        <!-- <div class="t2"><h7>• Task 1</h7>
            <div>Инфа внутри задачи.
                <div class="date">
                    Установите сроки выполнения задачи
                    <div>
                        <input type="date">
                        <input type="time">
                    </div>
                </div>
            </div>
        </div> -->
        <?php
$conn = new mysqli('localhost', 'root', '', 'HACATOON');
if($conn->connect_error){
    die('Ошибка: ' . $conn->connect_error);
}
    $sql = 'SELECT * FROM TASK';
    $id_task = 'SELECT id_task FROM TASK';
    $result = $conn->query($sql);
    $result_id = $conn->query($id_task);
    foreach($result  as $row){
            echo
            '<div class="t2" >'
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
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>';    
    }
?>
        
        <td> 
    <div class="denied">
        <h1>Отложено</h1>
        <?php
$conn = new mysqli('localhost', 'root', '', 'HACATOON');
if($conn->connect_error){
    die('Ошибка: ' . $conn->connect_error);
}
    $sql = 'SELECT * FROM TASK';
    $id_task = 'SELECT id_task FROM TASK';
    $result = $conn->query($sql);
    $result_id = $conn->query($id_task);
    foreach($result  as $row){
            echo
            '<div class="t3" >'
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
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>'
            .'</div>';    
    }
?>
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
                <!-- <button onclick="DOP_DETALS('scroll')" ondblclick="DOP_DETALS('scroll_revers')">Дополнительные детали</button> -->
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

    <div>
        <input type="submit"  value="Дней до дедлайна" onclick="deadline('1')" ondblclick="deadline('0')">
        <div class="deadline" id="deadline" name="deadline">
        
        </div>
    </div>
</div>


</body>
</html>