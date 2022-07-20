<h3>Калькулятор</h3>
<form action="" method="GET">
    Введите число 1: <input type="text" name="num1"><br>
    Введите число 2: <input type="text" name="num2"><br>
    <p>Введите номер операции (от 1 до 6): <input type="text" name="op"></p>
    <p><input type="submit" value="Получить результат"></p>
</form>


<?php

class MathFactory
{
    public function getMathFunc ($type)
    {   
        switch($type)
        {
            case 1:
                $funcName = new SumFunc();
                break;
            case 2:
                $funcName = new DifFunc();
                break;
            case 3:
                $funcName = new MultFunc();
                break;
            case 4:
                $funcName = new DivFunc();
                break;
            case 5:
                $funcName = new PowFunc();
                break;
            case 6:
                $funcName = new SqrtFunc();
                break;
            default:
                echo 'Неправильный тип!';                
        }
        return $funcName;
    }
}

interface Func 
{
    public function Count($x,$y);
}

class SumFunc implements Func 
{
    public function Count($x,$y)
    {        
        echo 'Сложение<br>';
        echo 'Результат: ' . $x+$y;
    }
}

class DifFunc implements Func 
{
    public function Count($x,$y)
    {
        echo 'Вычитание<br>';
        echo 'Результат: ' . $x-$y;
    }
}

class MultFunc implements Func 
{
    public function Count($x,$y)
    {
        echo 'Умножение<br>';
        echo 'Результат: ' . $x*$y;
    }
}

class DivFunc implements Func 
{
    public function Count($x,$y)
    {
        if ($y!=0)
        {
            echo 'Деление<br>';
            echo 'Результат: ' . $x/$y;
        }
        else
        {
            echo 'Деление на ноль!';
        }   
    }
}

class PowFunc implements Func 
{
    public function Count($x,$y)
    {
        echo 'Возведение в степень<br>';
        echo 'Результат: ' . pow($x, $y);
    }
}

class SqrtFunc implements Func 
{
    public function Count($x,$y)
    {
        echo 'Извлечение корня<br>';
        echo 'Результат: ' . sqrt($x);
    }
}



if (isset($_GET['num1']) and isset($_GET['num2']) and isset($_GET['op']))
{
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $op = $_GET['op'];

    $math = new MathFactory();
    $res = $math->getMathFunc($op);
    $res->Count($num1,$num2);
}


?>