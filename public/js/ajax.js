function setseen(id) {
    var xmlhttp = new XMLHttpRequest();
        
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(id).className = "watched";
            console.log(xmlhttp.responseText);
        }
    };
    xmlhttp.open("GET", "/public/ajax/setseen/" + id, true);
    xmlhttp.send();
}
