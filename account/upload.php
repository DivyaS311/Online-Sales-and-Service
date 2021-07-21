<html>
    <head>
        <title>upload image</title>
        <style>
            body{
                background-color: lightblue;
            }
            input{
                width: 50%;
                height: 5%;
                border: 1px;
                border-radius: 05px;
                padding: 8px 15px 8px 15px;
                margin: 10px 0px 15px 0px;
                box-shadow: 1px 1px 2px 1px gray;
                font-weight: bold;

            }
        </style>
    </head>
    <body>
        <center>
            <h1>Upload Image to database using php</h1>


            <form action="" method="POST" enctype="multipart/form-data">
            
              <label>Choose an image:</label><br>
              <input type="file" name="image" id="image" /><br>


              <label>Enter Name:</label><br>
              <input type="text" name="name" placeholder="Enter name" /><br>


              <label>Enter Price:</label><br>
              <input type="text" name="price" placeholder="Enter price" /><br>

              <input type="submit" name="upload" value="upload Image/Data" /><br>

           </form>
        </center>
    </body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'dns');

if(isset($_POST['upload']))
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $name = $_POST['name'];
    $price = $_POST['price'];

    $query = "INSERT INTO `items`(`image`,`name`,`price`) VALUES ('$file','$name','$price')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Image profile Uploaded") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Image profile not Uploaded") </script>';
    }
}
?>