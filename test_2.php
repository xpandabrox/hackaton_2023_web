<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Разработка WEB приложения</title>
    <link rel = "stylesheet" href="style_2.css">
    <script src="test.js"></script>
</head>
<body>
   
<div>
        <button onclick=" visibility('auto')" ondblclick="visibility('0px')">НОВЫЙ ЗАПРОС</button>
        <div class="inputs" id="inputs"  >
        <form action="php_script.php" method="post">
        
         
            <div>
                НАЗВАНИЕ ЗАДАЧИ
                <input type="text" name="NAME_TASK">
            </div>
            <div>
                ЦЕЛИ ЗАДАЧИ
                <input type="text" class="CEL" name="CEL_TASK">
            </div>
            
            <div>
                СРОКИ ВЫПОЛНЕНИЯ В ДНЯХ
                <input type="text" name="TIME_TASK">
            </div>
            <div>
                КОЛИЧЕСТВО УЧАСТНИКОВ
                <input type="text" name="NUMBERS_TASK">
                </div>
            <div>
                <input type="submit"  value="СОХРАНИТЬ ЗАПРОС">
            </div>    
        </form>
            <div>
                <button onclick="DOP_DETALS('100px')" ondblclick="DOP_DETALS('0px')">ДОПОЛНИТЕЛЬНЫЕ ДЕТАЛИ</button>
                <div class="DOP_DETALS" id="DOP_DETALS">
                <div>
                ПРИОРИТЕТ
                <p><input type="radio">НИЗКИЙ
                <input type="radio">СРЕДНИЙ
                <input type="radio">ВЫСОКИЙ</p>
                </div>
                
            </div>
        </div>
        
        
    
</div>

<div>
    <input type="submit"  value="ДНЕЙ ДО ДЕДЛАЙНА" onclick="deadline('1')" ondblclick="deadline('0')">
    <div class="deadline" id="deadline" name="deadline">
        
    </div>
</div>
</body>
</html>