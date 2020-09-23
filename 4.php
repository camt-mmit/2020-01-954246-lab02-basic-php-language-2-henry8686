<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
printf("Input size:");
fscanf(STDIN,"%d",$n);
for($j=1;$j<=$n;$j++){
    for($i=$n+1;$i>1;$i--) {
        printf("%s",($i>=$j+2)?" ":"*");
    }
    printf("\n");
}
?>