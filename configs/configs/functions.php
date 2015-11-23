<?php
/*
	Upload an image and create the thumbnail. The thumbnail is stored 
	under the thumbnail sub-directory of $uploadDir.
	
	Return the uploaded image name and the thumbnail also.
*/
//require "simplified_url.php";

function uploadImage($inputName, $uploadDir)
{
	$image     = $_FILES[$inputName];
	$imagePath = '';
	$thumbnailPath = '';
	// if a file is given
	if (trim($image['tmp_name']) != '') {
	
		$ext = substr(strrchr($image['name'], "."), 1);
		//$ext = substr(strrchr($image['name'], "."), 1); 
		$thumbnailPath =  md5(rand() * time()) . ".$ext";

		// generate a random new file name to avoid name conflict
		// then save the image under the new file name
		$imagePath = md5(rand() * time()) . ".$ext";
		
		$result    = move_uploaded_file($image['tmp_name'], $uploadDir . $imagePath);
		if ($result) {		
		  $result = createThumbnail($uploadDir . $imagePath, $uploadDir . $thumbnailPath, IMAGE_WIDTH);
		  unlink($uploadDir . $imagePath);
		  $Path = $result;
		  //exit;
		  
      //$imagePath = $result;
		  
		}else{
		// the image cannot be uploaded
			//$imagePath = $thumbnailPath = '';
		}
		/*
		if ($result) {
			// create thumbnail
			$thumbnailPath =  md5(rand() * time()) . ".$ext";
			$result = createThumbnail($uploadDir . $imagePath, $uploadDir . 'thumbnail/' . $thumbnailPath, THUMBNAIL_WIDTH);
			
			// create thumbnail failed, delete the image
			if (!$result) {
				unlink($uploadDir . $imagePath);
				$imagePath = $thumbnailPath = '';
			} else {
				$thumbnailPath = $result;
			}	
		} else {
			// the image cannot be uploaded
			$imagePath = $thumbnailPath = '';
		}
		*/
	}
	//return array('image' => $imagePath, 'thumbnail' => $thumbnailPath);
	return array('image' => $Path);
}

/*
	Create a thumbnail of $srcFile and save it to $destFile.
	The thumbnail will be $width pixels.
*/
function createThumbnail($srcFile, $destFile, $width, $quality = 75)
{
	$thumbnail = '';
	
	if (file_exists($srcFile)  && isset($destFile))
	{
		$size        = getimagesize($srcFile);
		$w           = number_format($width, 0, ',', '');
		$h           = number_format(($size[1] / $size[0]) * $width, 0, ',', '');
		
		$thumbnail =  copyImage($srcFile, $destFile, $w, $h, $quality);
	}
	
	// return the thumbnail file name on sucess or blank on fail
	return basename($thumbnail);
}

/*
	Copy an image to a destination file. The destination
	image size will be $w X $h pixels
*/
function copyImage($srcFile, $destFile, $w, $h, $quality = 75)
{
    $tmpSrc     = pathinfo(strtolower($srcFile));
    $tmpDest    = pathinfo(strtolower($destFile));
    $size       = getimagesize($srcFile);

    if ($tmpDest['extension'] == "gif" || $tmpDest['extension'] == "jpg" || $tmpDest['extension'] == "jpeg")
    {
       $destFile  = substr_replace($destFile, 'jpg', -3);
       $dest      = imagecreatetruecolor($w, $h);
       //imageantialias($dest, TRUE);
    } elseif ($tmpDest['extension'] == "png") {
       $dest = imagecreatetruecolor($w, $h);
       //imageantialias($dest, TRUE);
    } else {
      return false;
    }

    switch($size[2])
    {
       case 1:       //GIF
           $src = imagecreatefromgif($srcFile);
           break;
       case 2:       //JPEG
           $src = imagecreatefromjpeg($srcFile);
           break;
       case 3:       //PNG
           $src = imagecreatefrompng($srcFile);
           break;
       default:
           return false;
           break;
    }

    imagecopyresampled($dest, $src, 0, 0, 0, 0, $w, $h, $size[0], $size[1]);

    switch($size[2])
    {
       case 1:
       case 2:
           imagejpeg($dest,$destFile, $quality);
           break;
       case 3:
           imagepng($dest,$destFile);
    }
    return $destFile;

}

/*
	Check if the user is logged in or not
*/
function checkLogin()
{
	if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] == false) {
		header('Location: login.php');
		exit;
	}
}

/*
	Create the link for moving from one page to another
*/
function getPagingLink($totalResults, $pageNumber, $itemPerPage = 10, $strGet = '')
{
	$pagingLink    = '';
	$totalPages    = ceil($totalResults / $itemPerPage);
	
	// how many link pages to show
	$numLinks      = 10;

	// create the paging links only if we have more than one page of results
	if ($totalPages > 1) {
		$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;

//print $self;

		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1) {
				$prev = " <a href=\"$self?pageNum=$page&$strGet\">[Prev]</a> ";
			} else {
				$prev = " <a href=\"$self?$strGet\">[<]</a> ";
			}	
				
			$first = " <a href=\"$self?$strGet\">[<<]</a> ";
		} else {
			$prev  = ''; // we're on page one, don't show 'previous' link
			$first = ''; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = " <a href=\"$self?pageNum=$page&$strGet\">[>]</a> ";
			$last = " <a href=\"$self?pageNum=$totalPages&$strGet\">[>>]</a> ";
		} else {
			$next = ''; // we're on the last page, don't show 'next' link
			$last = ''; // nor 'last page' link
		}

		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
				$pagingLink[] = " $page ";   // no need to create a link to current page
			} else {
				if ($page == 1) {
					$pagingLink[] = " <a href=\"$self?$strGet\">$page</a> ";
				} else {	
					$pagingLink[] = " <a href=\"$self?pageNum=$page&$strGet\">$page</a> ";
				}	
			}
	
		}
		
		$pagingLink = implode(' | ', $pagingLink);
		
		// return the page navigation link
		$pagingLink = $first . $prev . $pagingLink . $next . $last;
	}
	
	return $pagingLink;
}

/*
	Display the breadcrumb navigation on top of the gallery page
*/
function showBreadcrumb()
{
	if (isset($_GET['album'])) { 
		$album = $_GET['album'];
		$sql  = "SELECT al_name
                 FROM tbl_album
		         WHERE al_id = $album";
				 
		$result = mysql_query($sql) or die('Error, get album name failed. ' . mysql_error());
		$row = mysql_fetch_assoc($result);
		$content .= ' &gt; <a href="index.php?page=list-image&album=' . $album . '">' . $row['al_name'] . '</a>';
		
		if (isset($_GET['image'])) {
			$image = $_GET['image'];
			$sql  = "SELECT im_title
					 FROM tbl_image
					 WHERE im_id = $image";
					 
			$result = mysql_query($sql) or die('Error, get image name failed. ' . mysql_error());
			$row = mysql_fetch_assoc($result);
			
			$content .= ' &gt; <a href="index.php?page=image-detail&album=' . $album . '&image=' . $image . '">' . $row['im_title'] . '</a>';
			
			
		}
		return $content;
	}
}


