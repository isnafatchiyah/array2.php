<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Belajar PHP</title>
</head>
<body>

<h1>Array  PHP</h1>

 <?php
   //------- tipe data array -------
$kontak = array('anjing','kurakura','koala');
$nama = ['Hilman','Endy','Tiqa'];

 //sort($angka);
 // print_r($angka);
 
 //echo count($nama);
 
 
  //-------  Associative array -------
  // key => isi
  
    // $data = array("nama" => "hilman",
    //           "umur" => 21,
	//		   "kerja" => "pengacara"
	//		   
	//		);   
			
    //$data = array("istri" => " belum ada",
    //             "leptop" => "ChromeBook",
	//		   
	//		);   

	// print_r($data);	
    //$data['nama']="Hilman ramadhan";	
    // echo "Nama adalah".$data ['nama'];
	
	//---------- methode assosiatif array -----
	// array_values array_keys array_merge
	//print_r( array_merge($data,$data2) );
	
	///---------multi dimensi array---------\
	$data = array(
	           array("programmer","21","malas"),
			   array("desigmer","24","rajin"),
			   array("manager","34","malas banget")
			   );
    
	// 00 01 02
	// 10 11 12 
	// 20 21 22
	
	$data[2] [0] = "proyek manager";
	echo $data [2] [0];
	
  
 ?>
  
</body>
</html>