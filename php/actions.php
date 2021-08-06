<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*armazenar no backend as datas desejadas em uma sessão, quando enviadas pelo front end*/
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
if ($action == 'store_data') {
    $pickUpDate = isset($_REQUEST['pickUpDate']) ? $_REQUEST['pickUpDate'] : null;
    $pickUpPlace = isset($_REQUEST['pickUpPlace']) ? $_REQUEST['pickUpPlace'] : null;

    $returnDate = isset($_REQUEST['returnDate']) ? $_REQUEST['returnDate'] : null;
    $returnPlace = isset($_REQUEST['returnPlace']) ? $_REQUEST['returnPlace'] : null;

    $_SESSION['returnPlace'] = $returnPlace;
    $_SESSION['returnDate'] = $returnDate;
    $_SESSION['pickUpPlace'] = $pickUpPlace;
    $_SESSION['pickUpDate'] = $pickUpDate;
    echo json_encode(
        array(
            "Stored_returnDate" => $returnDate,
            "Stored_returnPlace" => $returnPlace,
            "Stored_pickUpDate" => $pickUpDate,
            "Stored_pickUpPlace" => $pickUpPlace
        )
    );
} 
/*recolher do backend as datas desejadas armazenadas na sessão, e retornar para o front end*/
elseif ($action == 'get_dates') 
{
    // session_start();    
    $pickUpPlace = isset($_SESSION['pickUpPlace']) ? $_SESSION['pickUpPlace'] : null;
    $pickUpDate = isset($_SESSION['pickUpDate']) ? $_SESSION['pickUpDate'] : null;
    $returnPlace = isset($_SESSION['returnPlace']) ? $_SESSION['returnPlace'] : null;
    $returnDate = isset($_SESSION['returnDate']) ? $_SESSION['returnDate'] : null;
    $dates = array("returnDate" => $returnDate,"returnPlace" =>$returnPlace, "pickUpDate" =>$pickUpDate, "pickUpPlace" => $pickUpPlace);
    echo json_encode($dates);
} 


else {
    sleep(3);
    echo json_encode(array("ERROR" => "1", "MESSAGE" => "ACTION NOT DEFINED"));
}
