 <html>
    <head>
        <title>Lab 2</title>
        <meta charset="utf-8">
        <script>
            function checkUsername()
            { // registration
            	document.getElementById("userError").innerHTML =" ";
                var regexp = /^[A-Za-z]+$/;
                var tempvar = userName.value;
                if(userName.value === "")
                {
                    document.getElementById("userError").innerHTML = "<span style='color: red;'>username can't be empty</span>";
                    return false;
                }
                if(regexp.test(tempvar)){
                	document.getElementById("userError").innerHTML =" ";
                	return true;
                }
                document.getElementById("userError").innerHTML = "<span style='color: red;'>letters only >:(</span>";
                return false;
            }
            function checkPassword() { //registration
                var regex = /[a-z]/;
                var numX = /[0-9]/;
                var regeX = /[A-Z]/;
                var passwordVar = password.value;
                if(passwordVar === ""){
                    document.getElementById("passError").innerHTML = "<span style='color: red;'>password cannot be empty</span>";
                    return false;
                }
                else if(!regex.test(passwordVar)){
                    document.getElementById("passError").innerHTML = "<span style='color: red;'>please input lowercase,uppercase characters and numbers</span>";
                    return false;
                }
                else if(!numX.test(passwordVar)){
                    document.getElementById("passError").innerHTML = "<span style='color: red;'>please input lowercase,uppercase characters and numbers</span>";
                    return false;
                }
                else if(!regeX.test(passwordVar)){
                    document.getElementById("passError").innerHTML = "<span style='color: red;'>please input lowercase,uppercase characters and numbers</span>";
                    return false;
                }
                else {
                    document.getElementById("passError").innerHTML = " ";
                }
                return true;
            }
            function init() 
            {
                username = document.getElementById("username");
                password = document.getElementById("password");

                username.addEventListener("keyup",checkUsername);
                password.addEventListener("keyup",checkPassword);
            }
            window.addEventListener("load",init);
        </script>
    </head>
    <body>
        <?php
        ?>
        <form method ="get" action="#">
            <label>UserName: <input type = "text" id ="username"></label>
            <label>Password: <input type = "text" id="password"></label>
            <label>Reenter password: <input type= "text" id = "password"></label>
            <input type= "button">
</form>
     </body>
    </html>