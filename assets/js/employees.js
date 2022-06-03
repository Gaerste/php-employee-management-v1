const url = "../src/library/employeeController.php?action=getDataEmployees";
const tableBody = document.getElementById("employeeTable");

// window.onload = getAllEmployees();

async function getAllEmployees() {
  const dataEmployee = await fetch(url)
    .then((response) => response.json())
    .then((data) => {
      const dataObject = JSON.parse(data);
      renderDashboard(dataObject);
    });
}


function renderDashboard(data) {
    console.log(data);
    
}
  //look for search id
  
  //add employee
const createNewEmployee = document.getElementById("createNewEmployee");
createNewEmployee.addEventListener("click", redirect);
function redirect() {

  window.location.href = "employee.php";
};
