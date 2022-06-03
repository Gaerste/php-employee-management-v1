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
    $jsonurl = "../../resources/employees.json";
    $storedEmployees = json_decode(file_get_contents($jsonurl, true));
    print_r($storedEmployees);
// TODO implement it
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
