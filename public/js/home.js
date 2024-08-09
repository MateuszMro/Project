//Funkcja do rozwijania zawartości w "Ostatnie Projekty"
function showMore(id) {
    var tekst = document.getElementById("description" + id);
    var button = document.getElementById('showMoreBtn' + id)
    if (tekst.classList.contains("h-20")) {
        tekst.classList.remove("h-20");
        button.innerText = 'Pokaż mniej'
    } else {
        tekst.classList.add("h-20");
        button.innerText = 'Pokaż więcej'
    }
}
window.showMore = showMore;
