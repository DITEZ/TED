<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="styles.css">
      <title>Daystar Bus Booking services</title>
      <script src="script.js"></script>
   </head>
   <body>
      <!-- Begin Page Content -->
      <main>
            <div id="container">
            <form method="POST" action="user.php" >
                <label for="loginmsg"></label>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="adm_no">Adm Number:</label>
                <input type="text" id="adm_no" name="adm_no" required>
                <label for="phone">Phone No.:</label>
                <input type="text" id="phone" name="phone_no" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="password">Confirm Password:</label>
                <input type="password" id="password" name="confirm_password" required>
                <div id="lower">
                    <input type="checkbox"><label class="check" for="checkbox">Check if you have Student Bus pass</label>
                    <input type="submit" name="sign_user" value="Sign Up">
                </div>
                <!--/ lower-->
            </form>
            </div>