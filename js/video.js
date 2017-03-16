// JavaScript Document

(function() {
	console.log("file loaded...");
var video = document.querySelector('#clockVideo'),
		siteChooser = document.querySelector('#webPicker'),
		signInForm  = document.querySelector('#signInForm');

function openSideForm() {
	siteChooser.style.transition = "1.3s";
	siteChooser.style.width = "80%";
	siteChooser.style.padding = "55px 0px";
	
	signInForm.style.transitionDelay = "2s";
	signInForm.style.transition = "1.5s";
	signInForm.style.opacity = "1";
	signInForm.style.height = "auto";
}

video.addEventListener("ended", openSideForm);
})();
