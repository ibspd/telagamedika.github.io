<?php
/* contoh text */  
$text = 'Eh, ini adalah testing aplikasi cetak teks langsung ke printer dengan PHP lhoo....';     
/* tulis dan buka koneksi ke printer */    
$printer = printer_open("EPSON L120 Series");  
/* write the text to the print job */  
printer_write($printer, $text);   
/* close the connection */ 
printer_close($printer);
?>
1
2
3
4
5
6
7
8
9
10
<?php
/* contoh text */  
$text = 'Eh, ini adalah testing aplikasi cetak teks langsung ke printer dengan PHP lhoo....';     
/* tulis dan buka koneksi ke printer */    
$printer = printer_open("EPSON L120 Series");  
/* write the text to the print job */  
printer_write($printer, $text);   
/* close the connection */ 
printer_close($printer);
?>