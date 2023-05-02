<!DOCTYPE html>
<html>
<head>
    <title>JavaScript Form Validation Demo</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
<body>
    <div class="container">

        <form id="signup" class="form">
            <h1>Sign Up</h1>
            <div class="form-field">
                <label for="username">Username:</label>
                <input type="text" name="name" id="name" autocomplete="off">
                <small></small>
            </div>

            <div class="form-field">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" autocomplete="off">
                <small></small>
            </div>

            <div class="form-field">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" autocomplete="off">
                <small></small>
            </div>


            <div class="form-field">
                <label for="msg">Msg:</label>
                <input type="text" name="msg" id="msg" autocomplete="off">
                <small></small>
            </div>

            <button type="submit" name="submit">Send</button>

        </form>
    </div>

    

    <script>
    const usernameEl = document.querySelector('#name');
    const emailEl = document.querySelector('#email');
    const phoneEl = document.querySelector('#phone');
    const MsgEl = document.querySelector('#msg');

    const form = document.querySelector('#signup');


// ---------- Input Feild Checking ------------- 

const checkUsername = () => {

    let valid = false;

    const min = 3,
        max = 25;

    const username = usernameEl.value.trim();

    if (!isRequired(username)) {
        showError(usernameEl, 'Username cannot be blank.');
    } else if (!isBetween(username.length, min, max)) {
        showError(usernameEl, `Username must be between ${min} and ${max} characters.`)
    } else {
        showSuccess(usernameEl);
        valid = true;
    }
    return valid;
};

const checkEmail = () => {
    let valid = false;
    const email = emailEl.value.trim();
    if (!isRequired(email)) {
        showError(emailEl, 'Email cannot be blank.');
    } else if (!isEmailValid(email)) {
        showError(emailEl, 'Email is not valid.')
    } else {
        showSuccess(emailEl);
        valid = true;
    }
    return valid;
};

const checkPhoneNumber = () => {
    let valid = false;
    const phone = phoneEl.value.trim();
    if (!isRequired(phone)) {
        showError(phoneEl, 'Phone Number cannot be blank.');
    } else if (!isPhoneNumber(phone)) {
        showError(phoneEl, 'Phone Number is not valid.')
    } else {
        showSuccess(phoneEl);
        valid = true;
    }
    return valid;
};

const checkMsg = () => {

    let valid = false;

    const min = 3,
        max = 500;

    const Msg_val = MsgEl.value.trim();

    if (!isRequired(Msg_val)) {
        showError(MsgEl, 'Message cannot be blank.');
    } else if (!isBetween(Msg_val.length, min, max)) {
        showError(MsgEl, `Message must be between ${min} and ${max} characters.`)
    } else {
        showSuccess(MsgEl);
        valid = true;
    }
    return valid;
};

// ----------- Functionality ------------------

const isEmailValid = (email) => {
    const rex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return rex.test(email);
};

const isPhoneNumber = (phone) => {
    const re = /^\d{10}$/;
    return re.test(phone);
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;

const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // add the error class
    formField.classList.remove('success');
    formField.classList.add('error');

    // show the error message
    const error = formField.querySelector('small');
    error.textContent = message;
};

const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;

    // remove the error class
    formField.classList.remove('error');
    formField.classList.add('success');

    // hide the error message
    const error = formField.querySelector('small');
    error.textContent = '';
}


// --------- Eventes ---------------- 

form.addEventListener('submit', function (e) {
    // prevent the form from submitting
    e.preventDefault();

    // validate fields
    let isUsernameValid = checkUsername(),
        isEmailValid = checkEmail(),
        isPhoneValid = checkPhoneNumber();
        isMsgValid = checkMsg();

    let isFormValid = isUsernameValid &&
        isEmailValid &&
        isPhoneValid &&
        isMsgValid;

    // submit to the server if the form is valid
    if (isFormValid) {
        // window.location.reload(true);
        // console.log("OK");
        form.setAttribute("method", "POST"),
        form.setAttribute("action", "PHP_Mail/submit.php");
        console.log("Hello");
    }
});


const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'username':
            checkUsername();
            break;
        case 'email':
            checkEmail();
            break;
        case 'phone':
            checkPhoneNumber();
            break;
        case 'msg':
            checkPhoneNumber();
            break;
    }
}));
    </script>
</body>
</html>