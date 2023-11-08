// Gestisco la selezione del colore di sfondo
// cerco un elemento con l'ID "backgroundColor" nel HTML e lo restituisco. 
const backgroundColor = document.getElementById("backgroundColor");
backgroundColor.addEventListener("input", function() {
    const selectedColor = backgroundColor.value;
    // Imposto il colore di sfondo del tag body
    document.body.style.backgroundColor = selectedColor; 
});

