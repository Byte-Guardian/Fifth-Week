<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rakkas&family=Sevillana&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات</title>
    
    <style>
        h3{
            font-family: "Rakkas", serif;
            font-weight:bold;
        }
        .card{
            float:right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10[x]
        }
        .card img{
            width:100%;
            height:200px;
        }
        main{
            width:60%;

        }
    </style>
</head>

<body>
    
    <center>
    <h2>All available products</h2>
    </center>

        <?php
            include('config.php');
            $result= mysqli_query($con, "SELECT * FROM prod ");
            while($row = mysqli_fetch_array($result)){
                echo "
             <center>
            <main>
                <div class='card' style='width: 18rem'>
                    <img src='$row[image]' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>$row[name]</h5>
                        <p class='card-text'>$row[price]</p>
                        <a href='delete.php?id=$row[id]' class='btn btn-danger'>حذف منتج</a>
                        <a href='update.php?id=$row[id]' class='btn btn-primary'>تعديل  منتج</a>
                    </div>
                </div>
            </main>
            </center>
                
                
                ";}


        ?>
 

               




            

</body>
</html>
