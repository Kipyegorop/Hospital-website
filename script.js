
const menuToggle = document.getElementById('menu-toggle');
const menuOverlay = document.getElementById('menu-overlay');
const menuDropdown = document.getElementById('menu-dropdown');

menuToggle.addEventListener('change', function () {
    if (this.checked) {
        menuOverlay.classList.remove('hidden');
        menuDropdown.classList.remove('hidden');
    } else {
        menuOverlay.classList.add('hidden');
        menuDropdown.classList.add('hidden');
    }
});
