<?php
try {
    // Lien vers le fichier de connexion
    require_once("db.php") ;

    $result = $connexion->query('SELECT post_title, description, post_at  FROM posts') ;
    $rows = $result->fetchAll();
    $result->closeCursor();

    foreach ($rows as $val)
    {
        $tab1 = $rows[0] ;
        $tab2 = $rows[1] ;

        $msg = $tab1['post_title'] ;
        $msg1 = $tab1['description'] ;
        $msg2 = $tab1['post_at'] ;

        $msg3 = $tab2['post_title'] ;
        $msg4 = $tab2['description'] ;
        $msg5 = $tab2['post_at'] ;
    }
}
catch (Exception $e)
{
    echo $e->getMessage() ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bac à sable 2 La Grille</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Le CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <!-- Le JavaScript de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>
<body>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <a href="add.php">
                        <button class="btn btn-primary btn-lg text-white" type="button">
                              <img src="crud-icon/add.png " alt="logo ajouter"/> Create                         
                        </button>     
                    </a>               
                    </td>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <th scope="row" class="h1">
                <td class="h3">Title
                </td>
                    <td class="h3">Description</td>
                    <td class="h3">Date</td>
                    <td class="h3">Actions</td>
                </th>
                </tr>
                <tr>
                <th scope="row">
                    <td><?= $msg ?></td>
                    <td><?= $msg1 ?></td>
                    <td><?= $msg2 ?></td>
                    <td>
                    <button type="button">
                        <a href="edit.php">
                        <img src="crud-icon/edit.png " alt="logo editer"/>
                        </a>
                    </button>
                    <button type="button">
                        <a href="delete.php">
                        <img src="crud-icon/delete.png " alt="logo supprimer"/>
                        </a>
                    </button>      
                    </td>
                </th>       
            </tr>
            <tr>
                <th scope="row">
                <td><?= $msg3 ?></td>
                <td><?= $msg4 ?></td>
                <td><?= $msg5 ?></td>
                <td>
                <button type="button">
                        <a href="edit.php">
                        <img src="crud-icon/edit.png " alt="logo editer"/>
                        </a>
                    </button>
                    <button type="button">
                        <a href="delete.php">
                        <img src="crud-icon/delete.png " alt="logo supprimer"/>
                        </a>
                    </button>      
                </td> 
            </td>             
                </th>
            </tr>
        </tbody>
    </table>
</div>
     
</body>
</html>

