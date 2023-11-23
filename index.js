document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let form = document.getElementById("contactForm");
    let formData = new FormData(form);

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost:5500/envoi_formulaire.php", true);
;
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
                form.reset(); // Réinitialiser les champs du formulaire
            } else {
                console.error("Erreur lors de l'envoi du formulaire.");
            }
        }
    };
  

    xhr.send(formData);
});
