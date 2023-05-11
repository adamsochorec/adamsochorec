function burgerMenu() {
	var navLinks = document.getElementById("navLinks");
	var burgerIcon = document.getElementById("burgerIcon");
	var barsHyperlink = document.getElementById("barsHyperlink");
	var logoHyperlink = document.getElementById("logoHyperlink");
	if (navLinks.style.display === "flex") {
		navLinks.style.display = "none";
		burgerIcon.style.color = "white";
		logoHyperlink.style.margin = "30px 35px 15px 35px";
	} else {
		navLinks.style.display = "flex";
		burgerIcon.style.color = "gray";
		logoHyperlink.style.margin = "50px 35px 15px 35px";
	}
}

var slideIndex1 = 1;
showSlides1(slideIndex1);

function plusSlides1(n) {
	showSlides1(slideIndex1 += n);
}

function currentSlide1(n) {
	showSlides1(slideIndex1 = n);
}

function showSlides1(n) {
	var i;
	var slides = document.getElementsByClassName("slide1");
	var dots = document.getElementsByClassName("dot1");
	if (n > slides.length) {slideIndex1 = 1;}
	if (n < 1) {slideIndex1 = slides.length;}
	for (i = 0; i < slides.length; i++) {
	slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
	dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex1-1].style.display = "block";
	dots[slideIndex1-1].className += " active";
} 

var slideIndex2 = 1;
showSlides2(slideIndex2);

function plusSlides2(n) {
	showSlides2(slideIndex2 += n);
}

function currentSlide2(n) {
	showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
	var i;
	var slides = document.getElementsByClassName("slide2");
	var dots = document.getElementsByClassName("dot2");
	if (n > slides.length) {slideIndex2 = 1;}
	if (n < 1) {slideIndex2 = slides.length;}
	for (i = 0; i < slides.length; i++) {
	slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
	dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex2-1].style.display = "block";
	dots[slideIndex2-1].className += " active";
} 

var slideIndex3 = 1;
showSlides3(slideIndex3);

function plusSlides3(n) {
	showSlides3(slideIndex3 += n);
}

function currentSlide3(n) {
	showSlides3(slideIndex3 = n);
}

function showSlides3(n) {
	var i;
	var slides = document.getElementsByClassName("slide3");
	var dots = document.getElementsByClassName("dot3");
	if (n > slides.length) {slideIndex3 = 1;}
	if (n < 1) {slideIndex3 = slides.length;}
	for (i = 0; i < slides.length; i++) {
	slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
	dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex3-1].style.display = "block";
	dots[slideIndex3-1].className += " active";
} 