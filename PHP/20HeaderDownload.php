<?php

if (isset($_REQUEST['Download'])) {
    # code...
    // $file_name = "$_REQUEST[Dowload]";
    $file_name = "downloadfile.zip";
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $file_name . '"');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_name)); //Absolute URL
    ob_clean();
    flush();
    readfile($file_name); //Absolute URL
    exit();
}
?>
<?php
$file_path = 'movie.mp4';

if (file_exists($file_path)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
    header('Content-Length: ' . filesize($file_path));
    
    // Open the file for reading
    $file = fopen($file_path, 'rb');
    
    // Output the file in chunks
    while (!feof($file)) {
        echo fread($file, 1024 * 1024); // Output 1MB chunks (adjust as needed)
        ob_flush();
        flush();
    }
    
    fclose($file);
    exit;
} else {
    echo "File not found.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="submit" value="Download" name="Download" id="Download">
        <a href="downloadfile.zip" download> Hello</a>
    </form>
</body>

</html>