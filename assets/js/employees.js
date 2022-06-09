const url = "../src/library/employeeController.php?action=getDataEmployees&source=js";

window.onload = getAllEmployees();

async function getAllEmployees() {
  await fetch(url)
    .then((response) => response.json())
    .then((data) => {
      const dataObject = JSON.parse(data);
      // console.log(data);
      renderDashboard(dataObject);
    });
}

function renderDashboard(data) {
  data.map((employee) => {
    const tableBody = document.getElementById("employeeTable");
    let tr = document.createElement("tr");
    let tdId = document.createElement("td");
    tableBody.append(tr);

    // ID EMPLOYEE
    tr.append(tdId);
    tdId.append(employee.id);
    //NAME EMPLOYEE
    let tdName = document.createElement("td");
    tr.append(tdName);
    tdName.append(employee.name);
    //EMAIL EMPLOYEE
    let tdEmail = document.createElement("td");
    tr.append(tdEmail);
    tdEmail.append(employee.email);
    //AGE EMPLOYEE
    let tdAge = document.createElement("td");
    tr.append(tdAge);
    tdAge.append(employee.age);
    // STREET NUMBER EMPLOYEE
    let tdStreet = document.createElement("td");
    tr.append(tdStreet);
    tdStreet.append(employee.streetAddress);
    // CITY EMPLOYEE
    let tdCity = document.createElement("td");
    tr.append(tdCity);
    tdCity.append(employee.city);
    //STATE EMPLOYEE
    let tdState = document.createElement("td");
    tr.append(tdState);
    tdState.append(employee.state);
    //POSTAL CODE EMPLOYEE
    let tdPostal = document.createElement("td");
    tr.append(tdPostal);
    tdPostal.append(employee.postalCode);
    //PHONE NUMBER EMPLOYEE
    let tdPhone = document.createElement("td");
    tr.append(tdPhone);
    tdPhone.append(employee.phoneNumber);
    //BUTTON TO DELETE and modify THE EMPLOYEE
    let btnTrash = document.createElement("button");
    btnTrash.classList.add('btn__trash', 'btn', 'btn-light');
 
    btnTrash.setAttribute('id','btnDelete');
    btnTrash.textContent="Delete";
    btnTrash.setAttribute('data-id', employee.id);
    btnTrash.addEventListener('click', deleteEmployee);
    tr.append(btnTrash);
    //button modify
    let btnModify = document.createElement("button");
    btnModify.classList.add('btn__Modify','btn', 'btn-warning');
    btnModify.setAttribute('id','btnModify');
    btnModify.textContent="Modify";
    btnModify.setAttribute('data-id', employee.id);
    btnModify.addEventListener('click', modifyEmployee);
    tr.append(btnModify);
  });
}
function deleteEmployee(e) {
  const btn = e.currentTarget.getAttribute('data-id');
  
  const sendReq = async () => {
    const req = await fetch(`.././src/library/employeeController.php`, {
        method: 'DELETE',
        body: JSON.stringify(+btn)
    });
}
sendReq();
window.location.reload();
}
function modifyEmployee(e) {
  const userId = e.currentTarget.getAttribute('data-id');
  
  const sendReq = async () => {
    const req = await fetch(`.././src/library/employeeController.php`, {
        method: 'GET',
        body: JSON.stringify(+userId)
    });
}
sendReq();

}