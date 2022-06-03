window.onload = () => getEmployees();

const employeeController = "../src/library/employeeController.php";



async function getEmployees() {
        const response = await fetch(employeeController);
        return response;
    } 
    getEmployees();
