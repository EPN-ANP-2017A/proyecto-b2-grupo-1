function anadirListeners() {
	var activador_menu_responsivo = document.getElementById("menu-nav-display");
	var activador_login_responsivo = document.getElementById("form-display");

	activador_menu_responsivo.addEventListener("click", function() {
		var menu_responsivo = document.querySelector("#menu-nav-display + ul");

		if (!menu_responsivo.style.display || menu_responsivo.style.display == "none") {
			menu_responsivo.style.display = "block";
		} else {
			menu_responsivo.style.display = "none";
		}
	});

	activador_login_responsivo.addEventListener("click", function(){
		var login_responsivo = document.getElementById("nav-login-form");

		if (!login_responsivo.style.display || login_responsivo.style.display == "none") {
			login_responsivo.style.display = "block";
		} else {
			login_responsivo.style.display = "none";
		}
	});

	window.onresize = resetearEstilosMenu;
}

function resetearEstilosMenu() {
	if (screen.width > 660) {
		var menu_responsivo = document.querySelector("#menu-nav-display + ul");
		menu_responsivo.style.display = null;
	}

	if (screen.width > 1200) {
		var login_responsivo = document.getElementById("nav-login-form");
		login_responsivo.style.display = null;
	}
}

//IMAGEN //

function expandir_img(){
	var img = document.getElementById('myImg');
	var img2 = document.getElementById('myImg2');
	var img3 = document.getElementById('myImg3');
	var img4 = document.getElementById('myImg4');

	var modalImg = document.getElementById("img01");

	img.onclick = function(){
		var modal = document.getElementById("myModal");
    	modal.style.display = "block";
    	modalImg.src = this.src;
    }

    img2.onclick = function(){
		var modal = document.getElementById("myModal");
    	modal.style.display = "block";
    	modalImg.src = this.src;
    }

    img3.onclick = function(){
		var modal = document.getElementById("myModal");
    	modal.style.display = "block";
    	modalImg.src = this.src;
    }

    img4.onclick = function(){
		var modal = document.getElementById("myModal");
    	modal.style.display = "block";
    	modalImg.src = this.src;
    }
}

function cerrar_img(){
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
		var modal = document.getElementById("myModal");
		modal.style.display = "none";
	}
}



window.onload = function() {
	anadirListeners();
	expandir_img();
	cerrar_img();

}
