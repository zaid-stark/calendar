<?php
  
  //Store the file name into variable
  $file = 'pdf6.pdf';
  $pdf6 = 'pdf6.pdf';
    
  // Header content type
  header('Content-type: application/pdf');
    
  header('Content-Disposition: inline; pdf6="' . $pdf6 . '"');
    
  header('Content-Transfer-Encoding: binary');
    
  header('Accept-Ranges: bytes');
    
  // Read the file
  @readfile($file);
    
  ?>