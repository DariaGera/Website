function validate(){
	var pass = document.getElementById("pass").value;
	var name = document.getElementById("name").value;

	if (pass.length < 8 && name.search(" ") != -1)
	{

		return alert("Пароль має містити не менше 8 символів і Логін не повинен містити пробіли!");
	}
	if (pass.length < 8){

		return alert("Пароль має містити не менше 8 символів!");
	}
	if (name.search(" ") != -1)

		return alert("Логін не має містити пробіли!");
	}
