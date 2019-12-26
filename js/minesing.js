function validate(){
	var pass = document.getElementById("pass").value;
	var name = document.getElementById("name").value;
	var kek = document.getElementById("kek");
	var dog = document.getElementById("dog");
	if (pass.length < 8 && name.search(" ") != -1)
	{

		kek.direction = "left";
		return alert("Пароль має містити не менше 8 символів і Логін не повинен містити пробіли!");
	}
	if (pass.length < 8){
		dog.style.display = "inline";
		kek.direction = "up";
		return alert("Пароль має містити не менше 8 символів!");
	}
	if (name.search(" ") != -1)
	{
		dog.style.display = "inline";
		kek.direction = "down";
		return alert("Логін не має містити пробіли!");
	}

}
