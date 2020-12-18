var cn = document.querySelectorAll("#cn");

cn.forEach(function (values) {
	values.onclick = function() {
		var a = values.querySelector("a");
		a.click();
	}
});




