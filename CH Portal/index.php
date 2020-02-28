
<?php
    if(array_key_exists('updateButton', $_POST)){
        devicePower();
    }

    function devicePower(){
        header("refresh:0");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CH Portal</title>
        <link rel="stylesheet" href="css/main.css">
        <script src="https://kit.fontawesome.com/e98f9a917a.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="post">
            <div class="wrapper">
                <div class="sidebar">
                    <img src="images/CHPLogo.png" width=200px height=50px>
                    <ul>
                        <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                        <li><a href="#"><i class="fas fa-ellipsis-v"></i>Devices</a></li>
                        <li><a href="#"><i class="fas fa-arrows-alt-v"></i>Priority</a></li>
                        <li><a href="#"><i class="fas fa-chart-line"></i>Current Load</a></li>
                        <li><a href="#"><i class="fas fa-tasks"></i>Management</a></li>
                    </ul>
                </div>
                <div class="main_content">
                    <div class="header">
                        Welcome to the Connected Home Portal!!
                        <button id="button">Sign In</button>
                        <button id="button">Sign Up</button>
                    </div>
                    
                    <div class="info">
                        <?php
                            $file_lines = file('status.txt');
                            foreach ($file_lines as $line){
                                echo $line;
                                echo "<br><br>";
                            }
                        ?>
                        <input id="button" name="updateButton" type="submit" value="Update">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>