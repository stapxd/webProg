function validation() {

			let form = document.getElementById("form1");

			let theme = document.getElementById("theme").value;
			let themeReg = /^[А-ЯЇІ]{1}[а-яїі]+(\s{1}[А-ЯЇІ]?[а-яїі]*)*$/;

			let pib = document.getElementById("pib").value;
			let pibReg = /^([А-ЯЇІ]{1}[а-яїі]+\s?){3}$/;

			let file = document.getElementById("file").value;

			let password1 = document.getElementById("pass1").value;
			let password2 = document.getElementById("pass2").value;
			let passReg = /^\d{6}$/;

			if (theme == '' || !theme.match(themeReg)){
				alert("Incorrect theme");
			}
			else if (pib == '' || !pib.match(pibReg)){
				alert("Incorrect PIB");
			}
			else if (file == ''){
				alert("Add file");
			}
			else if (password1 == '' || !password1.match(passReg)){
				alert("Incorrect first password");
			}
			else if (password2 == '' || !password2.match(passReg)){
				alert("Incorrect second password");
			}
			else if (password1 != password2) {
				alert("Passwords are not the same");	
			}
			else {
				form.submit();
			}
		
		}


		window.addEventListener("DOMContentLoaded", function(){
			document.getElementById("reg").addEventListener("click", validation);
		});