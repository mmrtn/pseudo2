<?php
if (!empty($_POST['aadress'])) {
    $aadress = $_POST['aadress'];
    if (strlen($aadress)<100 && filesize("aadressid.txt")<5000000) {
        $file = fopen("aadressid.txt", "a") or die("Unable to open file!");
        fwrite($file, $aadress . "\n");
        fclose($file);
    }
}

