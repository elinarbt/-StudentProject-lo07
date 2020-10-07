function ouvrirMenu(obj) {
    obj.classList.toggle("ouvert");
    document.getElementsByClassName("menu")[0].classList.toggle("ouvert");
    document.getElementsByClassName("menu")[0].classList.toggle("ferme");
    fermerSousMenu();
}

let sousMenuOuvert = null;
let sousMenuLien = null;

function ouvrirSousMenu(obj, lien) {
    if (sousMenuOuvert && sousMenuOuvert != obj.parentNode) {
        fermerSousMenu();
    }

    sousMenuOuvert = obj.parentNode;
    sousMenuOuvert.classList.add("submenu-ouvert");
    sousMenuLien = obj.childNodes[1];

    console.log(lien);
    setTimeout(() => {
        // obj.childNodes[1].href = lien
    }, 100)

}

function fermerSousMenu() {
    // sousMenuLien.href = 'javascript: void(0)';
    sousMenuOuvert.classList.remove("submenu-ouvert");

}