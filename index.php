<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--Header and Menu Section-->
    <header class="container">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a class="active" href="#">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <!--Booking Section-->
    <main class="main-content container">

        <div class="booking-content">
            <h1>Mega City Bus</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicingelit. Provident voluptatibus quam fuga laborumalias
                veniam libero autem quasi maxime ullam vero nama imi dolor, architecto ab facilis eaque deserunt nobise
                voluptatibus quam</p>
        </div>

        <div class="booking-form">
            <h3>Explore By Bus</h3>

            <div class="inputs">
                <div class="input-group">
                    <label for="">From</label>
                    <input class="start-from inp-style" type="text" name="" placeholder="Dhaka, Bangladesh">
                </div>
                <div class="input-group">
                    <label for="">To</label>
                    <input class="end-to inp-style" type="text" name="" placeholder="Chittagone">
                </div>
            </div>
            <div class="inputs">
                <div class="input-group">
                    <label" for="">Departure</label>
                        <input class="bus-departure inp-style w-100" type="date" name="">
                </div>
                <div class="input-group">
                    <label for="">Return</label>
                    <input class="bus-return inp-style w-100" type="date" name="">
                </div>
            </div>

            <div class="input-group l-class">
                <div class="w-100">
                    <label for="">Luxury Class ($150)</label>
                    <div class="l-class w-100">
                        <button class="btn luxury-class-minus">-</button>
                        <input class="luxury-class-ticket-amount inp-style w-100 mx-10" type="number" name="">
                        <button class="btn luxury-class-plus">+</button>
                    </div>

                </div>
            </div>

            <div class="input-group l-class">
                <div class="w-100">
                    <label for="">First Class ($100)</label>
                    <div class="l-class">
                        <button class="btn first-class-minus">-</button>
                        <input class="first-class-ticket-amount inp-style  w-100 mx-10" type="number" name="">
                        <button class="btn first-class-plus">+</button>
                    </div>
                </div>

            </div>
            <div class="calculations">
                <div class="amount">
                    <div class="left">
                        <p>Subtotal</p>
                    </div>
                    <div class="right">
                        <p>$<span class="subtotal">00</span></p>
                    </div>
                </div>

                <div class="amount">
                    <div class="left">
                        <p>Charge 10% VAT</p>
                    </div>
                    <div class="right">
                        <p>$ <span class="vat">00</span></p>
                    </div>
                </div>
                <hr>
                <div class="amount">
                    <div class="left">
                        <h4>Total</h4>
                    </div>
                    <div class="right">
                        <p>$ <span class="total">0</span></p>
                    </div>
                </div>
            </div>
            <button class="btn-style book-now">Book Now</button>
        </div>

        <div class="booking-details">
            <header>
                <h3>Successfully Booked Your Bus</h3>
                <p>Your Bus Details</p>
            </header>

            <table class="table table-bordered">

                <tbody>

                    <tr>
                        <td class="strong">From</td>
                        <td class="user-start-from">d</td>
                    </tr>

                    <tr>
                        <td class="strong">To</td>
                        <td class="user-end-to"></td>
                    </tr>

                    <tr>
                        <td class="strong">Departure</td>
                        <td class="user-departure-date"></td>
                    </tr>

                    <tr>
                        <td class="strong">Return</td>
                        <td class="user-return-date"></td>
                    </tr>
                    <tr>
                        <td class="strong">First Class</td>
                        <td class="user-luxury-class"></td>
                    </tr>
                    <tr>
                        <td class="strong">Economy</td>
                        <td class="user-first-class"></td>
                    </tr>
                    <tr class="twopx">
                        <td class="strong">Subtotal</td>
                        <td class="user-subtotal"></td>
                    </tr>
                    <tr>
                        <td class="strong">Vat</td>
                        <td class="user-vat"></td>
                    </tr>
                    <tr>
                        <td class="strong">Total</td>
                        <td class="user-total"></td>
                    </tr>

                </tbody>
            </table>
        </div>


    </main>

    <!--Thank You-->
    <script src="app.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--Header and Menu Section-->
    <header class="container">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a class="active" href="#">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <!--Booking Section-->
    <main class="main-content container">

        <div class="booking-content">
            <h1>Mega City Bus</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicingelit. Provident voluptatibus quam fuga laborumalias
                veniam libero autem quasi maxime ullam vero nama imi dolor, architecto ab facilis eaque deserunt nobise
                voluptatibus quam</p>
        </div>

        <div class="booking-form">
            <h3>Explore By Bus</h3>

            <div class="inputs">
                <div class="input-group">
                    <label for="">From</label>
                    <input class="start-from inp-style" type="text" name="" placeholder="Dhaka, Bangladesh">
                </div>
                <div class="input-group">
                    <label for="">To</label>
                    <input class="end-to inp-style" type="text" name="" placeholder="Chittagone">
                </div>
            </div>
            <div class="inputs">
                <div class="input-group">
                    <label" for="">Departure</label>
                        <input class="bus-departure inp-style w-100" type="date" name="">
                </div>
                <div class="input-group">
                    <label for="">Return</label>
                    <input class="bus-return inp-style w-100" type="date" name="">
                </div>
            </div>

            <div class="input-group l-class">
                <div class="w-100">
                    <label for="">Luxury Class ($150)</label>
                    <div class="l-class w-100">
                        <button class="btn luxury-class-minus">-</button>
                        <input class="luxury-class-ticket-amount inp-style w-100 mx-10" type="number" name="">
                        <button class="btn luxury-class-plus">+</button>
                    </div>

                </div>
            </div>

            <div class="input-group l-class">
                <div class="w-100">
                    <label for="">First Class ($100)</label>
                    <div class="l-class">
                        <button class="btn first-class-minus">-</button>
                        <input class="first-class-ticket-amount inp-style  w-100 mx-10" type="number" name="">
                        <button class="btn first-class-plus">+</button>
                    </div>
                </div>

            </div>
            <div class="calculations">
                <div class="amount">
                    <div class="left">
                        <p>Subtotal</p>
                    </div>
                    <div class="right">
                        <p>$<span class="subtotal">00</span></p>
                    </div>
                </div>

                <div class="amount">
                    <div class="left">
                        <p>Charge 10% VAT</p>
                    </div>
                    <div class="right">
                        <p>$ <span class="vat">00</span></p>
                    </div>
                </div>
                <hr>
                <div class="amount">
                    <div class="left">
                        <h4>Total</h4>
                    </div>
                    <div class="right">
                        <p>$ <span class="total">0</span></p>
                    </div>
                </div>
            </div>
            <button class="btn-style book-now">Book Now</button>
        </div>

        <div class="booking-details">
            <header>
                <h3>Successfully Booked Your Bus</h3>
                <p>Your Bus Details</p>
            </header>

            <table class="table table-bordered">

                <tbody>

                    <tr>
                        <td class="strong">From</td>
                        <td class="user-start-from">d</td>
                    </tr>

                    <tr>
                        <td class="strong">To</td>
                        <td class="user-end-to"></td>
                    </tr>

                    <tr>
                        <td class="strong">Departure</td>
                        <td class="user-departure-date"></td>
                    </tr>

                    <tr>
                        <td class="strong">Return</td>
                        <td class="user-return-date"></td>
                    </tr>
                    <tr>
                        <td class="strong">First Class</td>
                        <td class="user-luxury-class"></td>
                    </tr>
                    <tr>
                        <td class="strong">Economy</td>
                        <td class="user-first-class"></td>
                    </tr>
                    <tr class="twopx">
                        <td class="strong">Subtotal</td>
                        <td class="user-subtotal"></td>
                    </tr>
                    <tr>
                        <td class="strong">Vat</td>
                        <td class="user-vat"></td>
                    </tr>
                    <tr>
                        <td class="strong">Total</td>
                        <td class="user-total"></td>
                    </tr>

                </tbody>
            </table>
        </div>


    </main>

    <!--Thank You-->
    <script src="app.js"></script>
</body>

</html>
