advDropdown();

function advDropdown() {
	var x = document.querySelector(".searchDropdown");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}