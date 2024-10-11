export default function form() {
	const inputs = document.querySelectorAll(".form--input__input") as NodeListOf<HTMLInputElement>;

	if (!inputs) return;

    console.log("--- Form Loaded ---");

	inputs.forEach((input) => {
		input.addEventListener("input", () => {
			if (input.value.trim() !== "") {
				input.classList.add("has-content");
				if (input.classList.contains("form--input__textarea")) {
					input.setAttribute("rows", "4");
				}
			} else {
				input.classList.remove("has-content");
				if (input.classList.contains("form--input__textarea")) {
					input.setAttribute("rows", "1");
				}
			}
		});

		// Trigger the input event initially to check if the textarea has content on page load
		input.dispatchEvent(new Event("input"));
	});
}