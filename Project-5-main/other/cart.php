<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <script src="https://kit.fontawesome.com/aca8d5a1fa.js" crossorigin="anonymous"></script>
    <title>Cart</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="./images/logo.png" width="200px" alt="">
        </div>
        <div class="tab1">
            <a href="">HOME</a>
            <a href="">PRODUCTS</a>
            <a href="">CART</a>
            <a href="">CONTACT US</a>
            <a href="">ABOUT US</a>
        </div>
        <div class="tab2">
            <a href="">LOGIN</a>
            <a href="">REGISTER</a>
        </div>
    </nav>

    <div class="board">
        <h1 class="bhead">CART</h1>
        <div class="table">
            <div style="margin: auto;">
            <table>
                <tr>
                    <th>PRODUCTS</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>SUBTOTAL</th>
                </tr>

                <tr>
                    <td style="position: relative;">
                        <div style="left: 0; margin: auto; display: flex; justify-content: space-around; align-items: center; width: 200px;">
                            <i style="position: absolute; left: 10px;" class="fa-solid fa-circle-xmark"></i>
                            <img src="./images/c1.jpg" width="50px" alt="">
                            <span>product1</span>
                        </div>
                    </td>
                    <td>12$</td>
                    <td>
                        <input type="number" class="num" min="1" value="1" name="" id="">
                    </td>
                    <td>12$</td>
                </tr>

                <tr>
                    <td style="position: relative;">
                        <div style="margin: auto; display: flex; justify-content: space-around; align-items: center; width: 200px;">
                            <i style="position: absolute; left: 10px;"  class="fa-solid fa-circle-xmark"></i>
                            <img src="./images/c3.jpg" width="50px" alt="">
                            <span>product2</span>
                        </div>
                    </td>
                    <td>12$</td>
                    <td>
                        <input type="number" class="num" min="1" value="1" name="" id="">
                    </td>
                    <td>12$</td>
                </tr>

                <tr>
                    <td colspan="4" style="text-align: center; margin: auto;">
                        <div class="change">Save Changes</div>
                    </td>
                </tr>
            </table>

                <div class="total">
                    <h3>CART TOTAL: 38$</h3>
                    <div class="change">Checkout</div>
                </div>
            </div>

        </div>
    </div>

    <footer>
    <div id="footerdiv">
        <div class="col-3">
            <img src="./Images/logo.png">
        </div>
        <div class="col-3">
            <h1 style="text-align: center;">Follow US</h1><br>
            <p style="text-align: center;">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
            </p>
            <br>
            <p style="text-align: center;">copyright <i class="fa-solid fa-copyright"></i> 2022 BeautyCare</p>
        </div>
        <div class="col-3">
            <a href="">Home</a>
            <a href="">Shop</a>
            <a href="">Contact Us</a>
            <a href="">Login</a>
            <a href="">Register</a>
        </div>
    </div>
    </footer>
</body>
</html>