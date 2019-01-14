$(function(){
    $("login-submit").click(function () {
        var nameInput = $("#name").val();
        var passInput = $("#pass").val();
        var urlGet = "http://mba.bkksol.com/PK/getJSON.php/" +nameInput;
        $.ajax({
            type: "GET",
            url: urlGet,
            dataType: "json",
            success: function (data){
                if(passInput == data.password){
                    location.replace('index.html');
                    localStorage.setItem("name", data.username);
					localStorage.setItem("pass", data.password);
                }else {
					alert('Username or Password Wrong!');
					location.reload();
                }
            }
        })
    });
});