// select inputs 
const submitBtn = document.querySelector('.submit-btn');
const Name = document.querySelector('#name');
const password = document.querySelector('#password');

Name.addEventListener('blur', validationName);
password.addEventListener('blur', validationPassword);


function validationName() {
    const regEx_Name = /^[A-Z]{1}[a-z]{2,}$/;

    if (!regEx_Name.test(Name.value)) {
        notValid(Name);
        alert('Name must begin with uppercase and more than two characters');
    } else {
        valid(Name);
    }
}

function validationPassword() {
    const regEx_password = /^[A-Z]{1}[a-z]{6,}[0-9]{1,}$/;

    if (!regEx_password.test(password.value)) {
        notValid(password);
        alert('Password must begin with uppercase more than 6 characters and ends with number');
    } else {
        valid(password);
    }
}



function notValid(input) {
    input.classList.add('notValid');
    input.classList.remove('Valid');
}

function valid(input) {
    input.classList.remove('notValid');
    input.classList.add('Valid');
}

// submitBtn.addEventListener('submit', (e) => {
//     e.preventDefault();
// });

