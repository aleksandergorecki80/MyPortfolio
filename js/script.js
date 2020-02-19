// console.log("Hello world");

/*		MODAL 		*/

// Large images
var imagesLinks = ["images/kodilla-certyficate-big.jpg", "images/ocr-certyficate-big.jpg", "images/edexcel-certyficate-big.jpg"];
// Get the modal
var modal = document.getElementById('menu2Modal');
var modalOverlay = document.getElementById('modalOverlay');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var imgs = document.getElementsByClassName('certyficat');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

// //
// img.onclick = function(){
//   modal.style.display = "block";
//   modalOverlay.style.display = 'block';
//   // modalImg.src = this.src;
//   modalImg.src = imagesLinks[0];
//   captionText.innerHTML = this.alt;
// };
// //

//	Function that opens modal
var openModal = function(index){
  modal.style.display = "block";
  modalOverlay.style.display = 'block';
  // modalImg.src = this.src;
  modalImg.src = imagesLinks[index];
  captionText.innerHTML = this.alt;	
};

// Click the smal certificate
// imgs[0].onclick = function(){
// 		openModal(0);
// 	};

// imgs[1].onclick = function(){
// 		openModal(1);
// 	};
// imgs[2].onclick = function(){
// 		openModal(2);
// 	};

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
// span.onclick = function() { 
//   modal.style.display = "none";
//   modalOverlay.style.display = "none";
// };


// When the user clicks on <span> (x) or the background, close the modal
var close = function() { 
  modal.style.display = "none";
  modalOverlay.style.display = "none";
};

span.onclick = close;
modalOverlay.onclick = close;


