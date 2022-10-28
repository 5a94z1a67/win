function lf4cd() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("bg1").innerHTML =
        this.responseText;
        }
    };
    xhttp.open("GET", "frdls357.php", true);
    xhttp.send();
}