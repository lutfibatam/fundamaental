<!DOCTYPE html>
<html>
    <title>Belajar PHP!</title>
    <head>
        <label for="text">Hari Selasa belajar fundamental PHP</label><br> 
        <style>
            form{
                font-size: 12px;
            }
            input{
                color: black;
                border: 90%; 
                width: 20vh;
            }
            .form-submit{
                width: 20vh;
                color: blue; 
                cursor: pointer;
                background-color: black; 
                height: 100%; 
            }

            .input-submit{
                background-color: blue;
            }
        </style> 
    </head>        
        <body>
            <?php 
            echo"<h1> Lutfi Zulfian <br></h1>"; 
            $txt = "PHP!";
            echo"<h2> I love $txt </h2>"; 
            echo"I student on Univercity Telkom Purwokerto <br>";
            echo$x=true; 
            echo'<br';
            echo$y=false;   
        ?>  
            <form action="/action_page.php">
                <label for="fname">Username:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Password:</label><br> 
                <input type="text" id="lname" name="lname"><br><br>
                <input type="submit" value="Submit">
        </form>
    </body> 
</html>