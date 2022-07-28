<!DOCTYPE html>
<html>

<head>
  <title>Update Data</title>

  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
</head>

<body>
  <?php
  $i = 1;
  foreach ($data as $row) {
  ?>
    <form method="post" action="">
      <h4>update Page:</h4>
      <table width="600" border="1" cellspacing="5" cellpadding="10">
        <tr>
          <td width="230">First Name</td>
          <td width="329">
            <input type="text" name="first_name" value="<?php echo $row->firstname; ?>" />
          </td>
        </tr>
        <tr>
          <td>Last Name </td>
          <td><input type="text" name="last_name" value="<?php echo $row->lastname; ?>" /></td>
        </tr>
        <tr>
          <td>Email </td>
          <td><input type="text" name="user_email" value="<?php echo $row->useremail; ?>" /></td>
        </tr>
        <tr>
          <td>Phone Number </td>
          <td><input type="text" name="user_phone" value="<?php echo $row->phone; ?>" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="update" value="Update_Records" />
          </td>
        </tr>
      </table>
    </form>
  <?php
  }
  ?>

</body>

</html>