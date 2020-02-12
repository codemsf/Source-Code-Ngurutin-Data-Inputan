
<!DOCTYPE html>
<html>
<body>
	<center>
<div>
        <center><h3>MASUKKAN ANGKA YANG AKAN DI URUTKAN --</h3></center>
    
        <!--form input-->
        <form action="" method="post">           
            <input type="number" name="siji">
            <input type="number" name="loro">
            <input type="number" name="telu">
            <input type="number" name="papat">
            <input type="number" name="limo">
            <input type="submit" name="submit">
        </form>
 
        <?php  
        //submit ditekan
        if(isset($_POST['submit'])){
            //menangkap data
            $siji=$_POST['siji'];
            $loro=$_POST['loro'];
            $telu=$_POST['telu'];
            $papat=$_POST['papat'];
            $limo=$_POST['limo'];
 
            //move to array
            $angka=array($siji,$loro,$telu,$papat,$limo); 	
 
            //sort() data
            sort($angka);  
            echo "</br>";
            echo "<div class='hasil'> HASIL : ";
            
            //looping array ke for
            $jumlah=count($angka);  
            for($a=$jumlah;$a>0;$a--)  
            {  
                echo $angka[$a];  
                echo " ";  
            }  	
           
 
        }
        ?>  
    </div></center>
</body>
</html>