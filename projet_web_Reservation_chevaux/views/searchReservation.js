function myFunction() {
  var input, filter, table, tr, td, i, txtValue,k,r1,r2,r3,r4,r5;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
    r2 = document.getElementById("r2");

 if (r2.value == "date") {
	k=0;
	
}
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[k];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}