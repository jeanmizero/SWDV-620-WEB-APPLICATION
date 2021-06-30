const nav = document.querySelector("#header-hero-container");
window.addEventListener("scroll", fixNav);

function fixNav() {
	if (window.screenY > nav.offsetHeight + 150) {
	} else {
		nav.classList.remove("active");
	}
}
