function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function goBack(urlPreviousPage) {
  if(urlPreviousPage)
    window.location.href = urlPreviousPage;
  else
    window.history.back();
}

function showErrorMessage(errorMessage) {
  Swal.fire({
    title: 'Error!',
    text: errorMessage,
    icon: 'error',
    confirmButtonText: 'Ok'
  });
}

function showInfoMessage(infoMessage) {
  Swal.fire({
    title: 'Information',
    text: infoMessage,
    icon: 'info',
    confirmButtonText: 'Ok'
  });
}

function showSuccessMessage(successMessage) {
  Swal.fire({
    title: 'Success!',
    text: successMessage,
    icon: 'success',
    confirmButtonText: 'Ok'
  });
}

function showMessage(type, message) {
  if(type == "success")
    showSuccessMessage(message);
  else if (type == "info")
    showInfoMessage(message);
  else if (type == "error")
    showErrorMessage(message);
}
