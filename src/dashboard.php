<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php
session_start();
    if(!isset($_SESSION['user'])){
    }
    if(isset($_GET['logout'])){
        unset($_SESSION['user']);
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <script src="../assets/js/employees.js" defer></script>
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-axe" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M13 9l7.383 7.418c.823 .82 .823 2.148 0 2.967a2.11 2.11 0 0 1 -2.976 0l-7.407 -7.385" />
                <path d="M6.66 15.66l-3.32 -3.32a1.25 1.25 0 0 1 .42 -2.044l3.24 -1.296l6 -6l3 3l-6 6l-1.296 3.24a1.25 1.25 0 0 1 -2.044 .42z" />
            </svg>
            <h1>Employee <span class="fs-3">management</span></h1>
            <button type="submit" class="btn btn-outline-primary">Logout</button>
        </div>
    </nav>
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Street No.</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Postal code</th>
                <th scope="col">Phone Number</th>
                <th><button type="submit" value="submit" class="btn" id="createNewEmployee"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg></button></th>
            </tr>
        </thead>
        <tbody>
            <tr id="employeeTable">
                <th scope="row">1</th>
                <td>Mark</td>
                <td>admin@admi.com</td>
                <td>22</td>
                <td>Doral 120</td>
                <td>Miami</td>
                <td>Florida</td>
                <td>33125</td>
                <td>212 1238765</td>
            </tr>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
