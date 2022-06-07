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
    // if(isset($_GET["source"]) && $_GET["source"]!=="js"){
    // require_once "../employee.php";};
    // TODO implement it 
    // if(isset($_POST['submit'])){
    $new_user = [
        "id" => hexdec(uniqid()),
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
    $newArray =json_encode($dataJson ,JSON_PRETTY_PRINT);
    file_put_contents('../../resources/employees.json', $newArray);
     };


function deleteEmployee(string $id)
{
// TODO implement it

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