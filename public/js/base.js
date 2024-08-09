import 'https://unpkg.com/flowbite@1.4.0/dist/flowbite.js';


//Funkcja do navbaru - rozwijanie menu
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


document.getElementById('menu-toggle').addEventListener('click', function() {
    var menu = document.getElementById('menu');
    menu.classList.toggle('hidden');
});





