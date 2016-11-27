function dataStoragingWarning()
{
    var userWarned = localStorage.getItem("warned");
    if (userWarned == null)
    { 
        var warning = document.createElement("div");
        warning.id = "warning";

        var p = document.createElement("p");
        var text = document.createTextNode('Ta strona przechowuje niektore dane o Tobie, ale nie przejmuj sie. Nacisnij "Ok" aby kontynuowac.');
        p.appendChild(text);

        var button = document.createElement("input");
        button.setAttribute("type", "button");
        button.setAttribute("name", "Ok");
        button.setAttribute("value", "Ok");
        button.className = "button";
        button.onclick = function() { saveDecision() };

        warning.appendChild(p);
        warning.appendChild(button);
        document.querySelector("body").appendChild(warning);
    }
}

function saveDecision()
{
    localStorage.setItem("warned", "yes");
    var warning = document.getElementById("warning");
    warning.style.display = "none";
}