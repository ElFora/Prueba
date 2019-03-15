<?php

if (isset ($_FILES['file'])){
    $fileNom = $_FILES['file']['name'];
    $fileTmpNom = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];

    $fileExt = explode ('.', $fileNom);
    $fileActualExt = strtolower(end($fileExt));

    if ($fileError === 0) {
        $fileNuevoNom = uniqid('', true).'.'.$fileActualExt;
        $fileURL = 'subidas/' .$fileNuevoNom;
        move_uploaded_file($fileTmpNom, $fileURL);
        echo 'Exito';
    } else {
        echo 'Error';
    }
}

?>