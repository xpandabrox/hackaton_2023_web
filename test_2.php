<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Разработка WEB приложения</title>
    <link rel = "stylesheet" href="styles.css">
    <script src="tests.js"></script>
</head>
<body>
<div class="JJJ">
<div class="MAIN_DIV">
    
        <div>
            <button onclick=" visibility('scroll_2')" ondblclick="visibility('scroll_revers_2')">Новый запрос</button>
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
                <p> <input type="date" name="TIME_TASK"></p>
                <p><input type="time" name="TIME_TASK"></p>
            </div>
            <div>
                Количество
                <p><input type="text" name="NUMBERS_TASK"></p>
                </div>
            <div>
                <input type="submit"  value="Сохранить запрос">
            </div>    
            </form>
            <div>
                <button onclick="DOP_DETALS('scroll')" ondblclick="DOP_DETALS('scroll_revers')">Дополнительные детали</button>
                <div class="DOP_DETALS" id="DOP_DETALS">
                <div>
                Приоритет
                <p><input type="radio">Низкий</p>
                <p><input type="radio">Средний</p>
                <p><input type="radio">Высокий</p>
                </div>
                
            </div>
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