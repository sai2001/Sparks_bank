<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{background: blueviolet;}
    </style>
</head>
<body class="container">
    <div><nav class="navbar navbar-expand-sm bg-dark">
        <a class="navbar-brand" href="index.html"><img src="images/bank-icon.jpg" alt="Logo" height="55px" width="75px"></a>
        <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active"href="users.php">Users</a></li>
        <li class="nav-item"><a class="nav-link " href="transfer.php">Transfer Money</a></li>
        <li class="nav-item"><a class="nav-link " href="history.php">History</a></li>

        </ul>
    </nav></div>
    <h1>Transfer Money</h1><br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                <table class="table table-hover table-dark table-sm table-striped table-condensed table-bordered">
                <thead>
                    <tr>
                    <th scope="col" class="text-center py-2">Id</th>
                    <th scope="col" class="text-center py-2">Name</th>
                    <th scope="col" class="text-center py-2">E-Mail</th>
                    <th scope="col" class="text-center py-2">Balance</th>
                    </tr>
                </thead>
                <tbody>
            <?php while($rows=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                    </tr>
                <?php } ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
    <footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">
        Made by B Venkata Sai.All rights reserved © 2021
    </div>
</footer>
</body>
</html>