//Resize image
function get_image_scr($jpg){

	if($jpg != ""){
		$x = "./images/".$jpg;
		//print $x;
		//exit;
		$a = 500;
		if(file_exists($x)){
			$list2 = array();
			$list2 = getimagesize($x);
		
			if($list2[0] > $list2[1]){
				$width = $a;
				$height = ($a/$list2[0])*$list2[1];
			}else if($list2[0] < $list2[1] ){
				$width = ($a/$list2[1])*$list2[0];
				$height = $a;
			}else{
				$width = $a;
				$height = $a;
			}
		}else{
			$width = $a;
			$height = $a;
		}
		
		$src = "<img SRC=\"".$x."\" width=".$width." height=".$height." align=center border=0>";
		return $src;
	}else{
	
	}
}


//permet de rediriger vers une url apres une durÈe x definie 
function redirect($tmps,$url) {
    //chargement de l'url dans les  secondes qui suivent
    die('<meta http-equiv="refresh" content="'.$tmps.';URL='.$url.'">');
};


function get_villes(){
	$sql  = "SELECT * FROM villes  ORDER BY nom ASC";
	$result = mysql_query($sql) or die('Error, list album failed. ' . mysql_error());
	while ($row = mysql_fetch_assoc($result)) {  
		$villes[$row[id]] = $row['nom'];
	}
	
	return $villes;
}
function get_villes_by_id(){
	$sql  = "SELECT * FROM villes  ORDER BY nom ASC";
	$result = mysql_query($sql) or die('Error, list album failed. ' . mysql_error());
	while ($row = mysql_fetch_assoc($result)) {  
		$vl[$row['ville']] = $row['id'];
	}
	
	return $vl;
}



//Get livre d'Or
function get_livre_dor(){
	$sql_recent = "select * FROM livres WHERE commentaire!='' ORDER BY created DESC LIMIT 0,5";
	$result_rencent = mysql_query($sql_recent) or die('Error, list album failed. ' . mysql_error());
	while ($row = mysql_fetch_assoc($result_rencent)) {
		$word = explode("...",wordwrap($row['commentaire'],20,"..."));
		$word = $word[0];
		$livre[$row['ecole_id']] = $word." ...";
	}
	
	return $livre;
}

function count_photos($login){
  
  	$sql_msgnvo  = "SELECT * FROM album_photo where user_id = $login ";
  	$result_msgnvo = mysql_query($sql_msgnvo) or die('Error, get album1 info failed. ' . mysql_error());
  	$nbre_msgnvo = mysql_num_rows($result_msgnvo);
  
  	return $nbre_msgnvo;
}

function get_nvomsg($login){
  if(isset($login))
  { 
  	$sql_msgnvo  = "SELECT * FROM messages where recep_log='$login' and statut is NULL ";
  	$result_msgnvo = mysql_query($sql_msgnvo) or die('Error, get album1 info failed. ' . mysql_error());
  	$nbre_msgnvo = mysql_num_rows($result_msgnvo);
  
  	return $nbre_msgnvo;
  } else {return 0; }
}

function get_user($id){
	
	$sql_liste_user  		= "SELECT * FROM user WHERE id == $id  ";
	$result_liste_user  = mysql_query($sql_liste_user) or die('Error, list album failed. ' . mysql_error());
	
	return $result_liste_user;
}

function get_users($nb,$yesno){
	if($yesno == "yes"){
		$sql_liste_user  = "SELECT user.id,login,album_photo.nom FROM user,album_photo WHERE valide=1 AND activation=1 AND user.id=user_id ORDER BY RAND() limit $nb ";
	}else{
		$sql_liste_user  = "SELECT * FROM user ORDER BY RAND() limit $nb  ";
	}
	
	//print $sql_liste_user;
	$result_liste_user  = mysql_query($sql_liste_user) or die('Error, list album failed. ' . mysql_error());
	
	return $result_liste_user;
}

function scale_image($p,$p1,$alt,$mw='',$mh='') { // path max_width max_height
    if(list($w,$h) = @getimagesize($p)) {
    foreach(array('w','h') as $v) { $m = "m{$v}";
        if(${$v} > ${$m} && ${$m}) { $o = ($v == 'w') ? 'h' : 'w';
        $r = ${$m} / ${$v}; ${$v} = ${$m}; ${$o} = ceil(${$o} * $r); } }
    return("<img src='{$p1}' border='0' title='{$alt}' width='{$w}' height='{$h}' />"); }
}

function previous_id($table, $id_column) {
  if ($table && $id_column) {
    $result = mysql_query("SELECT MAX(".$id_column.") AS maxid FROM ".$table);
    $stuff = mysql_fetch_assoc($result);
    return $stuff['maxid'];
  } else {
    return false;
  }
}

function previous_registration($table, $email) {
  if ($table && $id_column) {
    $result = mysql_query("SELECT activation_created AS maxid FROM ".$table."WHERE email='$email' " );
    $stuff = mysql_fetch_assoc($result);
    return $stuff['maxid'];
  } else {
    return false;
  }
}

function get_user_element($element,$id,$champ) {
    $result = mysql_query("SELECT $champ FROM user WHERE $element='$id' " );
    $row_user_informations = mysql_fetch_assoc($result);
    return $row_user_informations[$champ] ;
}

function getElement($element,$id,$champ,$table) {
    $result = mysql_query("SELECT $champ FROM $table WHERE $element='$id' " );
    $row_user_informations = mysql_fetch_assoc($result);
    return $row_user_informations[$champ] ;
}

function checked_user_informations($id,$champ) {
    //$row_user_informations = array();
    $result = mysql_query("SELECT *  FROM user WHERE id=$id " );
    $row_user_informations = mysql_fetch_assoc($result);
    return $row_user_informations[$champ] ;
}

function checked_user_informations_login($login,$champ) {
    $result = mysql_query("SELECT *  FROM user WHERE login='$login' " );
    $row_user_informations = mysql_fetch_assoc($result);
    return $row_user_informations[$champ] ;
}

function scale_image_zoomi($p,$p1,$alt,$mw='',$mh='') { // path max_width max_height
    if(list($w,$h) = @getimagesize($p)) {
    foreach(array('w','h') as $v) { $m = "m{$v}";
        if(${$v} > ${$m} && ${$m}) { $o = ($v == 'w') ? 'h' : 'w';
        $r = ${$m} / ${$v}; ${$v} = ${$m}; ${$o} = ceil(${$o} * $r); } }
    return("<img src='{$p1}' class='zoomi' width='{$w}'/>"); }
}

