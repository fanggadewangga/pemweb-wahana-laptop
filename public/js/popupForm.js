const openPopupAddButton = document.getElementById("open-popup-add");
const popup = document.getElementById("popup");
const popupOverlay = document.getElementById("popup-overlay");


function showPopupForm(){
    popup.style.display = "block";
    popupOverlay.style.display = "flex";
}


popupOverlay.addEventListener("click", function (event) {
    if (event.target === popupOverlay) {
        popup.style.display = "none";
        popupOverlay.style.display = "none";
        recoverField();
    }
});

function recoverField(){
    // Assuming your form has an ID attribute, e.g., "myForm"
    const form = document.getElementById("popup-form");

    form.action = "/barang/add"

    // Reset all input fields in the form
    const inputFields = form.querySelectorAll("input");
    inputFields.forEach((input) => {
        input.value = "";
        input.readOnly = false;
    });

    document.getElementById("popup-form-title").textContent = "Add New Barang";
    document.getElementById("popup-form-button").textContent = "Add";
}



