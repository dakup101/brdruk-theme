import GLightbox from "glightbox";
import "glightbox/dist/css/glightbox.min.css";

export default function glightbox() {
	const els = document.querySelectorAll(".glightbox");
	if (!els) return;

	const lightbox = GLightbox({
		selector: ".glightbox",
		touchNavigation: true,
		loop: true,
	});
}