function postImage_zoomi($key,$width,$height){
  $picture = getPhoto($key);
    if ($picture != "" ) {
      $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/".$picture;
      $path1 = "/utilisateurs/images/photo/".$picture;
    } else {
      if (getSexe($key) == 1 ) { 
        $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/silhouette.jpg";
    		$path1 = "/utilisateurs/images/photo/silhouette.jpg";
      } else {
        $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/silhouettef.jpg";
    		$path1 = "/utilisateurs/images/photo/silhouettef.jpg";
      } 
    } 
    
    $img = scale_image_zoomi($path,$path1,"voir son profil",$width,$height);
    return $img;
}


// Check image
function check_image($champ){
  $input_data = $_POST[$champ];
  $session_data = $_SESSION["code"];
  if ($input_data == $session_data) {
    return true;
  }else{
    return false;
  }
}

function checkuser()
{
	if (!isset($_SESSION[$_REQUEST[PHPSESSID]])) {
		return "";
	
	} else { 
  
    return $_SESSION[$_REQUEST[PHPSESSID]];
  
  }
}

//Reminder for account activation
function invitation($email){
  
  $sql = "SELECT email FROM user WHERE email='$email'";
  $result = db_connect($sql);
  $nb = mysql_num_rows($result);
  if($nb == 0){
    //$last_id = $activation_created;
  
  	$headers.="From:<info@ecoleivoire.net>\n";
  	$headers.="Reply-To: info@ecoleivoire.net\n";
  	
  	$subject  = "ECOLEIVOIRE.NET: INVITATION";
  
    $recipient= $email;
  
  	$message .= "BONJOUR\n";
  	$message .= "\n";
  	$message .= "L'EQUIPE DE ECOLEIVOIRE.NET VOUS REMERCIE DE VOTRE VISITE.\n";
  	$message .= "\n";
  	$message .= "NOUS VOUS INVITONS A CREER VOTRE COMPTE SUR ECOLEIVOIRE.NET\n";
  	$message .= "http://wwww.ecoleivoire.net/?page=pageperso"."\n\n";
  	$message .= "N'OUBLIEZ PAS D' ENREGISTRER VOS ANCIENNES ECOLES DANS VOTRE PAGE PERSO POUR VOUS FAIRE VOIR PAR VOS AMIS ET ANCIENS DE CES ECOLES . \n\n\n\n";		
  	$message .= "MERCI DE TOUJOURS UTILISER ECOLEIVOIRE.NET\n";
  	$message .= "http://www.ecoleivoire.net";
  	
  	
    //mail($recipient,$subject,$message,$headers);
    mail($recipient,$subject,$message,$headers);
  }else{
  }
}


function logoutUser()
{
  $_SESSION['useron'] ="";
  
  header('Location: /index.php');
  exit;
}

function addTraces($user_id,$visiteur){
  $sql_r = "INSERT INTO traces (user_id,id_visiteur,created) VALUES ($user_id,$visiteur,now())";
  db_connect($sql_r);
  
}

function getPhoto($login){
  $sql_moi = "SELECT nom FROM album_photo where user_id = $login and valide = 1 "; 
  $result_moi = mysql_query($sql_moi) or die('Error, get album info failed. ' . mysql_error());
  $row_moi = mysql_fetch_assoc($result_moi);	
  return $row_moi["nom"];
  /*******fin album photo ******/
}

function getSexe($login){
  $sql_moi = "SELECT sexe FROM user where id = $login"; 
  $result_moi = mysql_query($sql_moi) or die('Error, get album info failed. ' . mysql_error());
  $row_moi = mysql_fetch_assoc($result_moi);	
  return $row_moi["sexe"];
  /*******fin album photo ******/
}
function getUserElement($login,$element){
  $sql_moi = "SELECT ".$element." FROM user where id = $login"; 
  //print $sql_moi;
  $result_moi = mysql_query($sql_moi) or die('Error, get album info failed. ' . mysql_error());
  $row_moi = mysql_fetch_assoc($result_moi);	
  return $row_moi[$element];
  /*******fin album photo ******/
}

function getMesAmis($lg){
  $sql_amis_de = "SELECT login,login_de,sexe,datenaiss,email FROM amis,user WHERE login_re=$lg AND user.id=amis.login_de AND acceptation=1";
  //print $sql_amis_de;
  $sql_amis_re = "SELECT login,login_re as login_de,sexe,datenaiss,email FROM amis,user WHERE login_de=$lg AND user.id=amis.login_re AND acceptation=1";
  $resultat_amis_de = mysql_query($sql_amis_de) or die('Error, get0 album1 info failed. ' . mysql_error());
  $resultat_amis_re = mysql_query($sql_amis_re) or die('Error, get0 album1 info failed. ' . mysql_error());
  while ($row_amis_de = mysql_fetch_assoc($resultat_amis_de)) {
    $amis_array1[$row_amis_de["login_de"]] = $row_amis_de;
  }
  while ($row_amis_re = mysql_fetch_assoc($resultat_amis_re)) {
    $amis_array1[$row_amis_re["login_de"]] = $row_amis_re;
  }
  if(count($amis_array1) == 0){
    $amis_array1 = array();
  }
  unset($amis_array1[$lg]);
  return $amis_array1;
}

// les id de tous mes amis
function getMesAmis2($lg){
  $sql_amis_de = "SELECT login_de FROM amis WHERE login_re=$lg AND acceptation=1";
  //print $sql_amis_de;
  $sql_amis_re = "SELECT login_re as login_de FROM amis WHERE login_de=$lg AND acceptation=1";
  $resultat_amis_de = mysql_query($sql_amis_de) or die('Error, get0 album1 info failed. ' . mysql_error());
  $resultat_amis_re = mysql_query($sql_amis_re) or die('Error, get0 album1 info failed. ' . mysql_error());
  while ($row_amis_de = mysql_fetch_assoc($resultat_amis_de)) {
    $amis_array1[] = $row_amis_de["login_de"];
  }
  while ($row_amis_re = mysql_fetch_assoc($resultat_amis_re)) { 
    $amis_array1[] = $row_amis_re["login_de"];
  }
  if(count($amis_array1) == 0){
    $amis_array1 = array();
  }
  unset($amis_array1[$lg]);
  return $amis_array1;
}

// verifier si est ami
function checkAmis($lg1,$lg2){
  $tab_amis = getMesAmis2($lg1);
  if(in_array($lg2, $tab_amis)){
    return "yes";
  }else{
    return "no";
  }
  
}

