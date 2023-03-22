<?php
class byebye{
    CONST MESSAGE="THANK YOU..!YOUR SELECTED";
    public function bye(){
        echo self::MESSAGE;
    }
}
$smallmsg= new smallmsg();
$smallmsg->bye();


?>