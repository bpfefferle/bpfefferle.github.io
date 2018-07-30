// Responsive navigation bar.
let hamburger = document.getElementById('hamburger');
let nav_list = document.querySelector('.nav-ul');

// If the hamburger icon is clicked.
hamburger.addEventListener('click', function(){
	// Change the class of nav ul.
	if (nav_list.className === 'nav-ul'){
		nav_list.className = 'nav-ul nav-mobile';
	} else{
		nav_list.className = 'nav-ul';
	}
});

// Typewriter on landing page.
let options = {
  strings: ["HTML5", "CSS3", "JavaScript", "Bootstrap", "jQuery", "SASS", "Photoshop", "Sony Vegas"],
  typeSpeed: 60,
  showCursor: false,
  loop: true,
  fadeOut: true
}

let typed = new Typed(".typed-js", options);