//Reminder for account activation
function activationReminder(){
  
  $sql = "SELECT email,activation_created FROM user WHERE activation=0";
  $result = db_connect($sql);
  while($row = mysql_fetch_assoc($result)){
  
    //$last_id = $activation_created;
  
  	$headers.="From:<info@ecoleivoire.net>\n";
  	$headers.="Reply-To: info@ecoleivoire.net\n";
  	
  	$subject  = "ECOLEIVOIRE.NET:VOTRE INSCRIPTION";
  
    $recipient= $row["email"];
  
  	$message = "BONJOUR\n";
  	$message .= "\n";
  	$message .= "L'EQUIPE DE ECOLEIVOIRE.NET VOUS REMERCIE DE VOTRE INSCRIPTION.\n";
  	$message .= "\n";
  	$message .= "ALLEZ SUR LE LIEN CI-DESSOUS POUR ACTIVER VOTRE COMPTE.\n";
  	$message .= "http://wwww.ecoleivoire.net/?page=activation&activation_creat=".$row["activation_created"]."\n\n";
  	$message .= "N'OUBLIEZ PAS D' ENREGISTRER VOS ANCIENNES ECOLES DANS VOTRE PAGE PERSO POUR VOUS FAIRE VOIR PAR VOS AMIS ET ANCIENS DE CES ECOLES . \n\n\n\n";		
  	$message .= "MERCI DE TOUJOURS UTILISER ECOLEIVOIRE.NET\n";
  	$message .= "http://www.ecoleivoire.net";
  	
  	
    //mail($recipient,$subject,$message,$headers);
    mail($recipient,$subject,$message,$headers);
  }
}


//Get the friends journal
function getFriendsJournal($lg,$offset,$lm){
  $journal = array();
  $amis = getMesAmis($lg);
  if(count($amis) !=0){
  $ami = implode(" OR user_id=",array_keys($amis));
  $sql = "SELECT * FROM journal WHERE user_id!=$lg AND user_id=".$ami." ORDER BY created DESC LIMIT $offset,$lm ";
  
  //print $sql;
  
  $result = db_connect($sql);
  while ($row_journal = mysql_fetch_assoc($result)) {
    $journal[$row_journal["id"]] = $row_journal;
  }
  }
  return $journal;
}

function getFriendJournal($lg,$offset,$lm){
  $journal = array();
  //$amis = getMesAmis($lg);
  //if(count($amis) !=0){
  //$ami = implode(" OR user_id=",array_keys($amis));
  $sql = "SELECT * FROM journal WHERE user_id=$lg ORDER BY created DESC LIMIT $offset,$lm ";
  
  //print $sql;
  //print $sql;
  
  $result = db_connect($sql);
  while ($row_journal = mysql_fetch_assoc($result)) {
    $journal[$row_journal["id"]] = $row_journal;
  }
  //}
  return $journal;
}

function getJournalReactions($id,$lm){
  $journal = array();
  
  $sql = "SELECT journal.id,titre,photo FROM journal,journal_comments WHERE journal.id=j_id AND journal.user_id=$id GROUP BY journal.id ORDER BY journal_comments.created DESC LIMIT 0,$lm ";
  $result = db_connect($sql);
  while ($row_journal = mysql_fetch_assoc($result)) {
    $journal[$row_journal["id"]] = $row_journal;
  }
  return $journal;
}

function getjournalCommentNumber($id){
  $query = "SELECT * FROM journal_comments WHERE j_id=$id";
  $result = db_connect($query);
  if(mysql_num_rows($result) != 0)
    return mysql_num_rows($result);
  else
    return 0;
}

function checkJournal($login,$t){
  //print $t;
  $query = "SELECT id FROM journal WHERE user_id=$login AND DATE(created)='".date("Y-m-d",$t)."'";
  //print $query;
  $result = db_connect($query);
  if(mysql_num_rows($result) != 0)
    return mysql_num_rows($result);
  else
    return 0;
}

function getFriendsBirthDays($lg){
  $friends = getMesAmis($lg);
  //print_r($friends);
  $keys = array();
  foreach($friends as $key => $value){
    $t = explode ('-',$value['datenaiss']);
    $msg = "<a href=\"/utilisateurs/?page=amis_view&login=".$key."\"><img src=\"/img/icon_birthday.gif\">".$value['login']."</a><br>";
    
    if(in_array($t[2].$t[1],$keys)){
      $anniv[$t[2].$t[1]] = $anniv[$t[2].$t[1]].$msg;
    }else{
      $keys[] = $t[2].$t[1];
      $anniv[$t[2].$t[1]] = $msg;
    }
    
  }
  return $anniv;
}
// anniversaire de la semaine
function BirthDays_week(){
  $mk = time()+7*86400;
  $n = date("m-d",$mk);
  $m = date("m-d");
  
  $query = "SELECT id,datenaiss FROM user WHERE RIGHT(datenaiss, 5) BETWEEN '$m' AND '$n' ";
  $result = db_connect($query);
  while($row = mysql_fetch_assoc($result)){
    $friends[] = $row['id'];
  }

  return $friends;
}
// affiche la photo le login et le nbre de jour qu'il reste pour son anniversaire
function postImage_week($key,$width,$height){
  $picture = getPhoto($key);
    if ($picture != "" ) {
      $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/".$picture;
      $path1 = "/utilisateurs/images/photo/".$picture;
    } else {
      if (getSexe($key) == 1 ) { 
        $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/silhouette.jpg";
    		$path1 = "/utilisateurs/images/photo/silhouette.jpg";
      } else {
        $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/silhouettef.jpg";
    		$path1 = "/utilisateurs/images/photo/silhouettef.jpg";
      } 
    } 
    
    $query = "SELECT datenaiss,login FROM user WHERE id=$key";
    $result = db_connect($query);
    $row = mysql_fetch_assoc($result);
    $t = explode ('-',$row['datenaiss']);
    $dateanniv = mktime(0,0,0,$t[1],$t[2],date("Y"));
    $approach = $dateanniv - time();
    $jours = ceil($approach / 86400);
    
    $img = scale_image($path,$path1,"L\"anniversaire de ".$row['login']." est dans ".$jours ." jour(s)",$width,$height);
    return $img;
}


// anniversaire du jour
function BirthDays_today(){
  //$mk = time()+7*86400;
  $mk = time();
  $n = date("m-d",$mk);
  $m = date("m-d");
  
  $query = "SELECT id,datenaiss FROM user WHERE RIGHT(datenaiss, 5) BETWEEN '$m' AND '$n' ";
  $result = db_connect($query);
  while($row = mysql_fetch_assoc($result)){
    $friends[] = $row['id'];
  }
  return $friends;
}

