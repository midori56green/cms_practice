// const screenHeight = window.innerHeight;
// const section = Array.from(document.getElementsByClassName('section'));

// click to scroll
const scrollBtn = document.getElementById('scroll-btn');
const mainContent = document.getElementById('main');
scrollBtn.addEventListener('click', function(e) {
	e.preventDefault();
	const offset = window.pageYOffset;
	const target_position = mainContent.getBoundingClientRect().top;
	const position = offset + target_position;
	window.scrollTo({
		top: position,
		behavior: 'smooth'
	});
});

//scroll to screen
const sections = document.getElementsByClassName('section');
const sectionLength = sections.length;

function scrollFadeIn() {
	for(let i = 0; i < sectionLength; i++) {
		const section = sections[i];
		function fadeIn() {
			section.classList.add('fade-in');
			window.removeEventListener('scroll', onScroll);
		}

		function onScroll() {
			if (section.getBoundingClientRect().top - window.innerHeight <= 0) {
			    fadeIn();
			}
		}

		window.addEventListener('scroll', onScroll);
	}
}
scrollFadeIn();

// toggle news
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

		fadeCnt.classList.add('show');
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
const endDate = new Date('2021/10/19 18:00:00');
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

	document.getElementById('day').innerHTML = addjustNum(diffDays);
	document.getElementById('hour').innerHTML = addjustNum(diffHours);
	document.getElementById('minutes').innerHTML = addjustNum(diffMinutes);
	document.getElementById('second').innerHTML = addjustNum(diffSeconds);
}
function addjustNum(num) {
	num = Math.floor(num);
	if(num < 10) {
		num = '0' + num;
	}
	return num;
}
setInterval(function() {
	countDownTimer();
}, 1000);