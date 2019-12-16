<?php 
                //Creating a random string based on time being created
                $dateTime = new DateTime();
                $now = $dateTime->format("Y-m-d H:i:s");

                //Creating ID for each car that is being make
                $uniqueID = $now.mt_rand(1,100);
                $upload_ID = md5($uniqueID);
if (!empty(($upload))) {
                    $validTypes = ["docx", "pdf",];

                    if (array_search($_FILES["lektie"]["type"], $validTypes) === false) {
                        die("Wrong file type");
                    }
                    
                    
                    $fileName1 = md5($now);

                    $newFilePath = $directory . "".(mt_rand(1,9)) . $fileName."".$_FILES["lektie"]["name"];
	
	                $tmpFilePath = $_FILES["lektie"]["tmp_name"];
	
	                move_uploaded_file($tmpFilePath, $newFilePath);
                        
                    $upload = $newFilePath;

                    echo "<font color='green'>File 1 uploaded = ".$newFilePath." <br>";
                } else{
                    echo "<font color='orange'>File 1 has not been uploaded because you didn't choose an image <br>";
                    $upload = "";
                } ?>