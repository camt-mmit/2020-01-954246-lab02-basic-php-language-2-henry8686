<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
printf("Input number:");
fscanf(STDIN, "%d", $n);
for ($j=1;$j<=12;$j++){
    for($i=2; $i<=$n; $i++){
        printf("%4d",$k=$i*$j);
    }printf("\n");
}
?>