function postImage_today($key,$width,$height){
  $picture = getPhoto($key);
    if ($picture != "" ) {
      $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/".$picture;
      $path1 = "/utilisateurs/images/photo/".$picture;
    } else {
      if (getSexe($key) == 1 ) { 
        $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/silhouette.jpg";
    		$path1 = "/utilisateurs/images/photo/silhouette.jpg";
      } else {
        $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/silhouettef.jpg";
    		$path1 = "/utilisateurs/images/photo/silhouettef.jpg";
      } 
    } 
    
    $query = "SELECT datenaiss,login FROM user WHERE id=$key";
    $result = db_connect($query);
    $row = mysql_fetch_assoc($result);
    $t = explode ('-',$row['datenaiss']);
    $dateanniv = mktime(0,0,0,$t[1],$t[2],date("Y"));
    $approach = $dateanniv - time();
    $jours = ceil($approach / 86400);
    
    $img = scale_image($path,$path1,"c est l anniversaire de ".$row['login']." aujourd\"hui ",$width,$height);
    return $img;
}

function HappyBirthDay($lg){
  $result = db_connect("SELECT datenaiss FROM user WHERE id=$lg");
  $row = mysql_fetch_assoc($result);
  //print_r($row);
  $now = mktime(0,0,0,date("m"),date("d"),date("Y"));
  $t = explode ('-',$row['datenaiss']);
  $dateanniv = mktime(0,0,0,$t[1],$t[2],date("Y"));
  $approach = $dateanniv-7*86400;
  
  if($t[2].$t[1] == date("d").date("m")){
    //print "a";
  
  	$msg = "<a href=\"?page=anniv_message&login=".$lg."\"><img src=\"/img/img.php4.gif\" width=670>".$value['login']."</a><br>";
  }else if($now>=$approach && $now<$dateanniv){
  	//print "b";
    $msg = "<a href=\"?page=anniv_message&login=".$lg."\"><img src=\"/img/img.php5.gif\" width=670>".$value['login']."</a><br>";
  }else{
  	//print "c";
    $msg = "";
  }
  
  return $msg;
}

function postImage($key,$width,$height){
  $picture = getPhoto($key);
    if ($picture != "" ) {
      $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/".$picture;
      $path1 = "/utilisateurs/images/photo/".$picture;
    } else {
      if (getSexe($key) == 1 ) { 
        $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/silhouette.jpg";
    		$path1 = "/utilisateurs/images/photo/silhouette.jpg";
      } else {
        $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/silhouettef.jpg";
    		$path1 = "/utilisateurs/images/photo/silhouettef.jpg";
      } 
    } 
    
    $img = scale_image($path,$path1,"voir son profil",$width,$height);
    return $img;
}

function postImage_com($key,$width,$height){
    $sql  = "SELECT photo FROM groupe where id = ".$key ;
    $result = db_connect($sql);
    
    if (mysql_num_rows($result) != "" ) {
      $row = mysql_fetch_assoc($result);
      $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/images_community/".$row['photo'];
      $path1 = "/utilisateurs/images/images_community/".$row['photo'];
    }  
    
    $img = scale_image($path,$path1,"voir la communaute",$width,$height);
    return $img;
}


function scale_image_onclick($p,$p1,$alt,$name,$mw='',$mh='') { // path max_width max_height
    if(list($w,$h) = @getimagesize($p)) {
    foreach(array('w','h') as $v) { $m = "m{$v}";
        if(${$v} > ${$m} && ${$m}) { $o = ($v == 'w') ? 'h' : 'w';
        $r = ${$m} / ${$v}; ${$v} = ${$m}; ${$o} = ceil(${$o} * $r); } }
    return("<img src='{$p1}' alt='{$alt}' width='{$w}' height='{$h}' name='{$name}' />"); }
}

function postImage_onclick($key,$width,$height,$name){
  $picture = getPhoto($key);
    if ($picture != "" ) {
      $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/".$picture;
      $path1 = "/utilisateurs/images/photo/".$picture;
    } else {
      if (getSexe($key) == 1 ) { 
        $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/silhouette.jpg";
    		$path1 = "/utilisateurs/images/photo/silhouette.jpg";
      } else {
        $path = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/silhouettef.jpg";
    		$path1 = "/utilisateurs/images/photo/silhouettef.jpg";
      } 
    } 
    
    $img = scale_image_onclick($path,$path1,"voir son profil",$name,$width,$height);
    return $img;
}
function scale_album_image($img,$alt,$mw='',$mh='') { // path max_width max_height
    $p = $_SERVER['DOCUMENT_ROOT']."/utilisateurs/images/photo/".$img;
    $p1 = "images/photo/".$img;
    if(list($w,$h) = @getimagesize($p)) {
    foreach(array('w','h') as $v) { $m = "m{$v}";
        if(${$v} > ${$m} && ${$m}) { $o = ($v == 'w') ? 'h' : 'w';
        $r = ${$m} / ${$v}; ${$v} = ${$m}; ${$o} = ceil(${$o} * $r); } }
    //return("<img src='{$p1}' alt='{$alt}' width='{$w}' height='{$h}' />"); 
    return array($w,$h);
    }
}

/*
 * return an array whose elements are shuffled in random order.
 */
function custom_shuffle($my_array = array()) {
  $copy = array();
  while (count($my_array)) {
    // takes a rand array elements by its key
    $element = array_rand($my_array);
    // assign the array and its value to an another array
    $copy[$element] = $my_array[$element];
    //delete the element from source array
    unset($my_array[$element]);
  }
  return $copy;
}

function array_slice_preserve_keys($array, $offset, $length = null)
{
    // PHP >= 5.0.2 is able to do this itself
    if((int)str_replace('.', '', phpversion()) >= 502)
        return(array_slice($array, $offset, $length, true));

    // prepare input variables
    $result = array();
    $i = 0;
    if($offset < 0)
        $offset = count($array) + $offset;
    if($length > 0)
        $endOffset = $offset + $length;
    else if($length < 0)
        $endOffset = count($array) + $length;
    else
        $endOffset = count($array);
   
    // collect elements
    foreach($array as $key=>$value)
    {
        if($i >= $offset && $i < $endOffset)
            $result[$key] = $value;
        $i++;
    }
   
    // return
    return($result);
}

function db_connect($query) {
  $conn=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
  mysql_select_db(DB_NAME);
  $result=mysql_query($query) or die('Error, modify album failed : ' . mysql_error());
  return $result;
  mysql_close($conn);
}

function getAnciensEleves($ecole_id,$nb){
  /* debut pour retrouver les anciens eleves de l ecole en question */
  $row = array(); 
  $sql_anc_eleves  = "SELECT * FROM anc_ecoles where ecole_id = $ecole_id LIMIT $nb ";
  $result_anc_eleves = db_connect($sql_anc_eleves);
  while ($row_anc_eleves = mysql_fetch_assoc($result_anc_eleves)) {
    $row[] = $row_anc_eleves;
  }
  return $row;
}
function set_redirect_url(){
    $url = $_SERVER["HTTP_REFERER"];
  	$words = explode(".ivo",$url);
  	return $words["1"];
  }

