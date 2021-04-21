const scrollBtn = document.getElementsByClassName('scroll-btn');
console.log(window.height());

// click * .scroll-btn
scrollBtn.addEventListener('click', (e) => {
	e.preventListener(e);
	console.log('click');
});