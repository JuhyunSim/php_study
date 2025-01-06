<?php
if(isset($_REQUEST['file'])) {
    $file = urldecode($_REQUEST['file']);

    $file_path = "./resources/images/" . $file;

    if(file_exists($file_path)) {
        header('Content-description: File-Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-disposition: attachment; filename="' . basename($file_path) . '"');
        header('Expires: 0');
        header('Content-transfer-Encoding: binary');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));
        flush();
        readfile($file_path);
        die();

    } else {
        http_response_code(404);
        die();
    }
}
?>