<?php

/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */


function addEmployee()
{
    $json = file_get_contents('../../resources/employees.json');
    $dataJson = json_decode($json, true);
    $sizeArray= sizeof($dataJson)+1;
    // if(isset($_GET["source"]) && $_GET["source"]!=="js"){
    // require_once "../employee.php";};
    // TODO implement it 
    // if(isset($_POST['submit'])){
    $new_user = [
        "id" => $sizeArray,
        "name" => $_POST['name'],
        "lastname" => $_POST['lastname'],
        "email" => $_POST['email'],
        "gender" => $_POST['gender'],
        "city" => $_POST['city'],
        "streetAddress" => $_POST['streetAdress'],
        "state" => $_POST['state'],
        "age"   => $_POST['age'],
        "postalCode" => $_POST['postalCode'],
        "phoneNumber" => $_POST['phoneNumber'],
    ];
    print_r($new_user);
    $dataJson[] = $new_user;
    $sizeArray= sizeof($dataJson)+1;
    echo $sizeArray;
    $newArray =json_encode($dataJson ,JSON_PRETTY_PRINT);
    file_put_contents('../../resources/employees.json', $newArray);
     };


     function deleteEmployee($dataId)
     {
     // read json file
         $data = file_get_contents("../../resources/employees.json");
     
     // decode json to associative array
         $jsonArray = json_decode($data, true);
         $indexArray = array();
     
     foreach($jsonArray as $key => $value){
         if ($value['id'] == $dataId) {
             unset($jsonArray[$key]);
         }
     }
     $indexArray = array_values($jsonArray);
     
     // encode array to json and save to file
     file_put_contents("../../resources/employees.json", json_encode($indexArray));
     return $indexArray;
     header("location:dashboard.php");
     }
     
function getEmployee()
{
    $url = "../../resources/employees.json";
    $employeesData = json_encode(file_get_contents($url), true);
    return $employeesData;
}

function updateEmployee(array $updateEmployee)
{
    // TODO implement it
}







function removeAvatar($id)
{
    // TODO implement it
}


function getQueryStringParameters(): array
{
    // TODO implement it
}

function getNextIdentifier(array $employeesCollection): int
{
    // TODO implement it
}