<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .nav_tittle{
            display: flex;
        }
        h2{
            color: blue;
        }
        input{
            width: 600px;
            padding: 06px;
            margin-left: 100px;
            border-radius: 20px;
           border: 1px solid black;
           text-align: center;
        }
        .navlink{
            display: flex;
            gap: 50px;
        }
        img{
            width: 100%;
        }
        .content{
            width: 100%;
            height: 400px;
            background-image: url(download.jpeg);
           background-size: cover;

        }
      .content{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }
      h3{
        color: white;
       font-size: 50px;
      }
      .contanpara{
        font-size: 20px;
        color: rgb(48,82,44);
      }
      .para{
        font-size: 18px;
        color: white;
      }
      footer{
        width: 1260px;
        height: 20px;
        background-color: rgb(48,82,44);
        margin-top: 20px;
        text-align: center;
        padding: 10px;
      }
    </style>
</head>
<body>
    <div>
        <div class="nav_tittle">
       <h2>HERITAGE</h2>
       <p><input type="text" name="" id="" placeholder="Search Item"></p>
       </div>
    </div>
    <div class="navlink">
        <p><a href="product.php">Show Productes</a></p>
        <p><a href="Blog.php">Blog</a></p>
    </div>
    <div class="content">
        <h3>Wellcome to the new Heritage
        </h3>
        <p  class="contanpara">youre in the right place</p>
        <p class="para">login with same username & password your defalut<br>branch.
        once logged in the you'll find the your shopping <br> list,card and company
        users will be there waiting for you.
    </p> 
    </div>
    <div>
        <footer>
            copyright @ 2024 heritage landscap suppy group.all rights reviced
        </footer>
    </div>
</body>
</html>