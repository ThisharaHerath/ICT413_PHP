<?php
	echo "I am lerning advanced php lerning now"/n;
	echo "Good Morning today is 2023-10-9";
echo "Good Morning,today is ".date("Y-m-d");
    echo "Good Morning, today is ".$currentdate;

    for($i=1;$i<10;$i++){
	  echo $i."<br>";
	}

    $sum=0;
    for($i=1;$i<20;$i++){
        $sum+=$i;
        }

    function calculateSum($num1, $num2){
        $num=$num1 + $num2;

        if($num1 == $num2) {
            $result = $sum*5;
            }else{
                $result=$sum;
                }
                return $result;
            }
            echo calculateSum(2,2):
        }
    }    

?>