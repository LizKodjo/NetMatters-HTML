const form = document.getElementById('contact-form');
const fullName = document.getElementById('name');
const company = document.getElementById('company');
const email = document.getElementById('email');
const tel = document.getElementById('telephone');
const message = document.getElementById('message');
const errorMsg = document.getElementsByClassName('form-control');
const hiddenQues = document.querySelector('.question-text');
const question = document.querySelector('.question');
const answer = document.querySelector('.answer');
const checked = document.querySelector('.pretty-checkbox');
const emailpattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const telpattern = /^\+?(?:\d\s?){10,12}$/;

// prevent form default
// if (form) {
//     form.addEventListener('submit', e => {
//         e.preventDefault();
//         validateForm();
//     });
// }



// set error

const setError = (element) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.has-error');

    inputControl.classList.add('has-error');

};

const setSuccess = (element) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.has-error');

    inputControl.classList.remove('has-error');
}

//front end validation
function validateForm(e) {
    // get the values and sanitize 
    const nameValue = fullName.value.trim();
    const companyValue = company.value.trim();
    const emailValue = email.value.trim();
    const telValue = tel.value.trim();



    if (!nameValue || !nameValue.match(/^[A-z ,.'-]+$/i)) {
        setError(fullName);
    } else {
        setSuccess(fullName);
    }

    if (!emailValue || !emailValue.match(emailpattern)) {
        setError(email);
    } else {
        setSuccess(email);
    }

    if (!telValue || !telValue.match(telpattern)) {
        setError(tel);
    } else {
        setSuccess(tel);
    }
}


// accordion

if (question) {
    question.addEventListener("click", (e) => {
        e.preventDefault();
        question.classList.toggle("active");
        answer.style.display = "block";
    });
}
