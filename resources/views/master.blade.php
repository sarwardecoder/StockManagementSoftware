<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage any inventory stocks at ease</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!-- navigation part start -->
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="" alt="">InventoryTiger</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href={{"/"}}>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{"users"}}>Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{"products"}}>Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{"orders"}}>Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{"order_details"}}>Order Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{"stock_transactions"}}>Stock Transactions</a>
                        </li>


                    </ul>
                    <button class="login">Login</button>
                </div>
            </div>
        </nav>
    </header>


    @yield ('content')


    <script src="js\bootstrap.bundle.js"></script>
</body>

</html>