function get_emails($table,$email) {
    $result = mysql_query("SELECT DISTINCT $email FROM $table ");
    
    while ($row = mysql_fetch_assoc($result)) {
    	$email_arr[] = $row[$email];
    }
    return $email_arr;
}







# PHP Calendar (version 2.3), written by Keith Devens
# http://keithdevens.com/software/php_calendar
#  see example at http://keithdevens.com/weblog
# License: http://keithdevens.com/software/license

function generate_calendar($year, $month, $days = array(), $day_name_length = 3, $month_href = NULL, $first_day = 0, $pn = array()){
	$first_of_month = gmmktime(0,0,0,$month,1,$year);
	#remember that mktime will automatically correct if invalid dates are entered
	# for instance, mktime(0,0,0,12,32,1997) will be the date for Jan 1, 1998
	# this provides a built in "rounding" feature to generate_calendar()

	$day_names = array(); #generate all the day names according to the current locale
	for($n=0,$t=(3+$first_day)*86400; $n<7; $n++,$t+=86400) #January 4, 1970 was a Sunday
		$day_names[$n] = ucfirst(gmstrftime('%A',$t)); #%A means full textual day name

	list($month, $year, $month_name, $weekday) = explode(',',gmstrftime('%m,%Y,%B,%w',$first_of_month));
	$weekday = ($weekday + 7 - $first_day) % 7; #adjust for $first_day
	$title   = htmlentities(ucfirst($month_name)).'&nbsp;'.$year;  #note that some locales don't capitalize month and day names

	#Begin calendar. Uses a real <caption>. See http://diveintomark.org/archives/2002/07/03
	@list($p, $pl) = each($pn); @list($n, $nl) = each($pn); #previous and next links, if applicable
	if($p) $p = '<span class="calendar-prev">'.($pl ? '<a href="'.htmlspecialchars($pl).'">'.$p.'</a>' : $p).'</span>&nbsp;';
	if($n) $n = '&nbsp;<span class="calendar-next">'.($nl ? '<a href="'.htmlspecialchars($nl).'">'.$n.'</a>' : $n).'</span>';
	$calendar = '<table class="calendar">'."\n".
		'<caption class="calendar-month">'.$p.($month_href ? '<a href="'.htmlspecialchars($month_href).'">'.$title.'</a>' : $title).$n."</caption>\n<tr>";

	if($day_name_length){ #if the day names should be shown ($day_name_length > 0)
		#if day_name_length is >3, the full name of the day will be printed
		foreach($day_names as $d)
			$calendar .= '<th abbr="'.htmlentities($d).'">'.htmlentities($day_name_length < 4 ? substr($d,0,$day_name_length) : $d).'</th>';
		$calendar .= "</tr>\n<tr>";
	}

	if($weekday > 0) $calendar .= '<td colspan="'.$weekday.'">&nbsp;</td>'; #initial 'empty' days
	for($day=1,$days_in_month=gmdate('t',$first_of_month); $day<=$days_in_month; $day++,$weekday++){
		if($weekday == 7){
			$weekday   = 0; #start a new week
			$calendar .= "</tr>\n<tr>";
		}
		if(isset($days[$day]) and is_array($days[$day])){
			@list($link, $classes, $content) = $days[$day];
			if(is_null($content))  $content  = $day;
			$calendar .= '<td'.($classes ? ' class="'.htmlspecialchars($classes).'">' : '>').
				($link ? '<a href="'.htmlspecialchars($link).'">'.$content.'</a>' : $content).'</td>';
		}
		else $calendar .= "<td>$day</td>";
	}
	if($weekday != 7) $calendar .= '<td colspan="'.(7-$weekday).'">&nbsp;</td>'; #remaining "empty" days

	return $calendar."</tr>\n</table>\n";
}
//Reecriture de la date
function dateForMail($date){
  $w = explode(" ",$date);
  $w1 = explode("-",$w[0]);
  $w2 = explode(":",$w[1]);
  $now = date("Y")."-".date("m")."-".date("d");
  $mail_time = mktime($w2[0],$w2[1],$w2[2],$w1[1],$w1[2],$w1[0]);
  if($now == $w[0]){
    $diff = time() - $mail_time;
    $dt = date('H:i', $diff);
  }else{
    $dt = date("d M",strtotime($date));
  }
  return $dt;
}
//Reecriture de la date
function dateForTrace($date){
  $w = explode(" ",$date);
  $w1 = explode("-",$w[0]);
  $w2 = explode(":",$w[1]);
  $now = date("Y")."-".date("m")."-".date("d");
  $mail_time = mktime($w2[0],$w2[1],$w2[2],$w1[1],$w1[2],$w1[0]);
  if($now == $w[0]){
    $diff = time() - $mail_time;
    $dt = "Aujourd'hui";
  }else{
    $dt = date("d M",strtotime($date));
  }
  return $dt;
}

function scale_image_wh($img,$alt,$mw='',$mh='') { // path max_width max_height
    $p = $img;
    //$p1 = "images/photo/".$img;
    if(list($w,$h) = @getimagesize($p)) {
    foreach(array('w','h') as $v) { $m = "m{$v}";
        if(${$v} > ${$m} && ${$m}) { $o = ($v == 'w') ? 'h' : 'w';
        $r = ${$m} / ${$v}; ${$v} = ${$m}; ${$o} = ceil(${$o} * $r); } }
    //return("<img src='{$p1}' alt='{$alt}' width='{$w}' height='{$h}' />"); 
    return array($w,$h);
    }
}


