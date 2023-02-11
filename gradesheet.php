<html>
    <head>
        <title>Gradesheet</title>
  </head>
    <body align="center">
    <form method="post">
        <h2><u>Enter Marks</u></h2>
                <table border=2 align="center" border="1" cellpadding="8" bgcolor="black" style="color:aqua">
                    <tr align="center">
                        <td>
                            Enrollment No :
                        </td>
                        <td>
                            <input type=text name="t1">
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                        Web and Network Security :
                        </td>
                        <td>
                            <input type=text name="t2">
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                        Advanced Java Programming :
                        </td>
                        <td>
                            <input type=text name="t3">
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                        Android Application Development :
                        </td>
                        <td>
                            <input type=text name="t4">
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                        Web Designing using PHP & MySQL :
                        </td>
                        <td>
                            <input type=text name="t5">
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                        Project - II :
                        </td>
                        <td>
                            <input type=text name="t6">
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan=2>
                        <input type=submit name="s" value="Result">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
               
    <?php
     $ER = $_POST['t1'];
      echo "<h2><u>GTU Diploma SEM-6 Gradesheet</u></h2>
            <h3>Enrollment No.:- $ER</h3>";

    if(isset($_POST['s']))
    {
        $WNS=$_POST['t2']; 
        $AJ= $_POST['t3'];
        $AAD=$_POST['t4'];
        $PHP=$_POST['t5']; 
        $PRJ=$_POST['t6'];

        //WNS
  function gradewns($avg)
  {
    $a=null;
  if($avg>=90 && $avg<100)
     $a = "AA";
 elseif($avg >= 80)
     $a = "AB";
 elseif($avg >= 70)
     $a = "BB";
 elseif($avg >= 60)
     $a = "BC";
 elseif($avg >= 50) 
     $a = "CC";
 elseif($avg >= 40)
     $a = "FF";
 else $a = "Fail!";
     echo"<table align=center border=1 cellpadding=8 bgcolor=black style=color:aqua>
     <tr style=color:red bgcolor=yellow >
         <th>Subject Code</th>
         <th>Subject</th>
         <th>Grade</th>
     </tr>
      <tr>
   <td>3361601</td>
   <td>Web and Network Security</td>
   <td>$a</td></tr>";
  }        
  //AJ
function gradeaj($avg)
{
  $a=null;
if($avg>=90 && $avg<100)
   $a = "AA";
elseif($avg >= 80)
   $a = "AB";
elseif($avg >= 70)
   $a = "BB";
elseif($avg >= 60)
   $a = "BC";
elseif($avg >= 50) 
   $a = "CC";
elseif($avg >= 40)
   $a = "FF";
else $a = "Fail!";
   echo" <tr>
   <td>3360701</td>
   <td>Advanced Java Programming</td>
   <td>$a</td></tr>";
}

//AAD
function gradeaad($avg)
{
  $a=null;
if($avg>=90 && $avg<100)
   $a = "AA";
elseif($avg >= 80)
   $a = "AB";
elseif($avg >= 70)
   $a = "BB";
elseif($avg >= 60)
   $a = "BC";
elseif($avg >= 50) 
   $a = "CC";
elseif($avg >= 40)
   $a = "FF";
else $a = "Fail!";
   echo"  <tr>
   <td>3361602</td>
   <td>Android Application Development</td>
   <td>$a</td></tr>";
}

//PHP
function gradephp($avg)
{
  $a=null;
if($avg>=90 && $avg<100)
   $a = "AA";
elseif($avg >= 80)
   $a = "AB";
elseif($avg >= 70)
   $a = "BB";
elseif($avg >= 60)
   $a = "BC";
elseif($avg >= 50) 
   $a = "CC";
elseif($avg >= 40)
   $a = "FF";
else $a = "Fail!";
   echo"<tr>
    <td>3361603</td>
              <td>Web Designing using PHP & MySQL</td>
              <td>$a</td></tr>";
}

//PRJ
function gradeprj($avg)
{
  $a=null;
if($avg>=90 && $avg<100)
   $a = "AA";
elseif($avg >= 80)
   $a = "AB";
elseif($avg >= 70)
   $a = "BB";
elseif($avg >= 60)
   $a = "BC";
elseif($avg >= 50) 
   $a = "CC";
elseif($avg >= 40)
   $a = "FF";
else $a = "Fail!";
   echo "<tr>
   <td>3361606</td>
              <td>Project - II</td>
              <td>$a</td></tr>
              </table>";
}

function grade()
{
        $WNS=$_POST['t2']; 
        $AJ= $_POST['t3'];
        $AAD=$_POST['t4'];
        $PHP=$_POST['t5']; 
        $PRJ=$_POST['t6'];

  $avg = ($WNS+$AJ+$AAD+$PHP+$PRJ)/5;
  $a=null;
if($avg>=90 && $avg<100)
   $a = "AA";
elseif($avg >= 80)
   $a = "AB";
elseif($avg >= 70)
   $a = "BB";
elseif($avg >= 60)
   $a = "BC";
elseif($avg >= 50) 
   $a = "CC";
elseif($avg >= 40)
   $a = "FF";
else $a = "Fail!";
echo "<p style=color:darkblue;> <b>Your Obtained Grade : $a</b></p>
      <p style=color:darkblue;> <b>Average : $avg</b><p>
<p style=color:red> <b>This is Your Result, Thank You.</b></p>";
}
}
 
gradewns($WNS);
gradeaj($AJ);
gradeaad($AAD);
gradephp($PHP);
gradeprj($PRJ);
grade(); //This is copy of hansil program
           ?>
   </body>
</html>
