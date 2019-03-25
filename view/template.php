
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>MVC Quiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="view/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" medai="all">
    <link rel="stylesheet" href="view/style.css">
    <script src="view/jquery-1.9.1.js"></script>
    <script src="view/list.js"></script>
    <script src="view/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</head>
<body data-gr-c-s-loaded="true">
    <div class="container">
        
        <legend class="header">

            <?php if(isset($_SESSION['uname'])){ ?>
        <form method='post' action="index.php?action=logout">
           <input type="submit" id="but_logout" value="Logout" name="but_logout">
        </form>
        <form method='post' action="index.php?action=show_user">
           <input type="submit" id="manageUser" value="Manage User" name="manageUser">
        </form>
        <?php } ?>
        <h3>Employee Manager</h3>
        </legend>
        

        <?php
        include "view/" . $data['page'] . ".php";
        ?>     
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>