/* proprietaire au moins d'une communautÅE*/
function omoins_proprietaire($id){
  $sql  = "SELECT id FROM groupe";
  $result = db_connect($sql);
  while($row = mysql_fetch_assoc($result)){
	$id_group = $row['id'];
	$sql2  = "SELECT statut FROM groupe_membres where group_id = $id_group AND user_id = '$id' ";
	$result2 = db_connect($sql2);
	$n = $n + mysql_num_rows($result2);
	}
  if($n!=0){
    $a = 1;
  }else{
  $a = 0;
  }
  return ($a);
}
/* les communautes ke gÅEcrÈe */
function my_community($lg){
  $sql = "SELECT id FROM groupe WHERE user_id='$lg' ";
  $result = db_connect($sql);
  while($row = mysql_fetch_assoc($result)){
    $group[] = $row['id'];
  }
  return ($group);
};
/* les communautes auxquelle sj'arppartiens */
function community($lg){
  $sql = "SELECT group_id FROM groupe_membres WHERE user_id='$lg' AND validation=1 ";
  $result = db_connect($sql);
  while($row = mysql_fetch_assoc($result)){
    $group[] = $row['group_id'];
  }
  return ($group);
};
/* le proprietaire d'une communautÅE*/
function proprietaire($id,$g_id){
  $sql_prop  = "SELECT statut FROM groupe_membres where group_id = '$g_id' AND user_id = '$id' ";
  $result_prop = db_connect($sql_prop);
  $row_prop = mysql_fetch_assoc($result_prop);
  if($row_prop['statut']==2){
    $a = 1;
  }else{
  $a = 0;
  }
  return ($a);
}
/* moderateur d'une communautÅE*/
function moderateur($id,$g_id){
  $sql_mode  = "SELECT statut FROM groupe_membres where group_id = '$g_id' AND user_id = '$id' ";
  $result_mode = db_connect($sql_mode);
  $row_mode = mysql_fetch_assoc($result_mode);
  if($row_mode['statut']==1){
    $a = 1;
  }else{
  $a = 0;
  }
  return ($a);
}
/* il appartient ÅEune communautÅe ? */
function member_community($c_id,$lg){
  $sql_membre = "SELECT * FROM groupe_membres WHERE group_id='$c_id' AND user_id='$lg' AND validation=1";
  $result_membre = db_connect($sql_membre);
  $row_membre = mysql_fetch_assoc($result_membre);
  if(mysql_num_rows($result_membre)== 0){
    $a = 0;
  }else{
  $a = 1;
  }
  return ($a);
};
// le nom de la communautÅE
function community_name($id){
  $sql_group = "SELECT titre FROM groupe WHERE id=$id ";
  $result_group = db_connect($sql_group);
  $row_group = mysql_fetch_assoc($result_group);
  $titre     = $row_group['titre'];
  return $titre;
};
/* nombre de demande d'adhesion en attente */
function demande_adhesion($c_id){
  $sql = "SELECT * FROM groupe_membres WHERE group_id='$c_id' AND validation=0";
  $result = db_connect($sql);
  $nbre = mysql_num_rows($result);
  
  return ($nbre);
};
/* les mbres d'une communaute */
function mbre_community($c_id){
	$sql_com_mbr = "SELECT user_id FROM groupe_membres WHERE group_id =$c_id AND validation=1";
	$result_com_mbr = db_connect($sql_com_mbr);

	while($row_com_mbr = mysql_fetch_assoc($result_com_mbr)){
		$mbre[ ] = $row_com_mbr['user_id'];
	}
	return ($mbre);
};


//permet d'inverser le format yyyy/mm/dd en dd/mm/yyyy
function invers_date($date) {
	$annee = substr($date, 0, 4);
	$mois = substr($date, 5, 2);
	$jour = substr($date, 8, 2);
    $lejour = $jour.'-'.$mois.'-'.$annee;
	return $lejour;
};

//permet d'identifier le type de fichier
function type_file($nom) {
	$result = explode('.', $nom);
	$extension = $result['1'];
	if($extension=="jpg" || $extension=="gif" ||$extension=="png"){
	   $letype = 1;
	  }elseif($extension=="doc" || $extension=="docx"){ 
      $letype = 2;
    }else{
      $letype = 3;
    }
	return $letype;
};


//selectionner le nom de le foto connaissant son id
function select_photo_name($id) {
    $result = mysql_query("SELECT nom FROM album_photo WHERE id=$id " );
    $row_photo_nom = mysql_fetch_assoc($result);
    return $row_photo_nom[nom] ;
}

//selectionner le nom de le foto connaissant son proprietaire;
function select_photo_name_from_user_id($id) {
    $result = mysql_query("SELECT nom FROM album_photo WHERE user_id=$id AND valide=1" );
    $row_photo_nom = mysql_fetch_assoc($result);
    return $row_photo_nom[nom] ;
}

//birthday today
function todayBirthDay(){
  $result = db_connect("SELECT id,login FROM user WHERE MONTH( NOW( ) ) = MONTH( datenaiss) AND DAYOFMONTH( NOW( ) ) = DAYOFMONTH( datenaiss)");
  while($row = mysql_fetch_assoc($result)){
  
    $birth[$row["id"]] = $row["login"]; 
  }
  
  return $birth;
}

function forceRedirect($url,$die=true){ 
		if (!headers_sent()) { 
			ob_end_clean();
			header("Location: " . $url);
		}
		printf("<HTML>");
		printf("<META http-equiv=\"Refresh\" content=\"0;url=%s\">", $url);
		printf("<BODY onload=\"try {self.location.href='%s' } catch(e) {}\"><a href=\"%s\">Redirect </a></BODY>", $url, $url);
		printf("</HTML>");
		if ($die){
			die();
		}
	}


function get_ChatInvitation($lg){
  $tab = array();
  $letime = time()-300;
  $sql = "SELECT * FROM chat_invitation WHERE user_invite = '$lg' AND attente = 1 AND invit_time >= $letime ";
  $result = db_connect($sql);
  //print $sql;
  while($row = mysql_fetch_assoc($result)){
    $tab[] = $row['user_id'];
  }
  return $tab;

}
function get_ChatInvitation2($lg){
  $tab = array();
  $letime = time()-300;
  $sql = "SELECT * FROM chat_invitation WHERE user_invite = '$lg' AND attente = 1 AND ouvert = 0 AND invit_time >= $letime ";
  $result = db_connect($sql);
  //print $sql;
  while($row = mysql_fetch_assoc($result)){
    $tab[] = $row['user_id'];
  }
  return $tab;

}

//Get the lasts communauty
function getlastscom(){
  $com = array();

  $sql = "SELECT titre,id,user_id,photo FROM groupe ORDER BY created DESC LIMIT 3 ";
  
  $result = db_connect($sql);
  while ($row_com = mysql_fetch_assoc($result)) {
    $com[$row_com["id"]] = $row_com;
  }
  return $com;
}

//Get the lasts journal
function getlastsJournal(){
  $journal = array();

  $sql = "SELECT titre,id,user_id FROM journal ORDER BY created DESC LIMIT 3 ";
  
  $result = db_connect($sql);
  while ($row_journal = mysql_fetch_assoc($result)) {
    $journal[$row_journal["id"]] = $row_journal;
  }
  return $journal;
}

// check user's profil
function checkprofil($id){
	$result = getElement('user_id',$id,'user_id','album_photo');
	if($result == ""){
		$erreur[0] = "photos";
	}
	$result2 = getElement('login_user',$id,'login_user','anc_ecoles');
	if($result2 == ""){
		$erreur[1]= "ecoles";
	}
	return $erreur;
}

function majuscules_sans_accent($texte)
{
//$texte = strtr($texte, "‰‚‡·Â„ÈËÎÍÚÛÙıˆ¯ÏÌÓÔ˘˙˚¸˝ÒÁ˛ˇÊú¯", "ƒ¬¿¡≈√…»À “”‘’÷ÿÃÕŒœŸ⁄€‹›—«ﬁ›∆å–ÿ");
$texte = strtr($texte, "È‰‚‡·Â„ËÎÍÚÛÙıˆ¯ÏÌÓÔ˘˙˚¸˝ÒÁ˛ˇÊú¯", "                                ");
//$texte = utf8_encode(strtoupper($texte));
$texte = strtoupper($texte);
return $texte;
}

