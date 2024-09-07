<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rakkas&family=Sevillana&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online-shop</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <br>
        <form action='insert.php' method="POST" enctype="multipart/form-data">
        <h2>Shopping Site</h2>
        <img src='logo.jpg' alt="logo">
        <br>
        <input type='text' name="name">
        <br>
        <input type='text' name="price">
        <br>
        <input type='file' name="image" id='file' style='display:none;'>
        <label for="file">اختار صورة المنتج</label>
        <button name='upload'> رفع المنتج </button>
        <br><br>
        <a href="products.php">عرض المنتجات المتاحة</a>
        </form>
        <br>
        </div>
        <p>Developed by SnowyyyOwl</p>
    </center>
</body>
</html>
