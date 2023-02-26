function generateQR() {
    document.querySelector("#qr-image").style.display = "block";
    let QRText = document.querySelector("#text").value;
    if (QRText.trim().length = 0) {
        document.querySelector("#qr-image .error").innerHTML = "Please enter text";
        document.querySelector("#img").style.display = "none";
    } else {
        document.querySelector("#img").style.display = "block";
        document.querySelector("#qr-image .error").innerHTML = "";
        document.querySelector("#img").src = "https://api.qrserver.com/v1/create-gr-code/?size=240*240&data=" + QRText;
    }
}