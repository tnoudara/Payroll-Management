<html>
    <head>
        <style>
            h2 {
                padding-top: 20px;
            }
        </style>
    </head>

    <body>

        <?php include 'header.php';
        
        echo '<form style = "width:900px; float: center;" class = "container-fluid p-3 bg-secondary text-white">

        <h2 style = "padding:0"; class = "text-center">Account</h2>
        <img src = "https://cdn-icons-png.flaticon.com/512/18/18601.png" alt "Avatar"
        class = "alignment-center" style = "width: 300px; padding:50; display: block; margin-left: auto; margin-right: auto;">

        <button style = "float: right" type="button" class="btn btn-dark">Change Password</button>
        <h2 style = "font-size: 20px">Password: </h2>
 
        <button style = "float: right" type="button" class="btn btn-dark">Change Email</button>
        <h2 style = "font-size: 20px">Email: </h2>
        

        <a href = "change-phone.php">
        <button style = "float: right" type="button" class="btn btn-dark">Change Phone Number</button>
        </a>
        <h2 style = "font-size: 20px">Phone Number:</h2>
   
        </form>';

        ?>
        </body>
        </html>

