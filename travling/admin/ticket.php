<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="ticket.css">
<body>
    <h1>ALL TICKET BOOKED<h1>
    <table>
        <thead>
            <th>SEATNO</th>
    <th>USERNAME</th>
    <th>FROM</th>
    <th>TO</th>
    <th>DATE</th>
    <th>CLASS</th>
    </thead>
    <tbody>
        <?php
        require('./connect.php');

        $sql="SELECT * FROM avitrain2";
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
           while ($row=mysqli_fetch_assoc($result)) {
           ?>
           <tr>
           <td><?php echo $row['id']?></td>
           <td><?php echo $row['username']?></td>
           <td><?php echo $row['flocation']?></td>
           <td><?php echo $row['tlocation']?></td>
           <td><?php echo $row['date']?></td>
           <td><?php echo $row['class']?></td>
           </tr>
           <?php
           } 
        }
    ?>
    </tbody>
</table>


</body>
</html>