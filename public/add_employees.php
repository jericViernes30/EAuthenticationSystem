<?php
include 'database/db.php';
if(isset($_POST['save'])){
    $insert = "INSERT INTO employees (id, name, phone, status, department, address) 
    VALUES (?, ?, ?, ?, ?, ?)";

    if ($prepareInsert = mysqli_prepare($con, $insert)) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $name = $first_name . ' ' . $last_name;
        $employee_id = $_POST['employee_id'];
        $department = $_POST['department'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $status = $_POST['status'];

        mysqli_stmt_bind_param($prepareInsert, "ssssss", $employee_id, $name, $phone, $status, $department, $address);

        // Step 4: Execute the prepared statement
        if (mysqli_stmt_execute($prepareInsert)) {
            header('location: home.php');
        } else {
            echo "Error: " . mysqli_error($con);
        }

        // Step 5: Close the statement
        mysqli_stmt_close($prepareInsert);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="flex gap-2 p-4 bg-emerald-400">
        <h1 class="mr-2 text-xl font-semibold">E-Identification System</h1>
        <button onclick="window.location.href='add_employees.php'">Add Employees</button>
        <button onclick="window.location.href='home.php'">View Table</button>
    </div>

    <div class="w-2/4 mx-auto">
        <div class="w-full text-center p-5">
            <h1 class="mt-10 mb-10 text-xl font-bold">Add Employee</h1>
            <form action="" method="POST">
                <div class="w-full flex justify-evenly gap-2 mb-4">
                    <input class="w-2/4 rounded-sm px-4 py-2 border-2" type="text" name="first_name" placeholder="First name">
                    <input class="w-2/4 rounded-sm px-4 py-2 border-2" type="text" name="last_name" placeholder="Last name">
                </div>
                <div class="w-full flex justify-evenly gap-2 mb-4">
                    <input class="w-2/4 rounded-sm px-4 py-2 border-2" type="text" name="employee_id" placeholder="Employee ID">
                    <input class="w-2/4 rounded-sm px-4 py-2 border-2" type="text" name="department" placeholder="Department">
                </div>
                <div>
                    <input class="w-full mb-4 rounded-sm px-4 py-2 border-2" type="text" name="address" placeholder="Address">
                </div>
                <div class="w-full flex justify-evenly gap-2 mb-4">
                    <input class="w-2/4 rounded-sm px-4 py-2 border-2" type="tel" name="phone" placeholder="Phone number">
                    <input class="w-2/4 rounded-sm px-4 py-2 border-2" type="text" name="status" placeholder="Status">
                </div>
                <div class="text-left">
                    <button name="save" class="w-40 px-6 py-2 bg-emerald-500 border rounded-sm">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>