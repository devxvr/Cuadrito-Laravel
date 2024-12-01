window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }

    const datatablesCustom = document.getElementById('datatablesCustom');
    if (datatablesCustom) {
        new simpleDatatables.DataTable(datatablesCustom);
    }

    const datatablesRegular = document.getElementById('datatablesRegular');
    if (datatablesRegular) {
        new simpleDatatables.DataTable(datatablesRegular);
    }

    const datatablesProduct = document.getElementById('datatablesProduct');
    if (datatablesProduct) {
        new simpleDatatables.DataTable(datatablesProduct);
    }

    const datatablesAdons = document.getElementById('datatablesAdons');
    if (datatablesAdons) {
        new simpleDatatables.DataTable(datatablesAdons);
    }
});
