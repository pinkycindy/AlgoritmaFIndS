
  <?php
  if($_POST['sky']==null){$_POST['sky']="0";}
  $sky=$_POST['sky'];
  if($_POST['airTemp']==null){$_POST['irTemp']="0";}
  $air=$_POST['airTemp'];
  if($_POST['hum']==null){$_POST['hum']="0";}
  $hum=$_POST['hum'];
  if($_POST['wind']==null){$_POST['wind']="0";}
  $wind=$_POST['wind'];
  if($_POST['water']==null){$_POST['water']="0";}
  $water=$_POST['water'];
  if($_POST['forecast']==null){$_POST['forecast']="0";}
  $forecast=$_POST['forecast'];



    $txt_file    = file_get_contents('data.txt');
    $rows        = explode("\n", $txt_file);
    array_shift($rows);
   $x=0;
 
      foreach($rows as $row => $data)
      {
      // Memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
        $row_data = explode('|', $data);
     
        $info[$row][0]      = $row_data[0];
        $info[$row][1]      = $row_data[1];
        $info[$row][2]      = $row_data[2];
        $info[$row][3]      = $row_data[3];
        $info[$row][4]      = $row_data[4];
        $info[$row][5]      = $row_data[5];
        $info[$row][6]      = $row_data[6];
     
       $x++;     
      }
     
           $temp=array('?', '?', '?', '?', '?', '?');

           $h=1;
      for($i=0; $i<$x; $i++){
        if(substr($info[$i][6],0,3)=='yes'){
          echo "hipotesa ".$h++." :";
          for($j=0; $j<6; $j++){
            if($i==0){
              $temp[$j]=$info[$i][$j];
            }
            else{
              if($info[$i][$j]!=$temp[$j])
                $temp[$j]='?';
            }

            echo " ".$temp[$j];     
          }
        echo "<br>";
        }

    }


    $problem=array($sky, $air, $hum, $wind, $water, $forecast);
    echo "masalah : ";

    for($i=0;$i<6; $i++){
      echo $problem[$i]." ";
    }

    for($i=0;$i<6; $i++){
      if($problem[$i]!=$temp[$i])
        $problem[$i]='?';
    }
    $hasil=0;
    for($i=0;$i<6; $i++){
      if($problem[$i]==$temp[$i])
        $hasil++;
    }
    echo "<br>hasil : ";
    if($hasil==6)
      echo "yes";
    else
      echo "no";


  ?>
 
