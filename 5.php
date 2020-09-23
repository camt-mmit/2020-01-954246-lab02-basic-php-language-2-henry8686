<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
printf("Input size:");
fscanf(STDIN,"%d",$n);
for($j=1;$j<=$n;$j++){
    for($i=1;$i<=$n;$i++){
        if($j<=1||$j>=$n){
        printf("%s",($i>$n)?" ":"*");
        }else{
        printf("%s",($i>1&&$i<$n)?" ":"*");
        }
    }printf("\n");
}
?>