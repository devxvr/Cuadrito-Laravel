window.addEventListener('DOMContentLoaded', event => {
    const datatablesCustom = document.getElementById('datatablesCustom');
    if (datatablesCustom) {
        new simpleDatatables.DataTable(datatablesCustom);
    }

    const datatablesRegular = document.getElementById('datatablesRegular');
    if (datatablesRegular) {
        new simpleDatatables.DataTable(datatablesRegular);
    }
});