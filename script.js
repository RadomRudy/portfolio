var popups = [];

function openModal(popupName) {
  popups[popupName].overlay.style.display = "block";
}

function closePopup(popupName) {
  popups[popupName].overlay.style.display = "none";
}

popups["popup1"] = {
  btnpopup: document.getElementById("btnPopup1"),
  btnclose: document.getElementById("btnClose1"),
  overlay: document.getElementById("overlay1"),
};
popups["popup1"].btnpopup.addEventListener("click", function () {
  openModal("popup1");
});
popups["popup1"].btnclose.addEventListener("click", function () {
  closePopup("popup1");
});

popups["popup2"] = {
  btnpopup: document.getElementById("btnPopup2"),
  btnclose: document.getElementById("btnClose2"),
  overlay: document.getElementById("overlay2"),
};
popups["popup2"].btnpopup.addEventListener("click", function () {
  openModal("popup2");
});
popups["popup2"].btnclose.addEventListener("click", function () {
  closePopup("popup2");
});

popups["popup3"] = {
  btnpopup: document.getElementById("btnPopup3"),
  btnclose: document.getElementById("btnClose3"),
  overlay: document.getElementById("overlay3"),
};
popups["popup3"].btnpopup.addEventListener("click", function () {
  openModal("popup3");
});
popups["popup3"].btnclose.addEventListener("click", function () {
  closePopup("popup3");
});
