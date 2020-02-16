//const showSchoolButton = document.getElementById("Button");
//showSchoolButton.onclick = showTable;


document.getElementById("SchoolTable").style.display = "none";
document.addEventListener("DOMContentLoaded", showTable, false);


function updateTable(code) {
  console.log(code);
  fetch('https://api.myjson.com/bins/' + code)
    .then(res => res.json())
    .then(data => {
      if (data && data.length > 0) {
        console.log(data);
        const tableRow = [
          "<tr><th>School Number</th><th>School Code</th><th>School Name</th></tr>"
        ];

        data.forEach(item => {
          tableRow.push(
            `<tr><td>${item.PeOrgNr}</td><td>${item.Skolenhetskod}</td><td>${item.Skolenhetsnamn}</td></tr>`
          );
        });
        document.getElementById("school_table").innerHTML = tableRow.join(" ");
        document.getElementById("SchoolTable").style.display = "";
      }
    });
}

function showTable() {
  fetch("https://api.myjson.com/bins/rnopu")
    .then(res => res.json())
    .then(data => {
      if (data && data.length > 0) {
        console.log(data);
        const tableRow = [
          "<tr><th>School Number</th><th>School Code</th><th>School Name</th></tr>"
        ];

        data.forEach(item => {
          tableRow.push(
            `<tr><td>${item.PeOrgNr}</td><td>${item.Skolenhetskod}</td><td>${item.Skolenhetsnamn}</td></tr>`
          );
        });
        document.getElementById("school_table").innerHTML = tableRow.join(" ");
        document.getElementById("SchoolTable").style.display = "";
      }
    });
}

