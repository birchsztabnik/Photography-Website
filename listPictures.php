<?php
function listPicturesInDir($dir) {
    $dirname = "PHOTO_DIRECTORY" . $dir . "/";
    $images = glob($dirname . "*.jpg");
    $previousPic = "null";
    for ($x = 0; $x < count($images); $x++) {
        $image = $images[$x];
        $next = $images[$x+1];
        $name = str_replace(".jpg", "", $image);
        $fp = strrpos($name, '/', 5) + 1;
        $name = substr($name, $fp, strlen($name));
        $id = str_replace(" ", "", $name);

        echo '<a href="#' . $id . '"><img class="galleryPics" src="' . $image . '" alt = "' . $name . '" title="'. $name.'"/></a>';
        echo '<div id="' . $id . '" class="modalDialog">';
        echo '<div>';
		
        if($previousPic != "null"){
            echo'<a href="#'.$previousPic . '"><img src="../pictures/arrowLeft2.png" alt="Previous photograph" title= "Previous photograph" class="arrow"/></a> ';
        }

        $name_next = str_replace(".jpg", "", $next);
        $fp_next = strrpos($name_next, '/', 5) + 1;
        $name_next2 = substr($name_next, $fp_next, strlen($name_next));
        $id_next = str_replace(" ", "", $name_next2);
        if($id_next != ""){
			echo'<a href="#'.$id_next . '"><img src="../pictures/arrowRight2.png" alt="Next photograph" title="Next photograph" class="arrow"/></a>';
        }
        echo '<a href="#close" title="Close" class="close">X</a>';
        echo '<h2>' . $name . '</h2>';
        echo '<img class="modalImg" src="' . $image . '" alt = "' . $name . '"/>';
        echo '</div>';
        echo '';
        echo '</div>';
        $previousPic = $id;
    }
}
?>