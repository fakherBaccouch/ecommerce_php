
<?php
 if( isset($_SERVER["QUERY_STRING"]) && $_SERVER["QUERY_STRING"]=="categorie=laptop"){

	$CURRENT_PAGE = "laptop"; 
			$PAGE_TITLE = "article_list";

 }else if(isset($_SERVER["QUERY_STRING"]) && $_SERVER["QUERY_STRING"]=="categorie=tab"){

$CURRENT_PAGE = "tab"; 
			$PAGE_TITLE = "article_list";
 }else if(isset($_SERVER["QUERY_STRING"]) && $_SERVER["QUERY_STRING"]=="categorie=souris"){

    $CURRENT_PAGE = "souris"; 
                $PAGE_TITLE = "article_list";
     }





?>