<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JS VALIDATION</title>
	<script>
function isvalid() {
  var Rate = document.getElementById("Rate").value;
  var History = document.getElementById("History").value;
  var Search = document.getElementById("Search").value;

  if (Rate == "" || History == "" ||Search =="") {
    alert("Must be filled out");
    return false;
  }
}

</script>
</head>
</html>