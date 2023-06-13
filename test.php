

<?php
    
    $zip = new ZipArchive;
    $res = $zip->open('C:/Users/LENOVO/Downloads/11zon_compressed.zip');
    if ($res === TRUE) {
      $zip->extractTo('C:/Users/LENOVO/Downloads/img-rename');
      $zip->close();  
      unlink('C:/Users/LENOVO/Downloads/11zon_compressed.zip');
    } else {
      echo '<h3> No Zip File Here...</h3>';
    }
                    
    $flag = 0;

    $images = glob("C:/Users/LENOVO/Downloads/img-rename/11zon_compressed" . "/*.jpg");
    if(count($images) == 0){
        $flag=1; 
    }
    else{
        foreach($images as $image)
        {
            $from = $image;      
            $a = explode("/", $image);
            $name = $a[count($a)-1];
            $b = explode("_", $name);
            $renamed = $b[0].".jpg";
    
            $to = "C:/Users/LENOVO/Downloads/renamed/".$renamed;
    
            /* Rename File name */
            if( !rename($from, $to) ) {  
                echo "File can't be renamed!";  
               
            }  
            else {  
                echo "Rename ".$renamed."<br/>"; 
               
            } 
        }
        rmdir("C:/Users/LENOVO/Downloads/img-rename/11zon_compressed");
    }
?>



