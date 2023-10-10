<?php
    include 'database/db.php';

    $sql = "SELECT * FROM employees";
    $query = mysqli_query($con, $sql);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        td, table{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="flex gap-2 p-4 bg-emerald-400">
        <h1 class="mr-2 text-xl font-semibold">E-Identification System</h1>
        <button onclick="window.location.href='add_employees.php'">Add Employees</button>
        <button>View Table</button>
    </div>
    <div>
        <h1 class="text-center text-2xl font-semibold p-10">Employees Table</h1>
        <div>
            <table class="mx-auto w-10/12 text-center">
                <tr>
                    <th class="p-3">Employee ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Working Status</th>
                    <th>Department</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                
                    <?php
                        while($row = mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td class="p-3"><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['phone']?></td>
                                <td><?php echo $row['status']?></td>
                                <td><?php echo $row['department']?></td>
                                <td><?php echo $row['address']?></td>
                                <td>
                                    <div class="flex gap-2 justify-center">
                                        <button class="bg-red-500 py-2 px-4 text-white rounded-sm">Delete</button>
                                        <button class="bg-slate-700 py-2 px-4 text-white rounded-sm">Update</button>
                                    </div>
                                </td>
                            <?php
                        }
                        
                    ?>
                
            </table>
        </div>
    </div>
</body>
</html>