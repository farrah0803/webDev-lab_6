<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
    $name = "Nur Farrah Wahidah";
    $matric = "DI220121";
    $course = "BIT";
    $yearStudy = "Year 2";
    $address = "Cyberjaya";
    ?>
    <table>
        <tr>
            <th>Name</th>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <th>Matric No</th>
            <td><?php echo "$matric"; ?></td>
        </tr>
        <tr>
           <th>Course</th>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <th>Year of Study</th>
            <td><?php echo "$yearStudy"; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>