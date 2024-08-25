<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Existing code for handling other form fields
  $name = $_POST['name'];
  $studentId = $_POST['student-id'];
  $grId = $_POST['gr-id'];
  $dob = $_POST['dob'];
  $religion = $_POST['religion'];
  $cast = $_POST['cast'];
  $subcast = $_POST['subcast'];
  $age = $_POST['age'];
  $placeOfBirth = $_POST['place-of-birth'];
  $fatherName = $_POST['father-name'];
  $permanentAddress = $_POST['permanent-address'];
  $pinCode = $_POST['pin-code'];
  $email = $_POST['email'];
  $contactNumber = $_POST['contact-number'];
  $otherContactNumber = $_POST['other-contact-number'];
  $transportation = $_POST['transportation'];
  $class=$_POST['class'];
  $compressedImage = $_POST["photo"];

    $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $compressedImage));

    $target_dir = "uploads/";
    $photo = uniqid() . '.jpg'; // Generate a unique file name
    $target_file = $target_dir . $photo;

    file_put_contents($target_file, $imageData);

$query = "INSERT INTO admissions (name, student_id, gr_id, dob, religion, cast, subcast, age, place_of_birth, father_name, permanent_address, pin_code, email, contact_number, other_contact_number, transportation , class , photo)
VALUES ('$name', '$studentId', '$grId', '$dob', '$religion', '$cast', '$subcast', '$age', '$placeOfBirth', '$fatherName', '$permanentAddress', '$pinCode', '$email', '$contactNumber', '$otherContactNumber', '$transportation','$class','$photo')";


if (mysqli_query($conn, $query)) {
 
header('Location: dashboard.php');
exit;
} else {

echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
}
?>

