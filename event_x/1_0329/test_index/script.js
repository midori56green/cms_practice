const scrollBtn = document.getElementById('scroll-btn');
const mainContent = document.getElementById('main');

// click * .scroll-btn
scrollBtn.addEventListener('click', function(e) {
	e.preventDefault(e);
	const offset = window.pageYOffset;
	const target_position = mainContent.getBoundingClientRect().top;
	const position = offset + target_position;
	window.scrollTo({
		top: position,
		behavior: 'smooth'
	});
});