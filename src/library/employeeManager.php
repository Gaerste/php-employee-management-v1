<?php

/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function addEmployee(array $newEmployee)
{
    // TODO implement it
    require_once ""
}


function deleteEmployee(string $id)
{
// TODO implement it

}


function updateEmployee(array $updateEmployee)
{
    // TODO implement it
}


function getEmployee()
{
    $url = "../../resources/employees.json";
    $employeesData = json_encode(file_get_contents($url), true);
    return $employeesData;
}
getEmployee();



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
