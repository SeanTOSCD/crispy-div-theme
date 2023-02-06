const accordionItems = document.querySelectorAll(".custom-development-example-accordion-item");

accordionItems.forEach(item => {
	const header = item.querySelector(".custom-development-example-accordion-item-header");
	const content = item.querySelector(".custom-development-example-accordion-item-content");

	header.addEventListener("click", () => {
		if (!header.classList.contains("active")) {
			accordionItems.forEach(otherItem => {
				otherItem.querySelector(".custom-development-example-accordion-item-header").classList.remove('active');
			});
			header.classList.add("active");
		} else {
			header.classList.remove("active");
		}
	});
});
