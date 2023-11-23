
// Clients tooltip script

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

// Creating cookie
// Function to create cookie
setCookie = (cName, cValue, expDays) => {
    let date = new Date();
    // calculate date
    date.setTime(date.getTime() + (expDays * 24 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    // create and save cookie at root
    document.cookie = cName + "=" + cValue + ";" + expires + "; path=/";
}

// Function to check if cookie is available
getCookie = (cName) => {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArr = cDecoded.split("; ");

    let value;
    cArr.forEach(val => {
        if(val.indexOf(name) === 0) value = val.substring(name.length);
    })

    return value;

}

// Message disappeares when cookie is accepted
document.querySelector('#acceptcookie').addEventListener("click", () => {
    document.querySelector("#myModal").style.display = "none";

    setCookie("cookieLiz", true, 10);
})

// check cookie

cookieMessage = () => {
    if (!getCookie("cookieLiz"))
    document.querySelector('#myModal').style.display = "block";
}
window.addEventListener("load", cookieMessage);