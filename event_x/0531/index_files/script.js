document.addEventListener('DOMContentLoaded', () => {
	//public value
	const screenHeight = document.documentElement.clientHeight;

	// click to scroll
	// const scrollBtn = document.getElementById('scroll-btn');
	// const mainContent = document.getElementById('wrapper');
	// scrollBtn.addEventListener('click', function(e) {
	// 	e.preventDefault();
	// 	const offset = window.pageYOffset;
	// 	const target_position = mainContent.getBoundingClientRect().top;
	// 	const position = offset + target_position;
	// 	window.scrollTo({
	// 		top: position,
	// 		behavior: 'smooth'
	// 	});
	// });


	//fade floating btn
	const floatingBtn = document.getElementById('floating-btn');
	window.addEventListener('scroll', () => {
		const windowScrollY = window.scrollY;
		if(windowScrollY >= screenHeight) {
			if(!floatingBtn.classList.contains('show')) {
				floatingBtn.classList.add('show');
			}
		}else {
			if(floatingBtn.classList.contains('show')) {
				floatingBtn.classList.remove('show');
			}
		}
	});


	//scroll to fade-section
	const sections = document.getElementsByClassName('fade-section');
	const sectionLength = sections.length;

	function scrollFadeIn() {

		for(let i = 0; i < sectionLength; i++) {
			const section = sections[i];

			function fadeIn() {
				section.classList.add('show');
				window.removeEventListener('scroll', onScroll);
			}

			const pageYOffset = window.pageYOffset;
			const sectionTop = section.getBoundingClientRect().top;
			if(sectionTop - screenHeight <= 100) {
				window.setTimeout(fadeIn, 1200);
			}

			function onScroll() {
				const sectionTop = section.getBoundingClientRect().top;
				// IF section has not class 'show' AND section reaching the position
				if (
					!section.classList.contains('show') &&
					sectionTop - screenHeight <= 0
				) {
				    fadeIn();
				}
			}

			window.addEventListener('scroll', onScroll);
		}
	}

	scrollFadeIn();


	// fade toggle news
	const toggleBtn = document.getElementById('news-cnt_toggle-btn');
	const hideNewsBox = document.getElementById('past-news-box');
	const hideNewsBoxHeight = hideNewsBox.clientHeight;
	let newsFlg = false;

	hideNewsBox.style.height = 0;

	toggleBtn.addEventListener('click', (e) => {
		e.preventDefault();

		if(hideNewsBox.className == 'open') {
			hideNewsBox.style.height = 0;
		}else {
			hideNewsBox.style.height = `${hideNewsBoxHeight}px`;
		}

		hideNewsBox.classList.toggle('open');
		toggleBtn.classList.toggle('open');
		newsFlg = !newsFlg
	});


	// toggle morenews-cnt
	const fadeCnt = document.getElementById('fade-cnt');
	const moreNewsBtn = document.getElementsByClassName('news-cnt_btn');
	for(let i = 0; i < moreNewsBtn.length; i++) {
		const btn = moreNewsBtn[i];
		btn.addEventListener('click', (e) => {
			e.preventDefault();

			console.log(btn);
			const title =  btn.getElementsByClassName('news-title')[0].textContent;
			const date = btn.getElementsByClassName('news-cnt_date')[0].textContent;
			const content  = btn.getElementsByClassName('news-cnt_text')[0].textContent;

			document.getElementById('morenews-title').textContent = title;
			document.getElementById('morenews-cnt_date').textContent = date;
			document.getElementById('morenews-cnt_text').textContent = content;

			fadeCnt.classList.add('show');
			// document.getElementById('morenews-title').textContent('sample title');
		});
	}

	const closeBtn = document.getElementById('morenews-cnt_close-btn');
	const overlay = document.getElementById('overlay');
	closeBtn.addEventListener('click', (e) => {
		e.preventDefault();
		fadeCnt.classList.remove('show');
	});
	overlay.addEventListener('click', () => {
		fadeCnt.classList.remove('show');
	});


	// count down timer
	const dateTimeBox = document.getElementById('date-time');
	let dateTime = dateTimeBox.querySelectorAll('p')[0].textContent;
	dateTime = dateTime.split([' ']);	// dataTime = ["days", "time"]

	let days = dateTime[0].split(['/']);	// days = ["date", "month", "year"]
	const date = days[0];
	const month = days[1];
	const year = days[2];

	let time = `${dateTime[1]}:00`;	// zero padding

	const endDate = new Date(`${year}/${month}/${date} ${time}`);
	const endTime = endDate.getTime();

	const dayMath = 1000 * 60 * 60 * 24;
	const hourMath = 1000 * 60 * 60;
	const minutesMath = 1000 * 60;
	const secondMath = 1000;

	function countDownTimer() {
		const nowDate = new Date();
		const nowTime = nowDate.getTime();
		let diff2Times = endTime - nowTime;

		const diffDays = diff2Times / dayMath;
		diff2Times = diff2Times % dayMath;

		const diffHours = diff2Times / hourMath;
		diff2Times = diff2Times % hourMath;

		const diffMinutes = diff2Times / minutesMath;
		diff2Times = diff2Times % minutesMath;

		const diffSeconds = diff2Times / secondMath;

		const numBox = document.getElementsByClassName('num');
		numBox[0].innerHTML = zeroPadding(diffDays);
		numBox[1].innerHTML = zeroPadding(diffHours);
		numBox[2].innerHTML = zeroPadding(diffMinutes);
		numBox[3].innerHTML = zeroPadding(diffSeconds);
	}

	function zeroPadding(num) {
		num = Math.floor(num);
		if(num < 10) {
			num = '0' + num;
		}
		return num;
	}

	setInterval(function() {
		countDownTimer();
	}, 1000);
}, false);
