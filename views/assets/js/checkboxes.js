var expanded = false;
var select = document.getElementById("select");
console.log(select);


select.addEventListener('click', function() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
})