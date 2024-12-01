window.addEventListener('DOMContentLoaded', event => {
    const datatablesProduct = document.getElementById('datatablesProduct');
    if (datatablesProduct) {
        new simpleDatatables.DataTable(datatablesProduct);
    }

    const datatablesAdons = document.getElementById('datatablesAdons');
    if (datatablesAdons) {
        new simpleDatatables.DataTable(datatablesAdons);
    }
});