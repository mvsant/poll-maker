const submitButton = document.querySelector('#submitButton');
const radios = document.querySelectorAll('input[type=radio]');
let radiosChecked = document.querySelectorAll('input[type=radio]:checked');

if (!radiosChecked.length) {
    submitButton.setAttribute("disabled", "disabled");
}

radios.forEach(function (element) {
    element.addEventListener("click", () => {
        radiosChecked = document.querySelectorAll('input[type=radio]:checked');
        if (radiosChecked.length) {
            //enable the button by removing the attribute
            submitButton.removeAttribute("disabled");
        }
    });
});