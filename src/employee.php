<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <script src="../assets/js/employees.js" defer></script>
    <title>Employee Page</title>
</head>
<body>
    <h1 class="title">Employee Page</h1>
    <form action="library/employeeController.php" method="post" class="form">
    <input type="hidden" name="userid" value="<?=$id?>">
        <div class="row">
        <label for="name">Name</label>
        <input type="text" class="form-control-file" name="name" id="name">

        <input type="hidden" name="">
    
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control-file" name="lastName" id="lastname">
        </div>
        <div class="row">
        <label for="email">E-mail</label>
        <input type="email" class="form-control-file" name="email" id="email">

        <label for="gender">Gender</label>
        <select name="gender" class="form-control-file" id="gender">
            <option value="man">Man</option>
            <option value="woman">Woman</option>
            <option value="others">Others</option>
        </select>
        </div>
        <div class="row">
        <label for="city">City</label>
        <input type="text" required class="form-control-file" name="city" id="city">

        <label for="streetAdress">Streeet Adress</label>
        <input type="text" required class="form-control-file" name="streetAdress" id="streetAdress">
        </div>
        <div class="row">
        <label for="state">State</label>
        <input type="text" required class="form-control-file" name="state" id="state">

        <label for="age">Age</label>
        <input type="text" required  class="form-control-file" name="age" id="age">
        </div>
        <div class="row">
        <label for="postalCode"> Postal code</label>
        <input type="text" required class="form-control-file"  name="postalCode" id="postalCode">

        <label for="phoneNumber">Phone Number</label>
        <input type="text" required class="form-control-file" name="phoneNumber" id="phoneNumber">
        </div>
        <div class="buttons">
        <button type="submit" required name="submit" class="btn btn-primary" >Submit</button>
        <input type="button"  class="btn btn-secondary" id="returnToDashboard" onclick="window.location='dashboard.php'" value="Return"></input>
        </div>
    </form>
</body>
</html>