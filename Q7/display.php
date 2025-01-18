<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
include_once "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display All Students</title>
    <style>
        .my-container{
            min-height: 75vh;
        }
    </style>
</head>
<body>
    <?php
    require_once "functions.php";
    $result = allStudents();
    if($result){
        ?>
        <div class="row my-container">
            <div class="col-md-6 mx-auto">
                <div class="table-responsive text-center">
                    <table class="table table-striped">
                        <!-- Table Header Part -->
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <!-- Table Body Part -->
                         <tbody>
                            <?php
                            while($std = $result->fetch_assoc()){
                                // print_r($std);
                            
                            ?>
                            <tr>
                                <td><?php echo $std["id"]?></td>
                                <td><?php echo $std["name"]?></td>
                                <td>
                                    <a href="details.php?id=<?php echo $std['id'] ?>" class="btn btn-sm btn-info">Details</a>
                                    <a href="update.php?id=<?php echo $std['id'] ?>"  class="btn btn-sm btn-warning">Update</a>
                                    <a href="delete.php?id=<?php echo $std['id'] ?>"  class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                         </tbody>
                        </table>
                </div>
            </div>
        </div>
        <?php
        } else{
            echo "<h2>No Data Found! Try Again Later.</h2>";
        }
    ?>
</body>
</html>

<?php
include_once "footer.php";
?>