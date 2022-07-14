<?php

class Math{    
    	
    
        function SumFunc($x, $y){
        	return $x+$y;
        }
        
        function DifFunc($x, $y){
        	return $x-$y;
        }
        
        function MultFunc($x, $y){
        	return $x*$y;
        }
        
        function DivFunc($x, $y){
        	if($y!=0)
            {
            	return $x/$y;
            }
        	else
            {
            	print('Деление на ноль!');
            }
        }
        
        function PowFunc($x, $y){        	
        	return pow($x, $y);
        }
        
        function SqrtFunc($x, $y){        	
        	return sqrt($x, $y);
        }
    }
    
    
$math = new Math;

print 'Результат: ';
print $math->DivFunc(10,5);
    
?>