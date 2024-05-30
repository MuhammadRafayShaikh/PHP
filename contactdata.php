<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Issue</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tbody>
            <?php
            include "connection.php";
            $query = mysqli_query($conn, "select * from `php2`");
            while ($row = mysqli_fetch_array($query)) {


            ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["number"] ?></td>
                    <td><?php echo $row["issue"] ?></td>
                    <td><button class="btn btn-secondary">Edit</button></td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>