<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
do{
printf("1. calculate price
2. compare 2-numbers
3. exit
Input menu number:");
fscanf(STDIN, "%d", $menu);
if($menu!=3){
switch(strtolower($menu)){
case"1":
    printf("Input number (price %%discount): ");
    fscanf(STDIN, "%f %f", $price,$discount);
    printf("price %.2f discount %.2f netprice %.2f\n", $price, $dist_cost = $price*$discount/100, $netprice=$price-$dist_cost);
break;
case"2":
    printf("Input number (number1 number2): ");
    fscanf(STDIN, "%f %f", $x,$y);
    if($x>$y){
        printf("%f greater than %f", $x, $y);
    }elseif($x<$y){
        printf("%f less than %f", $x, $y);
    }else 
    printf("%f equal to %f", $x, $y);
break;
default:
printf("Invalid menu number!!!
");
}
}
}while($menu!=3);
?>