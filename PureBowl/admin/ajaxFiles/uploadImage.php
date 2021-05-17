<?php // fonction deplace l'image du bureau au siteweb si avec succes 7ot true 

if(isset($_FILES['file']['name'])){
    // file name
    $filename = $_FILES['file']['name'];

    // Location
    $location = '../upload/'.$filename;

    // file extension
    $file_extension = pathinfo($location, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension); // forcer en miniscule

    // Valid extensions
    $valid_ext = array("jpg","png","jpeg");

    $response = 0;
    if(in_array($file_extension,$valid_ext)){
        // Upload file
        if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){  // fonction defenie de^macer une fichier telecharger 
            $response = 1;
        }
    }

    echo $response;
    exit;
}