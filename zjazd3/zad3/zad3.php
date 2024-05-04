<?php

function fileManager($path, $name, $action="read"){
    switch ($action):
        case 'read':
            if(is_dir($path)){
                if ($dh = opendir($path)) {
                    while (($file = readdir($dh)) !== false) {
                        echo "Nazwa pliku: " .$file . "<br>";
                    }
                    closedir($dh);
                }
            }else{
                echo "Nie ma takiego folderu";     
            }
            break;
        case 'delete':
            if(is_dir($path . '/' . $name) && is_dir_empty($path . '/' . $name)){
                rmdir($path . '/' . $name);
                echo "Folder został usunięty";
            }else{
                echo "Nie ma takiego folderu lub jest pełny";  
            }
            break;
            case 'create':
                if(is_dir($path)){
                    if(!is_dir($path . '/' . $name)) {
                        mkdir($path . '/' . $name);
                        echo "Folder został stworzony";
                    } else {
                        echo "Folder o podanej nazwie już istnieje";
                    }
                }else{
                    echo "Nie ma takiego folderu";  
                }
                break;
            default:
            echo "Nieprawidłowa akcja";
     endswitch;
        }

function is_dir_empty($dir) {
    return (count(scandir($dir)) == 2);
}

$path = $_POST['path'];
$name = $_POST['name'];
$action=$_POST['action'];


fileManager($path,$name,$action);

