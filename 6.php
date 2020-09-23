<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
printf("Input size:");
fscanf(STDIN,"%d",$n);
for($j=1;$j<=$n*2-1;$j++){
    for($i=1;$i<=$n*2-1;$i++){
        $abs=abs($i-$j);
        if(($j>$n)||($i>$n)){
            printf("%s",(($abs==$n-1)||($i+$j==$n*3-1))?"*":" ");
        }else{
            printf("%s",($i+$j==$n+1)?"*":" ");
        }
    }printf("\n");
}
?>