//------------------------------------------------------------------------------ VALIDATION VON RANGE
function validateRange() {
  //Prüfe, ob der Range Slider verändert wurde.
  if (!sliderHasChanged()) {
    setWarning("Bitte verändere die position des Slider.");
    //Stoppt den Sprung (action) auf die nächste Sente.
    return false;
  } else return true;
}
function sliderHasChanged() {
  //Hole das hiddenInputElement "range-slider-changed" und gibt true zurück
  // fals die "1" eingetragen ist.sonst gibt false zuruck
  let hiddenInputElement = document.getElementById("range-slider-changed");
  if (hiddenInputElement.value === "1") return true;
  else return false;
}

function sliderChanged() {
  // Get hiddenInputElement "range-slider-changed" and set its value to 1.
  let hiddenInputElement = document.getElementById("range-slider-changed");
  hiddenInputElement.value = "1";
}

//------------------------------------------------------------------------------ VALIDATION VON NUMMER
var hiddenNumber = document.getElementById("input-number-changed");
function validateNumber() {
  if (!numberHasChanged()) {
    setWarning("Bitte einen Nummer wählen.");
    return false;
  } else return true;
}

function numberHasChanged() {
  if (hiddenNumber.value === "1") return true;
  else return false;
}

function numberChanged() {
  // Get hiddenInputElement "range-slider-changed" and set its value to 1.
  hiddenNumber.value = "1";
}

//------------------------------------------------------------------------------ VALIDATION VON CHECK-BOX
function validateCheck() {
  var choice = new Array();
  var checked = !!document.querySelector(
    ".check-content input[type=checkbox]:checked"
  );
  console.log(checked);
  if (!checked) {
    alert("Bitte mindesten ein Checkbox whälen");
    return false;
  } else return true;
}

//------------------------------------------------------------------------------ VALIDATION VON CHECK-RADIO
function validateRadios() {
  var resJa = document.getElementsByClassName(".resJa");
  var resNein = document.getElementsByClassName(".resNein");
  console.log(resJa);
  if (!resJa.checked && !resNein.checked) {
    alert("Bitte mindesten ein Checkbox whälen");
    return false;
  } else return true;
}
function validateRadios() {
  var checked = !!document.querySelector(
    ".radio-container input[type=radio]:checked"
  );
  console.log(checked);
  if (!checked) {
    alert("Bitte mindesten ein Checkbox whälen");
    return false;
  } else return true;
}

//------------------------------------------------------------------------------ ALERT - WARNING
function setWarning(text) {
  let warningElement = document.getElementById("validation-warning");
  warningElement.innerText = text;
}
