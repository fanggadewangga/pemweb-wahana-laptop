const openPopupAddButton = document.getElementById("open-popup-add");
const popupAdd = document.getElementById("popup-add");
const popupAddOverlay = document.getElementById("popup-add-overlay");
const openPopupEditButton = document.getElementById("open-popup-edit");
const popupEdit = document.getElementById("popup-edit");
const popupEditOverlay = document.getElementById("popup-edit-overlay");

function showPopupAddForm(){
    popupAdd.style.display = "block";
    popupAddOverlay.style.display = "flex";
}

function showPopupEditForm() {
    popupEdit.style.display = "block";
    popupEditOverlay.style.display = "flex";
}

popupAddOverlay.addEventListener("click", function (event) {
    if (event.target === popupAddOverlay) {
        popupAdd.style.display = "none";
        popupAddOverlay.style.display = "none";
    }
});

popupEditOverlay.addEventListener("click", function (event) {
    if (event.target === popupEditOverlay) {
        popupEdit.style.display = "none";
        popupEditOverlay.style.display = "none";
    }
});
