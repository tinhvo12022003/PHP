<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <!-- <style> 
    .error {
      color: red;
    }
  </style> -->

  <h1>PHP Form Validation Example</h1>
  <span class="error">* requierd field</span><br><br>

  <form action="simple_form.php" method="post">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name"><span class="error" name="name-error">* <span></span>
      <br><br>
      <label for="email">Email: </label>
      <input type="email" name="email" id="email"><span class="error" name="email-error">* </span>
      <br><br>
      <label for="website">Website</label>
      <input type="text" name="website" id="website"><span name="website-error"></span>
      <br><br>
      <label for="comment">Comment</label>
      <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
      <br><br>
      <label for="gender">Gender</label>
      <input type="radio" name="gender" id="" value="female"> Female <input type="radio" name="gender" id="" value="male"> Male <input type="radio" name="gender" id="" value="other"> Other <span class="error" name="gender-error">*</span>

      <br><br>
      <input type="submit" value="Submit">
      <br><br>
  </form>

  <?php

  error_reporting(0);

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $email = $website = $gender = $comment = "";
    $name_error = $email_error = $website_error = $gender_error = "";
    //check name not empty
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      if (empty($name)) {
        $name_error = "Name is required";
      } else {
        $name_pattern = "/^[a-zA-Z\s]+$/";
        if (!preg_match($name_pattern, $name)) {
          $name_error = "Name is invalid";
        } else {
          $name_error = "";
        }
      }
    }

    //check email not empty

    if (isset($_POST['email'])) {
      $email = $_POST['email'];
      if (empty($email)) {
        $email_error = "Email is required";
      } else {
        $email_pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
        if (!preg_match($email_pattern, $email)) {
          $email_error = "Email is invalid";
        } else {
          $email_error = "";
        }
      }
    }

    //check website
    if (isset($_POST['website'])) {
      $website = $_POST['website'];
      if (!empty($website)) {
        $pattern_website = "/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/";
        if (preg_match($pattern_website, $website)) {
          $website_error = "Website is invalid";
        }
      } else {
        $website = "";
      }
    }

    //get textarea
    if (isset($_POST['comment'])) {
      $comment = $_POST['comment'];
      if (empty($comment)) {
        $comment_error = "";
      }
    }

    //get gender from form
    if (isset($_POST['gender'])) {
      $gender = $_POST['gender'];
    } else {
      $gender = "";
      $gender_error = "gender is required";
    }
  }


  // show info form
  if (!empty($name_error)) {
    echo $name_error . "<br>";
  } else {
    echo "Name: " . $name . "<br>";
  }

  if (!empty($email_error)) {
    echo $email_error . "<br>";
  } else {
    echo "Email: " . $email . "<br>";
  }

  if (!empty($website_error)) {
    echo $website_error . "<br>";
  } else {
    echo "Website: " . $website . "<br>";
  }

  if ($comment == "") {
  } else {
    echo "Comment: " . $comment . "<br>";
  }

  if (!empty($gender_error)) {
    echo $gender_error . "<br>";
  } else {
    echo "Gender: " . $gender . "<br>";
  }

  ?>


</body>

</html>