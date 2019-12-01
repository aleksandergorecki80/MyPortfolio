/* jshint esversion: 6 */


// function CustomValidation(){
//     this.invalidities = [];
// };

// CustomValidation.prototype = {
//     addInvalidity: function(){

//     },
//     getInvalidities: function(){

//     },
//     checkValidity: function(){

//     }
// }

class CustomValidation {
    constructor(field){
        this.field = field;
        this.invalidities = [];
    }
    addInvalidity(message){
      this.invalidities.push(message);
      console.log('kki');
    };
    getInvalidities(){
      return this.invalidities.join('. \n');
    };
    // Checking if put informations maches
    checkValidity(input){
           
      // checking if input is longer than 3
      if(input.value.length < 5 || input.value.match(/[^a-zA-Z0-9]/g)){
        if(input.value.length < 3){
          this.addInvalidity('This input needs to be at least 3 characters long');
          }else
          {
            this.addInvalidity('Only letters and numbers are allawed.')
          }
        const element = document.querySelector('input[name="name"]');
        element.classList.add('input-error');
        } else {
        const element = document.querySelector('input[name="name"]');
        element.classList.remove('input-error');
      }
 
    }
}

const field = document.querySelector('input[name="name"]');
const nameInput = new CustomValidation(field);


// console.log(nameInput);
console.log(field);
field.addEventListener('keyup', ()=>{
  nameInput.checkValidity(field);
  
});

// class Prostokat {
//     constructor(wysokosc, szerokosc) {
//       this.wysokosc = wysokosc;
//       this.szerokosc= szerokosc;
//     }
//   }

//   var p = new Prostokat(4,6); 
  
//   console.log(p.wysokosc);
//   console.log(test.invalidities);