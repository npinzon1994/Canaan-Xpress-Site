<?php
/**
 * Created by IntelliJ IDEA.
 * User: NickPinzon
 * Date: 01/02/2019
 * Time: 10:31 AM
 */
    $command = escapeshellcmd('scripts/apm_trackAndTrace.py');
    $output = shell_exec($command);
    echo $output;