
function IsEmpty() {
  if (document.forms['frm'].question.value === "") {
    document.getElementById("spanID").style.display = "inline";
    alert("empty");
    return false;
  }
  return true;
}