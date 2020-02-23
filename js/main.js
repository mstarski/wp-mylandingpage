jQuery(document).ready(function($) {
	// Init slick carousel
	$("#s5carousel").slick({
		centerMode: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		variableWidth: true,
		variableHeight: true,
		zIndex: 1000,
	});

	//Handle section 6 quotes section

	$(".section-6__client-thumbnail").on("click", function() {
		const photo = $(".section-6__client-photo");
		const quote = $(".section-6__quote p.quote");
		const author = $(".section-6__quote-author");

		const backgroundImg = this.style.backgroundImage;

		photo.css("background-image", backgroundImg);
		quote.text($(this).data("quote"));
		author.text($(this).data("name"));
	});

	// Click a quote element to not keep it blank when page loads

	$(".section-6__client-thumbnail")
		.last()
		.trigger("click");

	// Handle hamburger click on lower resolutions

	$("#hamburger").on("click", function() {
		$(".header__rightside--md").css("display", "flex");
		$("body").addClass("body-lock");
	});

	$("#close-menu").on("click", function() {
		$(".header__rightside--md").css("display", "none");
		$("body").removeClass("body-lock");
	});
});
