
<?php
require_once "employeeManager.php";
if(isset($_POST["addEmployee"])){
    // addEmployee();
    header("location:../employee.php");
}
if(isset($_POST["submit"])){
    addEmployee();
    header("location:../dashboard.php");


}
if (isset($_GET['action'])&& $_GET['action']=== "getDataEmployees") {
    $employee = getEmployee();
    echo $employee;
}

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $inputdata = file_get_contents("php://input");
        $dataId = json_decode($inputdata);
        deleteEmployee($dataId);
}


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $inputdata = file_get_contents("php://input");
        $dataId = json_decode($inputdata);
        deleteEmployee($dataId);
}
//GET THE FORM OF THE EMPLOYEE PAGE
// require_once "employee.php";

// if (isset($_POST)){
//     {
//         name:
//     }
// }
// $functions = $_POST["function"];
// switch ($function) {
//     case 'read':
//         $employee = getEmployee();
//         break;
//     case 'delete':
//         # code...
//         break;
//     case 'create':
//         # code...
//         break;
//     case 'update':
//         # code...
//         break;
//     default:
//         # code...
//         break;
// }
