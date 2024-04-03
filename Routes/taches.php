<?php
require './MODEL/taches_model.php';
if ($_SERVER["REDIRECT_URL"] == "/task/Taches/") {
    echo json_encode(Taches::get_task());
}
if ($_SERVER["REDIRECT_URL"] == "/task/Taches/save/") {
    $name = $_POST['name'];
    $do = $_POST['do'];
    echo json_encode(Taches::Enregistrer($name, $do));
}