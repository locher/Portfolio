document.addEventListener('DOMContentLoaded', () => {

    const info = document.getElementById('info')

    let posX = 0, posY = 0

    document.addEventListener("mousemove", (e) => {
        let mouseX = e.clientX;
        let mouseY = e.clientY;

        // Calcul de la distance entre la position actuelle et la nouvelle position de la div suiveur
        let distX = mouseX - posX;
        let distY = mouseY - posY;

        // Ajout de l'inertie en divisant la distance par un facteur de ralentissement
        posX += distX / 5;
        posY += distY / 5;

        // Définition de la position de la div suiveur en utilisant la position calculée avec l'inertie
        info.style.left = posX + "px";
        info.style.top = posY + "px";
    })
})