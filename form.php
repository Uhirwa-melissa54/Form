<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submission</title>
    <style>
        table{
            width:100%;
            height:80px;
        }
        body{
        background-image: url(bACK.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        font-size:20px;
      }
    

    </style>
</head>
<body> 
<?php
if (isset($_POST['submit'])) {
    $n1 = $_POST['fname'];
    $n2 = $_POST['lname'];
    $g2 =$_POST['gender'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel']; 
    $college = $_POST['college'];
    $grade = $_POST['grade'];
    $vol = $_POST['vol'];
    $time = $_POST['time'];
    $countries = $_POST['countries'];
    $location=$_POST['location'];
    $marks=$_POST['marks'];
    $ex = $_POST['ex'];
    $comb=$_POST['combination'];
    $age=$_POST['nubr'];
    $lang=$_POST['lang'];
    $pro=$_POST['Projects'];
    $url=$_POST['url'];
    $week=$_POST['week'];
    $color=$_POST['color'];
    $des=$_POST['most'];
    $date=$_POST['date'];
    $details=$_POST['details'];

    

?>
    <table border="1" cellspacing="0" class="table">
        <caption class="cap" ><b><u><i>Personal information</i></u><b></caption>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Gender</th>
            <th>Gmail</th>
            <th>Telephone</th>
            <th>Date of birth</th>

        </tr>
        <tr>
            <td><?php echo "$n1"; ?></td>
            <td><?php echo "$n2"; ?></td>
            <td><?php echo "$g2"; ?></td>
            <td><?php echo "$mail"; ?></td>
            <td><?php echo "$tel"; ?></td>
            <td><?php echo "$date"; ?></td>

        </tr>
    </table>
    <table border="1"  cellspacing="0" class="table">
        <caption class="cap"><b><u><i>Educational background<i><u></b></caption>
        <tr>
            <th>Combination</th>
            <th>School</th>
            <th>Grade</th>
            <th>School location</th>
            <th>Marks</th>
        </tr>
        <tr>
            <td><?php echo "$college"; ?></th>
            <td><?php echo "$comb"; ?></th>
            <td><?php echo "$grade"; ?></th>
            <td><?php echo "$location"; ?></th>
            <td><?php echo "$marks"; ?></th>
    
        </tr>
    </table>
    <table border="1"  cellspacing="0" class="table">
        <caption class="cap"><b><u><i>Elegibility information<i></u></b></caption>
        <tr>
            <th>Age at the start</th>
            <th>languages</th>
            <th>extracuricullar</th>
            <th>Projects</th>
            <th>Projects Url</th>
            

            
        </tr>
        <tr>
            <td><?php echo "$age"; ?></td>
            <td><?php echo "$lang"; ?></td>
            <td><?php echo "$ex"; ?></td>
            <td><?php echo "$pro"; ?></td>
            <td><?php echo "$url"; ?></td>
        </tr>
    </table>
    <table border="1"  cellspacing="0" class="table">
    <caption class="cap"><b><u><i>During competition</i></u></b></caption>
        <tr>
        <th> week of course</th>
        <th>Typing rate</th>
        <th>Time</th>
         <th> country</th>
            
            
            


            
        </tr>
        <tr>
        <td><?php echo "$week"; ?></td>
        <td><?php echo "$vol"; ?></td>
        <td><?php echo "$time"; ?></td>
        <td><?php echo "$countries"; ?></td>  
        </tr>
    </table>
    </table>
    <table border="1"  cellspacing="0" class="table">
    <caption class="cap"><b><u><i>General question</i></u></b></caption>
    <tr>
        <th> Color</th>
        <th>Descrription</th>
        <th>Details of limitation</th>
</tr>
<tr>
        <td><?php echo "$color"; ?></td>
        <td><?php echo "$des"; ?></td>
        <td><?php echo "$details"; ?></td>


    
<?php
}
?>
</body>
</html>