function majuscules_avec_accent($texte)
{
$texte = strtr($texte, "‰‚‡·Â„ÈËÎÍÚÛÙıˆ¯ÏÌÓÔ˘˙˚¸˝ÒÁ˛ˇÊú¯", "ƒ¬¿¡≈√…»À “”‘’÷ÿÃÕŒœŸ⁄€‹›—«ﬁ›∆å–ÿ");
//$texte = strtr($texte, "‰‚‡·Â„ÈËÎÍÚÛÙıˆ¯ÏÌÓÔ˘˙˚¸˝ÒÁ˛ˇÊú¯", "aaaaaaeeeeooooooiiiiuuuuyncbyaooo");
$texte = utf8_encode(strtoupper($texte));
return $texte;
}

function majus(){
	$sql = "SELECT id FROM user";
	$res = db_connect($sql);
	while($row = mysql_fetch_assoc($res)){
		extract($row);
		$nom = addslashes(getElement('id',$id,'nom','user'));
		$prenom = addslashes(getElement('id',$id,'prenom','user'));
		$maj_nom = majuscules_sans_accent($nom);
		$maj_prenom = majuscules_sans_accent($prenom);
		$result = $maj_nom.' '.$maj_prenom; echo $result;
		$query = "UPDATE user SET nom_majuscule = '$result' WHERE id = '$id' ";
		mysql_query($query) or die('Error, modify album failed : ' . mysql_error());
	}
}
function bilan($d1){

	$sql = "SELECT * FROM livraisons WHERE created = '$d1' ";
    $result = mysql_query($sql) or die('Error5, get album info failed. ' . mysql_error());
	while($row = mysql_fetch_assoc($result)){
		extract($row);
		$p = $p+$poids;
		$t = $t+$total_retenu;
		$m = $m+$montant;
		$m2 = $m2+$montant_ss_prime; 
		$fin = $p."-".$t."-".$m."-".$m2;
		
		}
		//echo $m2;
	return $fin;
};

function int2str($a){
    if ($a<0) return 'moins '.int2str(-$a);
    if ($a<17){
        switch ($a){
            case 0: return 'zero';
            case 1: return 'un';
            case 2: return 'deux';
            case 3: return 'trois';
            case 4: return 'quatre';
            case 5: return 'cinq';
            case 6: return 'six';
            case 7: return 'sept';
            case 8: return 'huit';
            case 9: return 'neuf';
            case 10: return 'dix';
            case 11: return 'onze';
            case 12: return 'douze';
            case 13: return 'treize';
            case 14: return 'quatorze';
            case 15: return 'quinze';
            case 16: return 'seize';
        }
    } else if ($a<20){
        return 'dix-'.int2str($a-10);
    } else if ($a<100){
        if ($a%10==0){
            switch ($a){
                case 20: return 'vingt';
                case 30: return 'trente';
                case 40: return 'quarante';
                case 50: return 'cinquante';
                case 60: return 'soixante';
                case 70: return 'soixante-dix';
                case 80: return 'quatre-vingt';
                case 90: return 'quatre-vingt-dix';
            }
        } else if ($a<70){
            return int2str($a-$a%10).' '.int2str($a%10);
        } else if ($a<80){
            return int2str(60).' '.int2str($a%20);
        } else{
            return int2str(80).' '.int2str($a%20);
        }
    } else if ($a==100){
        return 'cent';
    } else if ($a<200){
        return int2str(100).' '.int2str($a%100);
    } else if ($a<1000){
		if($a%100==0){return int2str((int)($a/100)).' '.int2str(100).'s'; } else{
        return int2str((int)($a/100)).' '.int2str(100).' '.int2str($a%100);}
    } else if ($a==1000){
        return 'mille';
    } else if ($a<2000){
        return int2str(1000).' '.int2str($a%1000).' ';
    } else if ($a<1000000){
		if($a%1000==0){return int2str((int)($a/1000)).' '.int2str(1000).'s'; } else{
        return int2str((int)($a/1000)).' '.int2str(1000).' '.int2str($a%1000);}
    } 
    //on pourrait pousser pour aller plus loin, mais c'est sans interret pour ce projet, et pas interessant, c'est pas non plus compliquÈ...
}
//echo int2str("199940"); // et voil‡ ce que ca donne

function point_caisse(){
	$date = DATE('Y-m-d');
	if(getElement('created',$date,'created','caisses') !=""){
	
	
	}else{
	$sql2  = "SELECT * FROM caisses ORDER BY created DESC ";
	$result2 = mysql_query($sql2) or die('Error, $sql. ' . mysql_error());
	$row2 = mysql_fetch_assoc($result2);
	$tot_caisse2 = $row2['total_caisse']; 

	$query2 = "INSERT INTO caisses (en_caisse, total_caisse, dernier,created) 
							VALUES ('$tot_caisse2', '$tot_caisse2', 1,NOW() )";
	mysql_query($query2) or die('Error, add album failed : ' . mysql_error()); 
	}
}

function retir($var){
/* Retire les accents de la chaine "$string" */

$Caracs = array("•" => "Y", "µ" => "u", "¿" => "A", "¡" => "A",
                "¬" => "A", "√" => "A", "ƒ" => "A", "≈" => "A",
                "∆" => "A", "«" => "C", "»" => "E", "…" => "E",
                " " => "E", "À" => "E", "Ã" => "I", "Õ" => "I",
                "Œ" => "I", "œ" => "I", "–" => "D", "—" => "N",
                "“" => "O", "”" => "O", "‘" => "O", "’" => "O",
                "÷" => "O", "ÿ" => "O", "Ÿ" => "U", "⁄" => "U",
                "€" => "U", "‹" => "U", "›" => "Y", "ﬂ" => "s",
                "‡" => "a", "·" => "a", "‚" => "a", "„" => "a",
                "‰" => "a", "Â" => "a", "Ê" => "a", "Á" => "c",
                "Ë" => "e", "È" => "e", "Í" => "e", "Î" => "e",
                "Ï" => "i", "Ì" => "i", "Ó" => "i", "Ô" => "i",
                "" => "o", "Ò" => "n", "Ú" => "o", "Û" => "o",
                "Ù" => "o", "ı" => "o", "ˆ" => "o", "¯" => "o",
                "˘" => "u", "˙" => "u", "˚" => "u", "¸" => "u",
                "˝" => "y", "ˇ" => "y");
    
$string  = strtr($var, $Caracs);
return $string;
}
?>
