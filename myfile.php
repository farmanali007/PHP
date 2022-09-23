<?php
// // $file ="readme.txt";
// echo filetype("newfolder");
// echo filesize("readme.txt");
// echo "<br>";
// echo realpath("readme.txt");
// echo "<pre>";
// print_r(pathinfo("readme.txt"));
// echo "</pre>";
// if(file_exists($file)){
//   //echo readfile("readme.txt");
//   //copy($file, "newfolder/newfle.txt");
//   //rename("newfle.txt", "newfile.txt");
// //unlink("newfle.txt");
// // mkdir("newfolder");

// }else{
//   echo "file not exist";
// }

//
// if(file_exists("newfolder")){
//   rmdir("newfolder");
// }else{
//   echo "folder does not exists";
// }
$file = "readme.txt";
$path = realpath($file);
echo basename($path, ".txt");
 ?>
