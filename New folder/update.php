<?php include 'auth.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php include 'connection.php';?>
<?php


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $studentId = $_POST['student_id'];
    $grId = $_POST['gr_id'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $cast = $_POST['cast'];
    $subcast = $_POST['subcast'];
    $age = $_POST['age'];
    $placeOfBirth = $_POST['place_of_birth'];
    $fatherName = $_POST['father_name'];
    $permanentAddress = $_POST['permanent_address'];
    $pinCode = $_POST['pin_code'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contact_number'];
    $otherContactNumber = $_POST['other_contact_number'];
    $transportation = $_POST['transportation'];
    $class=$_POST['class'];
    $query = "UPDATE admissions SET name='$name', student_id='$studentId', gr_id='$grId', dob='$dob', religion='$religion', cast='$cast', subcast='$subcast', age='$age', place_of_birth='$placeOfBirth', father_name='$fatherName', permanent_address='$permanentAddress', pin_code='$pinCode', email='$email', contact_number='$contactNumber', other_contact_number='$otherContactNumber', transportation='$transportation',class='$class' WHERE id=$id";
    $result = $conn->query($query);

    if ($result) {
        echo "Student record updated successfully.";
    } else {
        echo "Error updating student record: " . $conn->error;
    }
}

$id = $_GET['id'];

$query = "SELECT * FROM admissions WHERE id=$id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Update Student Data</title>
    </head>
    <body>
        <h2>Update Student Data</h2>
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
            <label for="student_id">Student ID:</label>
            <input type="text" name="student_id" value="<?php echo $row['student_id']; ?>"><br><br>
            <label for="gr_id">GR ID:</label>
            <input type="text" name="gr_id" value="<?php echo $row['gr_id']; ?>"><br><br>
            <label for="class">class:</label>
            <input type="text" name="class" value="<?php echo $row['class']; ?>"><br><br>
            <label for="dob">Date of Birth:</label>
            <input type="text" name="dob" value="<?php echo $row['dob']; ?>"><br><br>
            <label for="religion">Religion:</label>
            <input type="text" name="religion" value="<?php echo $row['religion']; ?>"><br><br>
            <label for="cast">Cast:</label>
            <input type="text" name="cast" value="<?php echo $row['cast']; ?>"><br><br>
            <label for="subcast">Subcast:</label>
            <input type="text" name="subcast" value="<?php echo $row['subcast']; ?>"><br><br>
            <label for="age">Age:</label>
            <input type="text" name="age" value="<?php echo $row['age']; ?>"><br><br>
            <label for="place_of_birth">Place of Birth:</label>
            <input type="text" name="place_of_birth" value="<?php echo $row['place_of_birth']; ?>"><br><br>
            <label for="father_name">Father's Name:</label>
            <input type="text" name="father_name" value="<?php echo $row['father_name']; ?>"><br><br>
            <label for="permanent_address">Permanent Address:</label>
            <input type="text" name="permanent_address" value="<?php echo $row['permanent_address']; ?>"><br><br>
            <label for="pin_code">Pin Code:</label>
            <input type="text" name="pin_code" value="<?php echo $row['pin_code']; ?>"><br><br>
            <label for="email">Email ID:</label>
            <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
            <label for="contact_number">Contact Number:</label>
            <input type="text" name="contact_number" value="<?php echo $row['contact_number']; ?>"><br><br>
            <label for="other_contact_number">Other Contact Number:</label>
            <input type="text" name="other_contact_number" value="<?php echo $row['other_contact_number']; ?>"><br><br>
            <label for="transportation">Transportation:</label>
            <input type="text" name="transportation" value="<?php echo $row['transportation']; ?>"><br><br>
            <input type="submit" name="submit" value="Update">
        </form>
    </body>
    </html>
    <?php
} else {
    echo "Student record not found.";
}


$conn->close();
?>
