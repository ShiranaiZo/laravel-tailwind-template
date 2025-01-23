window.toggleMobileSubmenu = function(element) {
    const submenu = element.nextElementSibling;
    const arrow = element.querySelector('svg');
    submenu.classList.toggle('hidden');
    arrow.classList.toggle('rotate-180');
}

document.querySelectorAll(".navbar-menu__item.dropdown").forEach(button => {
    button.addEventListener("click", function () {
        toggleMobileSubmenu(this);
    });
});
