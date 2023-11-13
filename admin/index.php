<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/addproduct.css">
    <link rel="stylesheet" href="../css/home_admin.css">
    <link rel="stylesheet" href="../css/reponsi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <!-- header section  -->
    <header class="header">
        <div class="header-1">
            <p>Admin</p>
            <form action="" class="search-form">
                <input type="search" name="" id="search-box" placeholder="Search here...">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
                <div id="login-btn" class="fas fa-heart"></div>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="http://localhost/1.PHP/3.Project/7.DoAnCS2/">Home</a>
                <a href="#home">Shop</a>
                <a href="#home">Order</a>
                <a href="#home">About</a>
                <a href="#contact">Contact</a>
            </nav>

        </div>

        <!-- bottom navbar -->
        <nav class="bottom-navbar">
            <a href="#home" class="fas fa-home"></a>
            <a href="#home" class="fas fa-list"></a>
            <a href="#home" class="fas fa-tags"></a>
            <a href="#home" class="fas fa-comments"></a>
            <a href="#contact" class="fas fa-blogs"></a>
        </nav>
    </header>
    <!-- Add Category -->
    <div class="container">
        <div>
            <h2>Add Category</h2>
        </div>
        <form action="action_page.php">
            <div class="row">
                <div class="col-25">
                    <label for="fname">ID Category:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="ID Category..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Name Category:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Name Category..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Describe:</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write describe.."
                        style="height:200px"></textarea>
                </div>
            </div>
            <div class="btn_controler">
                <input type="submit" value="Add" class="btn btn_add_product">
                <input type="submit" value="Delete" class="btn btn_add_product">
                <input type="submit" value="Update" class="btn btn_add_product">
                <input type="submit" value="Return" class="btn btn_add_product">
            </div>
        </form>
    </div>
    <!--------------Close Add Category-------------------- -->
    <!-------------- List Category ----------------->
    <table>
        <tr>
            <th>ID Category</th>
            <th>Name Category</th>
            <th>Describe</th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
        </tr>
        <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
        </tr>
        <tr>
            <td>Island Trading</td>
            <td>Helen Bennett</td>
            <td>UK</td>
        </tr>
        <tr>
            <td>Laughing Bacchus Winecellars</td>
            <td>Yoshi Tannamuri</td>
            <td>Canada</td>
        </tr>
        <tr>
            <td>Magazzini Alimentari Riuniti</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
        </tr>
    </table>