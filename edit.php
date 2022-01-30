<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Edit</title>
  <style>
    input{
      width : 500px;
    }
  </style>
</head>

<body>

  <?php
    $student_edit = [
      "id" => "",
      "name" => "",
      "email" => "",
      "phone" => "",
      "enroll_number" => "",
      "date_of_admession" => ""
  ];
  if (isset($_GET['id'])) {
      $data = file_get_contents('students.json');
      $students = json_decode($data, true);

      foreach($students as $student){
          if($student['id'] == $_GET['id']){
              $student_edit = $student;
              break;
          }
      }
  }

  ?>
  <div class="d-flex align-items-center justify-content-center vh-100">
  <form method="POST">
  <h1 class="h3 mb-3">Edit informations</h1>
    <div>
      <input type="hidden" name="id" id="id" value="<?php echo $student_edit['id'] ; ?>">
    </div>
    <div>
      <label class="form-labe mb-2" for="name">Name</label>
      <input class="form-control mb-3" type="text" id="name" name="name" value="<?php echo $student_edit['name'] ; ?>">
    </div>
    <div>
      <label class="form-labe mb-2" for="email">Email</label>
      <input class="form-control mb-3" type="email" id="email" name="email" value="<?php echo $student_edit['email'] ; ?>">
    </div>
    <div>
      <label class="form-labe mb-2" for="phone">Phone Number</label>
      <input class="form-control mb-3" type="number" id="phone" name="phone" value="<?php echo $student_edit['phone'] ; ?>">
    </div>
    <div>
      <label class="form-labe mb-2" for="enroll">Enroll Number</label>
      <input class="form-control mb-3" type="number" id="enroll" name="enroll" value="<?php echo $student_edit['enroll_number'] ; ?>">
    </div>
    <div>
      <label class="form-labe mb-2" for="date">Date Of Admession</label>
      <input class="form-control mb-3" type="date" id="date" name="date" value="<?php echo $student_edit['date_of_admession'] ; ?>">
    </div>
    <input type="submit" name="save" class="btn btn-info" value="Save">
  </form>
  </div>

  <?php
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['enroll']) && isset($_POST['date'])){ 


        $student_edit = array(
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'enroll_number' => $_POST['enroll'],
            'date_of_admession' => $_POST['date']
        );
 
        $data = file_get_contents('students.json');
        $students = json_decode($data, true);


        foreach($students as $key => $student){
          if($student['id'] == $_GET['id']){
              $students[$key] = $student_edit;
              break;
          }
      }
        
        $data = json_encode($students, JSON_PRETTY_PRINT);
        file_put_contents('students.json', $data);

        echo "
        <script>
        window.location.href = 'Student.php';
        </script>";
 
    }
?>

<script src="js/bootstrap.js"></script>

</body>
</html>