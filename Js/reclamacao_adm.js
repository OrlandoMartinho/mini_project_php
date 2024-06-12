// Modifique a função searchTable
function searchTable() {
  const input = document.getElementById("search-input").value.toLowerCase();
  const table = document.getElementById("dados-recebidos");
  const rows = table.getElementsByTagName("tr");

  for (let i = 0; i < rows.length; i++) {
    const cells = rows[i].getElementsByTagName("td");
    let rowContainsInput = false;

    for (let j = 0; j < cells.length; j++) {
      if (cells[j]) {
        const cellText = cells[j].innerText.toLowerCase();
        if (cellText.includes(input)) {
          rowContainsInput = true;
          break;
        }
      }
    }

    if (rowContainsInput || input == i.toString()) {
      rows[i].style.display = "";
    } else {
      rows[i].style.display = "none";
    }
  }
}
