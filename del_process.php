<?php
    if($_POST){
        $del = $_POST['del'];
        foreach ($del as $key => $value) {
            $del_path = "message/" . $value;
            if(file_exists($del_path)){
                unlink($del_path);
            }
        }
    }

    header('Location:index.php');
    exit;
?>