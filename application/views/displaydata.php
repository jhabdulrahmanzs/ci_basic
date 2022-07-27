<html>
<head>
<title>Display records</title>
<link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" >
<!-- <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style> -->
</head>
 
<body>
<table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#f5f5f5">
    <th>S.No</th>  
    <th>First name</th>
    <th>Last name</th>
    <th>Email Id</th>
    <th>Phone</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php
//   if(isset($data)){
    $i=1;
    foreach($data as $row)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$row->firstname."</td>";
    echo "<td>".$row->lastname."</td>";
    echo "<td>".$row->useremail."</td>";
    echo "<td>".$row->phone."</td>";
    echo "<td><a href='updatedata?id=".$row->id."'>Update</a></td>";
    echo "<td><a href='RegisterController/deleterecords?id=".$row->id."'>Delete</a></td>";
    echo "</tr>";
    $i++;
    // }
  }
 
 
   ?>
</table>




</body>
</html>