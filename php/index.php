<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gambit Challenge</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/main.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>

    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script type="text/javascript" class="init">
        $(document ).ready(function() {
            $('#feed').dataTable({
                responsive: true ,
                "sAjaxSource": "parser.php",
                "aoColumns": [
                    { mData: 'Register' } ,
                    { mData: 'Value' },
                    { mData: 'Description' },
                    { mData: 'Unit' },
                ]
            });
        });
    </script>
</head>
<body>

<!-- Navigation bar with possibility to add functionality to buttons -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="font-size: 20px;">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="http://www.tuf-2000.com/english/index.php">TUF-2000M</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://images-na.ssl-images-amazon.com/images/I/91CvZHsNYBL.pdf">Manual</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
</nav>

<!-- Data date information -->
<!--<div class="collected" style="text-align: center">
    <h1> Data collected: <?php /*echo implode(":", $split[0])*/?> </h1>
</div>-->

<!-- DataTable -->
<div class="" style="width: 80%; margin: auto; font-size: 20px; padding-top: 20px">
    <table id="feed" class="display" >
        <thead>
        <tr>
            <th>Register</th>
            <th>Value</th>
            <th>Description</th>
            <th>Unit</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th>Register</th>
            <th>Value</th>
            <th>Description</th>
            <th>Unit</th>
        </tr>
        </tfoot>
    </table>
</div>

</body>
</html>
