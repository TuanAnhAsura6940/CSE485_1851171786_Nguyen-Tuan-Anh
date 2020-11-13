

<form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Add User</h1>
    <p>Please fill in this form to add an account.</p>
    <hr>


    <label for="userid"><b>UID</b></label>
    <input type="text" placeholder="Enter User Id" name="uid" required>

    <label for="userfirst_name"><b>Firstname</b></label>
    <input type="text" placeholder="Enter First Name" name="ufn" required>

    <label for="userlast_name"><b>Lastname</b></label>
    <input type="text" placeholder="Enter Last Name" name="uln" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="addbtn">Add</button>
    </div>
  </div>
</form>