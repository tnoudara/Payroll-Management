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
        
        echo '<form style = "width:500px; float: left;" class = "container-fluid p-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Old phone number</label>
                    <input type="text" class="form-control" id="old-phone">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">New phone number</label>
                    <input type="text" class="form-control" id="new phone">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
        
        </form>';

        ?>
        </body>
        </html>