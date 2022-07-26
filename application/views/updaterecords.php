<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
 
<body>
 <?php
  $i=1; 
  foreach($data as $row)
  {
  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="10">
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="first_name" value="<?php echo $row->first_name; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="last_name" value="<?php echo $row->last_name; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="email" value="<?php echo $row->email; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update_Records"/></td>
  </tr>
</table>
	</form>
	<?php } ?>

</body>
</html>