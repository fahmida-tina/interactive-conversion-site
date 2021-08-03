  function getresults(pForm){
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function();{
            document.getElementById("result").innerHTML = JSON.parse(this.responseText)[2].History;
        }
        xhttp.open("Get",pFrom.action + "Rate=" + pForm.History.value, true);
        xhttp.send();
}