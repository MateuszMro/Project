import 'https://unpkg.com/flowbite@1.4.0/dist/flowbite.js';


//Funkcja co navbaru - rozwijanie menu
document.addEventListener("DOMContentLoaded", function() {
    // Pobierz elementy dropdownu użytkownika
    var userDropdownBtn = document.getElementById("user-dropdown-btn");
    var userDropdownMenu = document.getElementById("user-dropdown-menu");

    // Pokaż lub ukryj dropdown po kliknięciu na przycisk
    userDropdownBtn.addEventListener("click", function() {
        userDropdownMenu.classList.toggle("hidden");
    });

    // Ukryj dropdown po kliknięciu poza dropdownem
    document.addEventListener("click", function(event) {
        if (!userDropdownMenu.contains(event.target) && !userDropdownBtn.contains(event.target)) {
            userDropdownMenu.classList.add("hidden");
        }
    });
});

//Funkcja do rozwijania zawartości w Ostatnie Projekty
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



