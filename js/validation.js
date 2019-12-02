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


function validateFirstName(){
    //Check if is emty
    if(checkIfEmpty(name)) return;


    // If has only letters and digits


}

function checkIfEmpty(field){
    if(isEmpty(field.value.trim())){
        // set field invalid
        setInvalid(field, `${field.name} must not be emty`);
        return true;
    } else {
        // set field valid
        setInvalid(field);
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
console.log(name, email, subject, message);