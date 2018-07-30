// Responsive navigation bar.
let hamburger = document.getElementById('hamburger');
let nav_list = document.querySelector('.nav-ul');

// If the hamburger icon is clicked.
hamburger.addEventListener('click', function(){
	// Change the class of nav ul.
	if (nav_list.className === 'nav-ul'){
		nav_list.className = 'nav-ul nav-mobile';
		$('.landing-page-card').hide();
	} else{
		nav_list.className = 'nav-ul';
		$('.landing-page-card').show();
	}
});

// Typewriter on landing page.
let options = {
  strings: ["HTML5", "CSS3", "JavaScript", "Bootstrap 4", "jQuery", "SASS"],
  typeSpeed: 60,
  showCursor: false,
  loop: true,
  fadeOut: true
}

let typed = new Typed(".typed-js", options);
