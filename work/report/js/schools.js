const showSchoolButton = document.getElementById("Button");
showSchoolButton.onclick = showTable;
document.getElementById("SchoolTable").style.display = "none";

function showTable() {
  fetch("https://api.myjson.com/bins/eimmi")
    .then(res => res.json())
    .then(data => {
      if (data && data.length > 0) {
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









