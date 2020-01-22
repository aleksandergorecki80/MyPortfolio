// Inpyt files
const name = document.getElementById('name');
const email = document.getElementById('email');
const subject = document.getElementById('subject');
const message = document.getElementById('message');

// Form
const contactForm = document.getElementById('contact');


// Validation clors
const green = '#4AF50';
const red = '#F44336';

console.log('name' , name);
name.addEventListener('keyup', validateName);
email.addEventListener('keyup', validateEmail);
subject.addEventListener('keyup', validateSubject);

name.addEventListener('blur', validateName);
email.addEventListener('blur', validateEmail);
subject.addEventListener('blur', validateSubject);





//  Validators
function validateName(){
    //Check if is emty
    if(checkIfEmpty(name)) return;

    // If has only letters and digits
    if(!checkIfOnlyLetters(name)) return;

    // Check if is longer than ...
    if(!meetLength(name, 3, 20)) return;
    return true;  
}

function validateSubject(){
    //Check if is emty
    if(checkIfEmpty(subject)) return;

    // If has only letters and digits
    if(!checkIfLettersAndDigits(subject)) return;

    // Check if is longer than ...
    if(!meetLength(subject, 3, 20)) return;
    return true;  
}


function validateEmail(){
    if(checkIfEmpty(email)) return;
    if(!containCharacters(email)) return;
    return true;
}

function containCharacters(field){
    const regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(field.value.match(regEx)){
        setValid(field);
        return true;
    } else {
        setInvalid(field, `${field.name} invalid`);
    }
}

function checkIfEmpty(field){
    if(isEmpty(field.value.trim())){
        // set field invalid
        setInvalid(field, `${field.name} must not be emty`);
        return true;
    } else {
        // set field valid
        setValid(field);
        return false;
    }
}

function isEmpty(value){
    // if (value === '') return true;
    // return false;
    return (value === '') ? true : false;
}

function setInvalid(field, message){
    field.className = 'input-error';
    field.nextElementSibling.innerHTML = message;
    field.nextElementSibling.style.color = red;
    
}

function setValid(field, message){
    field.className = 'input-correct';
    field.nextElementSibling.innerHTML = '';
    // field.nextElementSibling.style.color = green;
    
}

function checkIfOnlyLetters(field){
    if(/^[a-zA-Z ]+$/.test(field.value)){
        setValid(field);
        return true;
    } else {
        setInvalid(field, `${field.name} must contain only letters.`);
        return false;
    }
}

function checkIfLettersAndDigits(field){
    if(/^[a-zA-Z0-9 ]+$/.test(field.value)){
        setValid(field);
        return true;
    } else {
        setInvalid(field, `${field.name} must contain only letters and digits.`);
        return false;
    }
}

function meetLength(field, minLength, maxLength){
    if(field.value.length >= minLength && field.value.length < maxLength){
        setValid(field);
        return true;
    } else if (field.value.length < minLength){
        setInvalid(field, `${field.name} must be at least ${minLength} characters long`);
        return false;
    } else {
        setInvalid(field, `${field.name} can not be longer than ${maxLength} characters.`);
        return false;
    }
}

// console.log(name, email, subject, message);