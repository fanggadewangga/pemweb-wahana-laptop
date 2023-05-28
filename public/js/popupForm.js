const openPopupButton = document.getElementById("openPopup");
const popup = document.getElementById("popup");
const popupOverlay = document.getElementById("popup-overlay");

openPopupButton.addEventListener("click", function () {
    popup.style.display = "block";
    popupOverlay.style.display = "flex";
});

popupOverlay.addEventListener("click", function (event) {
    if (event.target === popupOverlay) {
        popup.style.display = "none";
        popupOverlay.style.display = "none";
    }
});
