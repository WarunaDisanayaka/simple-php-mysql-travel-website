function validateForm() {
    const name = document.getElementById("name").value;
    const location = document.getElementById("location").value;
    const nic = document.getElementById("nic").value;
    const email = document.getElementById("email").value;
    const cnumber = document.getElementById("cnumber").value;
    const dayone = document.getElementById("Dayone").value;

    const nameError = document.getElementById("name-error");
    const locationError = document.getElementById("location-error");
    const nicError = document.getElementById("nic-error");
    const emailError = document.getElementById("email-error");
    const cnumberError = document.getElementById("cnumber-error");
    const dayoneError = document.getElementById("Dayone-error");

    nameError.textContent = "";
    locationError.textContent = "";
    nicError.textContent = "";
    emailError.textContent = "";
    cnumberError.textContent = "";
    dayoneError.textContent = "";

    let isValid = true;

    if (name === "" || /\d/.test(name)) {
        nameError.textContent = "Please enter your name properly.";
        isValid = false;
    }

    if (location === "") {
        locationError.textContent = "Please enter your location.";
        isValid = false;
    }

    if (nic === "") {
        nicError.textContent = "Please enter your NIC/Passport number.";
        isValid = false;
    }

    if (email === "" || !email.includes("@")) {
        emailError.textContent = "Please enter a valid email address.";
        isValid = false;
    }

    if (cnumber === "" || cnumber.length < 10) {
        cnumberError.textContent = "Please enter a valid contact number.";
        isValid = false;
    }

    if (dayone === "") {
        dayoneError.textContent = "Please select a One Day Package.";
        isValid = false;
    }

    return isValid;
}
