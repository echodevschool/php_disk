<?php

try {
    $resp = [];
    if ($_POST['firstname'] === 'Mickey') {
        $resp['status'] = true;
    } else {
        $resp['status'] = false;
    }
} catch (Exception $exception) {
    $resp['status'] = false;
    $resp['eror'] = $exception->getMessage();
    $resp['code'] = $exception->getCode();
}

echo json_encode($resp);