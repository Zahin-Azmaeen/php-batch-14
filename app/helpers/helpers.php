<?php


function view($fileName, $data = [], $print = true)
{
    $output     = "File not Found";
    $filePath   = "views/".$fileName.".php"; // views/about.php
    if (file_exists($filePath))
    {
        ob_start();
        extract($data);
        include $filePath;
        $output = ob_get_clean();
    }

    if ($print)
    {
        print $output;
    }
}