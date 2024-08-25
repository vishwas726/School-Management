<?php include 'auth.php'; ?>
<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Student Data</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Francois+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <style>

        body {
            font-family: Arial, sans-serif;
            font-family: 'Bree Serif', serif;
            background-color: #f2f2f2;
            background: url('back4.jpg') no-repeat center top/cover;
            text-transform: capitalize;
    word-spacing: 10px;
    background: url(back1.jpg) no-repeat center right/cover;

        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height:500px;
            height: 324px;
        }

        h2 {
            color: #333;
            margin-top: 0;
            font-size: 24px;
            text-align: center;
        }

        p {
            color: #555;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .confirm-message {
            margin-top: 20px;
            text-align: center;
        }

        .btn-delete {
            display: inline-block;
            background-color: #f44336;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-delete:hover {
            background-color: #d32f2f;
        }

        .delete-icon {
            color: #fff;
            margin-right: 5px;
            vertical-align: middle;
        }

        .confirm-modal {
            display: none;
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .confirm-modal h3 {
            color: #333;
            margin-top: 0;
            font-size: 20px;
            text-align: center;
        }

        .confirm-modal p {
            color: #555;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .confirm-modal .btn-yes,
        .confirm-modal .btn-no {
            display: inline-block;
            background-color: #f44336;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            text-decoration: none;
            margin-top: 10px;
        }

        .confirm-modal .btn-no {
            background-color: #bbb;
            margin-left: 10px;
        }

        .confirm-modal .btn-yes:hover,
        .confirm-modal .btn-no:hover {
            background-color: #d32f2f;
        }

        .student-photo {
            margin-left: 20px;
    /* width: 137px; */
    height: 118px;
    object-fit: cover;
    float: left;
    margin-right: 20px;
}
form{
    margin-top: 1px;
}
        .info{
float:left;
        }
  
.sub{
    display: flex;
}
   
button {
 width: 150px;
 height: 50px;
 cursor: pointer;
 display: flex;
 align-items: center;
 background: red;
 border: none;
 border-radius: 5px;
 box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
 background: #e62222;
}

button, button span {
 transition: 200ms;
}

button .text {
 transform: translateX(35px);
 color: white;
 font-weight: bold;
}

button .icon {
 position: absolute;
 border-left: 1px solid #c41b1b;
 transform: translateX(110px);
 height: 40px;
 width: 40px;
 display: flex;
 align-items: center;
 justify-content: center;
}

button svg {
 width: 15px;
 fill: #eee;
}

button:hover {
 background: #ff3636;
}


   </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#confirm-modal').on('click', '#btn-yes', function() {
                $(this).closest('form').submit();
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h2>Delete Student Data</h2>
        <?php
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];

            $query = "DELETE FROM admissions WHERE id=$id";
            $result = $conn->query($query);

            if ($result) {
                echo "<script>$('#confirm-modal').modal('hide');</script>";
            } else {
                echo "<script>alert('Error deleting student record: " . $conn->error . "');</script>";
            }
        }

        $id = $_GET['id'];

        $query = "SELECT * FROM admissions WHERE id=$id";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
          <div class="sub">
                <img class="student-photo" src="<?php echo $row['photo']; ?>" alt="Student Photo">
          <div class='info'>
            <p><strong>Student ID:</strong> <?php echo $row['student_id']; ?></p>
            <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
        </div>
        </div>
            <div class="confirm-message">
                <form method="POST" action="">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="button" class="btn-delete" onclick="$('#confirm-modal').modal();">
                    
                        <i class="fas fa-trash-alt delete-icon"></i>Delete
                    </button>
                </form>
            </div>

            <!-- Confirmation Modal -->
            <div id="confirm-modal" class="confirm-modal">
                <h3>Confirm Delete</h3>
                <p>Are you sure you want to delete this student record?</p>
                <form method="POST" action="">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="submit" value="Yes" id="btn-yes" class="btn-yes">Yes</button>
                    <button type="button" class="btn-no" onclick="$.modal.close();">No</button>
                </form>
            </div>
            <?php
        } else { ?>
          <div class="container">

          <div class="sub">
               
          <div class='info'>
            <p><strong>Student ID:</strong> <?php echo $row['student_id']; ?></p>
            <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
        </div>
        </div>
            <div class="confirm-message">
                 <p>Student record not found.</p>
            </div>

        
         

        
          </div>
        <?php
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
