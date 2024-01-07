<?php
session_start();
$date = date('Y-m-d');
$time = date('H:i:s');
$exe = 0;
//Date Conversion Function Start
function dateFormat($date)
{
	if ($date == '&nbsp') {
		return;
	} else {
		$months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
		$arr = explode('-', $date);
		$arr[1] = $months[(int)$arr[1]];
		return implode('-', array_reverse($arr));
	}
}
//Date Conversion Function End

//Connection To DB Start
$conngndpc = mysqli_connect("localhost", "root", "", "gndpolyo_web");
// $conngndpc = mysqli_connect("162.241.218.223", "gndpolyo_admin", "qwerty@1234", "gndpolyo_web");
// if (!$conngndpc) {
// 	echo "<script>alert('Something Went Wrong!')</script>";
// }
//Connection To DB End

/*Dynamic Principal Start*/
function principal($info)
{
	include 'principal.php';
	return $prince[$info];
}
function changePrinipal($pname, $mob, $address)
{
	$principal = fopen("principal.php", "w") or die("Unable to open file!");
	$txt = '<?php $prince = array("' . $pname . '","' . $mob . '","' . $address . '");?>';
	fwrite($principal, $txt);
	fclose($principal);
	echo "<script>window.location.href='index.php';</script>";
}
/*Dynamic Principal End*/

/*Functions For Login And logOut And Sessions Start*/
function loginAdmin($uname, $passwd)
{
	global $conngndpc;
	$qry = "SELECT * FROM loginusers WHERE uname='$uname'";
	$exe = mysqli_query($conngndpc, $qry);
	$getpass = '';
	while ($cont = mysqli_fetch_array($exe)) {
		$getpass = $cont['pass'];
	}
	if ($getpass == $passwd) {
		$_SESSION['dc729fe4ab4a4f3d0539d5f6158dbecd'] = $uname;
		echo "<script>window.location.href='index.php';</script>";
	} else {
		echo "<script>alert('Wrong Credentials')</script>";
	}
}
function sessionCheck()
{
	if (!$_SESSION['dc729fe4ab4a4f3d0539d5f6158dbecd']) {
		header('Location:login.php');
	}
}
function logoutAdmin()
{
	session_destroy();
	echo "<script>window.location.href='login.php';</script>";
}
/*Functions For Login And logOut And Sessions End*/


/*For user Information Start*/
function userInfo($columnName)
{ //this echo the information
	global $conngndpc;
	$uname = $_SESSION['dc729fe4ab4a4f3d0539d5f6158dbecd'];
	$qry = "SELECT * FROM loginusers WHERE uname='$uname'";
	$exe = mysqli_query($conngndpc, $qry);
	while ($cont = mysqli_fetch_array($exe)) {
		echo $cont[$columnName];
	}
}
function userInfoRet($columnName)
{ //this returns info
	global $conngndpc;
	$uname = $_SESSION['dc729fe4ab4a4f3d0539d5f6158dbecd'];
	$qry = "SELECT * FROM loginusers WHERE uname='$uname'";
	$exe = mysqli_query($conngndpc, $qry);
	while ($cont = mysqli_fetch_array($exe)) {
		return $cont[$columnName];
	}
}
function updatePass($newName, $oldPass, $newPass)
{
	global $conngndpc;
	$uname = $_SESSION['dc729fe4ab4a4f3d0539d5f6158dbecd'];
	if (userInfoRet('pass') == $oldPass) {
		$qry = "UPDATE loginusers SET name='$newName', pass='$newPass' WHERE uname='$uname'";
		$exe = mysqli_query($conngndpc, $qry);
		echo "<script>alert('Information Updated')</script>";
		echo "<script>window.location.href='index.php';</script>";
	} else {
		echo "<script>alert('Wrong Password')</script>";
	}
}
/*For user Information End*/



//Array Conversion Start
function array_2d_to_1d($input_array)
{
	$output_array = array();

	for ($i = 0; $i < count($input_array); $i++) {
		for ($j = 0; $j < count($input_array[$i]); $j++) {
			$output_array[] = $input_array[$i][$j];
		}
	}

	return $output_array;
}
//Array Conversion End

/*Get Array With ID for Update in all pages*/
function getIdArray($tname, $sno, $length)
{
	global $conngndpc;
	$qry = "SELECT * FROM $tname WHERE sno=$sno";
	$exe = mysqli_query($conngndpc, $qry);
	$array = array(array());
	$i = 0;
	while ($cont = mysqli_fetch_array($exe)) {
		for ($j = 0; $j < $length; $j++) {
			$array[$i][$j] = $cont[$j];
		}
		$i++;
	}
	return $array;
}
/*Get Array With ID for Update in all pages*/



// This isset call is for ajax used in update inst
if (isset($_POST['getUpdateData'])) {
	$arr = array(array());
	$arr = getIdArray($_POST['tableName'], $_POST['editNo'], $_POST['tableLength']);
	echo implode('|', $arr[0]);
}
// This isset call is for ajax used in update inst End

/*Get Array*/
function getArray($tname, $length)
{
	global $conngndpc;
	$qry = "SELECT * FROM $tname";
	$exe = mysqli_query($conngndpc, $qry);
	$array = array(array());
	$i = 0;
	while ($cont = mysqli_fetch_array($exe)) {
		for ($j = 0; $j < $length; $j++) {
			$array[$i][$j] = $cont[$j];
		}
		$i++;
	}
	return $array;
}
/*Get Array*/

/*Delete Function*/
function deleteRow($tablename, $id)
{
	global $conngndpc;
	$qry = "DELETE FROM $tablename WHERE sno=$id";
	$exe = mysqli_query($conngndpc, $qry);
	echo "<script>delRow(" . $id . ");hisUrl();</script>";
}
/*Delete Function*/

/*Functions For Updation Start*/
function cRadio($fetchValue, $inputValue)
{
	if ($fetchValue == $inputValue) {
		echo "checked";
	}
}
function cSelect($fetchValue, $inputValue)
{
	if (strtoupper($fetchValue) == strtoupper($inputValue)) {
		echo "selected";
	}
}
/*Functions For Updation End*/

function checkQuery($exe, $message)
{
	if ($exe) {
		echo "<script>splitUrl();alert('" . $message . "');</script>";
	} else {
		echo "<script>alert('Please Retry')</script>";
	}
}
function allowImages($extIn)
{
	if ($extIn != 'png' & $extIn != 'jpg' & $extIn != 'jpeg') {
		checkQuery(1, 'Check Your Files Extennsion Must be .png,.jpg,.jpeg');
		return false;
	} else {
		return true;
	}
}
/*News PHP Start****************************************************************************************/

/*Add News*/
function addNews($news, $imp, $linkname, $url)
{
	global $conngndpc, $date;
	$qry = "INSERT into gndpcnews values('','$date','$news','$imp','$linkname','$url')";
	$linkname = 'null';
	$url = 'null';
	$imp = 'null';
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Inserted');
}
/*Add News*/

/*Update News*/
function updateNews($sno, $date, $news, $imp, $linkname, $url)
{
	global $conngndpc;
	$qry = "UPDATE gndpcnews SET date='$date',newscontent='$news',important='$imp',linkname='$linkname',link='$url' WHERE sno=$sno";
	$linkname = 'null';
	$url = 'null';
	$imp = 'null';
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Updated');
}
/*Update News*/

/*News PHP End*****************************************************************************************/

/*Gallery PHP Start***************************************************************************************/

/*Add Gallery Start*/
function addGalleryArray($gallery)
{
	include 'assets/imgresizePHP/ImageResize.php';/*Compression Class PHP Plugin*/
	global $conngndpc, $date, $time;
	$i = $j = 0;
	$uploadfile = $urlo = $urlc = $urlt = array();
	$fileName = preg_replace('/\D/', '', date("d-m-Y h:i:sa"));
	foreach ($_FILES[$gallery]["tmp_name"] as $no_use) {
		/*Code to preserve file extension Start*/
		$exttmp = explode('.', $_FILES[$gallery]['name'][$i]);
		$ext = end($exttmp);

		if (allowImages($ext) == false) {
			goto skip;
		}

		array_push($urlo, 'img/gallery/' . $fileName . '-' . $i . 'o.' . $ext);
		array_push($urlc, 'img/gallery/' . $fileName . '-' . $i . 'c.' . $ext);
		array_push($urlt, 'img/gallery/' . $fileName . '-' . $i . 't.' . $ext);
		/*Code to preserve file extension End*/
		$imageFiles = $_FILES[$gallery]["tmp_name"];
		$origImageName = $_FILES[$gallery]["name"];
		$i++;
	}
	foreach ($imageFiles as $imgFile) {
		if (file_exists('../' . $urlo[$j]) == true) {
			array_push($uploadfile, 'File Already Exist' . $origImageName[$j]);
		} else {
			$image = new \Gumlet\ImageResize($imgFile);
			$image->resizeToHeight('768'); //for compressed
			$image->save('../' . $urlc[$j]); //for compressed
			$image = new \Gumlet\ImageResize($imgFile);
			$image->resize(350, 200);; //for thumbnail
			$image->save('../' . $urlt[$j]); //for thumbnail
			move_uploaded_file($imgFile, '../' . $urlo[$j]); //for orignal file
			array_push($uploadfile, $origImageName[$j]);
			$uniqImgId = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4) . substr(str_shuffle("0123456789"), 0, 4);
			$qry = "INSERT into gallery values('','$urlo[$j]','$urlc[$j]','$urlt[$j]','SliderN','GalleryY','$uniqImgId','','')";
			$exe = mysqli_query($conngndpc, $qry);
		}
		$j++;
	}
	checkQuery($exe, implode('\n', $uploadfile));
	skip:
}
/*Add Gallery End*/

/*get image by gallery id for calling image from gallery to display on primary page Start*/
function getImageById($column, $imgid)
{
	global $conngndpc;
	$qry = "SELECT $column FROM gallery WHERE imageid='$imgid'";
	$exe = mysqli_query($conngndpc, $qry);
	$url = '';
	while ($imgUrl = mysqli_fetch_array($exe)) {
		$url = $imgUrl[0];
	}
	return $url;
}
/*get image by gallery id for calling image from gallery to display on primary page End*/

/*To add Description and heading of images in gallery Start*/
function addGalDesc($sno, $imgid, $head, $desc)
{
	global $conngndpc;
	$qry = "UPDATE gallery SET heading='$head',text='$desc' WHERE sno=$sno";
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Inserted');
}
/*To add Description and heading of images in gallery End*/

/*Delete Gallery Function*/
function deleteGallery($ids)
{
	global $conngndpc;
	$i = 0;
	$ids = explode(',', $ids);
	$files = array(array());
	foreach ($ids as $id) {
		$qry = "SELECT orignal,compressed,thumbnail FROM gallery WHERE sno=$id";
		$exe = mysqli_query($conngndpc, $qry);
		while ($imgUrl = mysqli_fetch_array($exe)) {
			$files[$i][0] = $imgUrl[0];
			$files[$i][1] = $imgUrl[1];
			$files[$i][2] = $imgUrl[2];
		}
		$i++;
	}
	$fileArray = array_2d_to_1d($files);

	foreach ($fileArray as $file) {
		unlink('../' . $file);
	}
	foreach ($ids as $id) {
		$qry = "DELETE FROM gallery WHERE sno=$id";
		$exe = mysqli_query($conngndpc, $qry);
		echo "<script>delRow(" . $id . ")</script>";
	}
	echo "<script>hisUrl();</script>";
}
/*Delete Gallery Function*/

/*Gallery Batch Function*/
function updateGallery($ids, $place, $tOrf)
{
	global $conngndpc;
	$ids = explode(',', $ids);
	foreach ($ids as $id) {
		$qry = "UPDATE gallery SET $place='$tOrf' WHERE sno='$id'";
		$exe = mysqli_query($conngndpc, $qry);
	}
	checkQuery($exe, 'Updated');
}
/*Gallery Batch Function*/

/*Gallery PHP End***************************************************************************************/

/*Events PHP Start***************************************************************************************/

/*Events With Image Operation*/
function addEvents($ename, $eimage, $econtent)
{
	global $conngndpc, $date;
	$fname = preg_replace('/\s+/', '', $ename);
	$exttmp = explode('.', $_FILES[$eimage]['name']);
	$ext = end($exttmp);

	if (allowImages($ext) == false) {
		goto skip;
	}

	$url = 'img/events/' . $fname . rand(100, 999) . '.' . $ext;
	move_uploaded_file($_FILES[$eimage]['tmp_name'], '../' . $url);
	$qry = "INSERT into events values('','$date','$ename','$url','$econtent')";
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Inserted');
	skip:
}
/*Events With Image Operation*/

/*Update Events*/
function updateEvents($sno, $date, $ename, $eimage, $econtent, $oldimg)
{
	global $conngndpc;
	if ($_FILES[$eimage]['name'] == '') {
		$url = $oldimg;
		$_FILES[$eimage]['name'] = null;
	} else {
		$fname = preg_replace('/\s+/', '', $ename);
		$exttmp = explode('.', $_FILES[$eimage]['name']);
		$ext = end($exttmp);

		if (allowImages($ext) == false) {
			goto skip;
		}

		$url = 'img/events/' . $fname . rand(100, 999) . '.' . $ext;
		move_uploaded_file($_FILES[$eimage]['tmp_name'], '../' . $url);
		unlink("../$oldimg");
	}
	$qry = "UPDATE events SET date='$date',ename='$ename',eimage='$url',content='$econtent' WHERE sno=$sno";
	$eimage = null;
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Updated');
	skip:
}
/*Update Events*/

/*Events PHP End***************************************************************************************/


/*Testimonials PHP Start***************************************************************************************/

/*Testimonials With Image Operation*/
function addTestimonials($tname, $tdesig, $timage, $content)
{
	global $conngndpc;
	$fname = preg_replace('/\s+/', '', $tname);
	$exttmp = explode('.', $_FILES[$timage]['name']);
	$ext = end($exttmp);

	if (allowImages($ext) == false) {
		goto skip;
	}

	$url = 'img/testimonials/' . $fname . rand(100, 999) . '.' . $ext;
	move_uploaded_file($_FILES[$timage]['tmp_name'], '../' . $url);
	$qry = "INSERT into testimonials values('','$tname','$tdesig','$url','$content')";
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Inserted');
	skip:
}
/*Testimonials With Image Operation*/

/*Update Testimonials*/
function updateTestimonials($sno, $name, $pos, $timage, $econtent, $oldimg)
{
	global $conngndpc;
	if ($_FILES[$timage]['name'] == '') {
		$url = $oldimg;
		$_FILES[$timage]['name'] = null;
	} else {
		$fname = preg_replace('/\s+/', '', $name);
		$exttmp = explode('.', $_FILES[$timage]['name']);
		$ext = end($exttmp);

		if (allowImages($ext) == false) {
			goto skip;
		}

		$url = 'img/testimonials/' . $fname . rand(100, 999) . '.' . $ext;
		move_uploaded_file($_FILES[$timage]['tmp_name'], "../$url");
		unlink("../$oldimg");
	}
	$qry = "UPDATE testimonials SET name='$name',position='$pos',image='$url',content='$econtent' WHERE sno=$sno";
	$timage = null;
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Updated');
	skip:
}
/*Update Testimonials*/

/*Testimonials PHP End***************************************************************************************/

/*Staff PHP Start***************************************************************************************/

/*Add Staff With Image Operation*/
function addStaff($dept, $mname, $desig, $qualification, $joindate, $appointment, $pay, $simage)
{
	global $conngndpc;
	$fname = preg_replace('/\s+/', '', $mname);
	$exttmp = explode('.', $_FILES[$simage]['name']);
	$ext = end($exttmp);

	if (allowImages($ext) == false) {
		goto skip;
	}

	$url = 'img/staff/' . $fname . rand(100, 999) . '.' . $ext;
	move_uploaded_file($_FILES[$simage]['tmp_name'], '../' . $url);
	$qry = "INSERT into staff values('','$dept','$mname','$desig','$qualification','$joindate','$appointment','$pay','$url')";
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Inserted');
	skip:
}
/*Add Staff With Image Operation*/

/*Update Staff*/
function updateStaff($sno, $dept, $name, $desig, $qualifications, $joindate, $appointment, $pay, $mimage, $oldimg)
{
	global $conngndpc;
	if ($_FILES[$mimage]['name'] == '') {
		$url = $oldimg;
		$_FILES[$mimage]['name'] = null;
	} else {
		$fname = preg_replace('/\s+/', '', $name);
		$exttmp = explode('.', $_FILES[$mimage]['name']);
		$ext = end($exttmp);

		if (allowImages($ext) == false) {
			goto skip;
		}

		$url = 'img/staff/' . $fname . rand(100, 999) . '.' . $ext;
		move_uploaded_file($_FILES[$mimage]['tmp_name'], "../$url");
		unlink("../$oldimg");
	}
	$qry = "UPDATE staff SET department='$dept',membername='$name',designation='$desig',qualifications='$qualifications',joindate='$joindate',appointment='$appointment',pay='$pay',dp='$url' WHERE sno=$sno";
	$mimage = null;
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Updated');
	skip:
}
/*Update Staff*/

/*Staff PHP End***************************************************************************************/

/*Feedback PHP Start***************************************************************************************/

//function to insert feedback data start
function addFeedback($name, $email, $pno, $subj, $feedback)
{
	global $conngndpc, $date, $time;
	$qry = "INSERT INTO feedback VALUES('','$date','$time','$name','$email','$pno','$subj','$feedback')";
	$exe = mysqli_query($conngndpc, $qry);

	$emailto = 'divyanshugarg36@gmail.com';
	$emailfrom = $email;
	$fromname = $name;
	$headers =
		'Return-Path: ' . $emailfrom . "\r\n" .
		'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
		'X-Priority: 3' . "\r\n" .
		'X-Mailer: PHP ' . phpversion() .  "\r\n" .
		'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" .
		'Content-Transfer-Encoding: 8bit' . "\r\n" .
		'Content-Type: text/plain; charset=UTF-8' . "\r\n";
	$params = '-f ' . $emailfrom;
	$test = mail($emailto, $subj, $feedback, $headers, $params);

	echo "<script>alert('Thank You For Your Valuable Feedback');document.location.href='index.php'</script>";
}

// $test should be TRUE if the mail function is called correctly




//function to insert feedback data end

/*Feedback PHP End***************************************************************************************/

/*FooterLinks PHP Start***************************************************************************************/

/*Add Footer Links Start*/
function addFooterLinks($lname, $pfile, $authPass)
{
	global $conngndpc;
	$qry = "SELECT * FROM loginusers WHERE uname='" . $_SESSION['dc729fe4ab4a4f3d0539d5f6158dbecd'] . "'";
	$exe = mysqli_query($conngndpc, $qry);
	$getpass = '';
	while ($cont = mysqli_fetch_array($exe)) {
		$getpass = $cont['pass'];
	}
	if ($getpass == $authPass) {
		$fname = preg_replace('/\s+/', '', $lname);
		$exttmp = explode('.', $_FILES[$pfile]['name']);
		$ext = end($exttmp);
		$url = $fname . rand(1, 9) . '.' . $ext;
		move_uploaded_file($_FILES[$pfile]['tmp_name'], '../' . $url);
		$qry = "INSERT into footerlinks values('','$lname','$url')";
		$exe = mysqli_query($conngndpc, $qry);
		checkQuery($exe, 'Inserted');
		return;
	} else {
		echo "<script>alert('Wrong Password')</script>";
	}
}


/*Add Footer Links End*/

/*FooterLinks PHP End***************************************************************************************/




/*Aluminies PHP Start***************************************************************************************/

/*Aluminies With Image Operation*/
function addAluminies($tname, $tdesig, $timage, $content)
{
	global $conngndpc;
	$fname = preg_replace('/\s+/', '', $tname);
	$exttmp = explode('.', $_FILES[$timage]['name']);
	$ext = end($exttmp);

	if (allowImages($ext) == false) {
		goto skip;
	}

	$url = 'img/aluminies/' . $fname . rand(100, 999) . '.' . $ext;
	move_uploaded_file($_FILES[$timage]['tmp_name'], '../' . $url);
	$qry = "INSERT into aluminies values('','$tname','$tdesig','$url','$content')";
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Inserted');
	skip:
}

function updateAluminies($sno, $name, $pos, $aluImage, $aluContent, $oldimg)
{
	global $conngndpc;
	if ($_FILES[$aluImage]['name'] == '') {
		$url = $oldimg;
		$_FILES[$aluImage]['name'] = null;
	} else {
		$fname = preg_replace('/\s+/', '', $name);
		$exttmp = explode('.', $_FILES[$aluImage]['name']);
		$ext = end($exttmp);

		if (allowImages($ext) == false) {
			goto skip;
		}

		$url = 'img/aluminies/' . $fname . rand(100, 999) . '.' . $ext;
		move_uploaded_file($_FILES[$aluImage]['tmp_name'], "../$url");
		unlink("../$oldimg");
	}
	$qry = "UPDATE aluminies SET name='$name',position='$pos',image='$url',content='$aluContent' WHERE sno=$sno";
	$timage = null;
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Updated');
	skip:
}
/*Aluminies With Image Operation*/

/*Aluminies PHP End***************************************************************************************/



/*Achievements PHP Start***************************************************************************************/

/*Achievements With Image Operation*/
function addAchievements($ename, $eimage, $econtent)
{
	global $conngndpc, $date;
	$fname = preg_replace('/\s+/', '', $ename);
	$exttmp = explode('.', $_FILES[$eimage]['name']);
	$ext = end($exttmp);

	if (allowImages($ext) == false) {
		goto skip;
	}

	$url = 'img/achievements/' . $fname . rand(100, 999) . '.' . $ext;
	move_uploaded_file($_FILES[$eimage]['tmp_name'], '../' . $url);
	$qry = "INSERT into achievements values('','$date','$ename','$url','$econtent')";
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Inserted');
	skip:
}
/*Achievements With Image Operation*/

/*Update Achievements*/
function updateAchievements($sno, $date, $aname, $aimage, $acontent, $oldimg)
{
	global $conngndpc;
	if ($_FILES[$aimage]['name'] == '') {
		$url = $oldimg;
		$_FILES[$aimage]['name'] = null;
	} else {
		$fname = preg_replace('/\s+/', '', $aname);
		$exttmp = explode('.', $_FILES[$aimage]['name']);
		$ext = end($exttmp);

		if (allowImages($ext) == false) {
			goto skip;
		}

		$url = 'img/achievements/' . $fname . rand(100, 999) . '.' . $ext;
		move_uploaded_file($_FILES[$aimage]['tmp_name'], '../' . $url);
		unlink("../$oldimg");
	}
	$qry = "UPDATE achievements SET date='$date',achname='$aname',achimage='$url',content='$acontent' WHERE sno=$sno";
	$aimage = null;
	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Updated');
	skip:
}
/*Update Achievements*/

/*Achievements PHP End***************************************************************************************/



/*############################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################### Content For Home Page ######################################################################################################################################################################################################################################################################################################################################################################################################################################################################## */


/*testimonials fetch on home page*/
function getTestimonials()
{
	global $conngndpc;
	$qry = "SELECT * FROM testimonials";
	$exe = mysqli_query($conngndpc, $qry);
	$array = array(array());
	$i = 0;
	while ($cont = mysqli_fetch_array($exe)) {
		for ($j = 0; $j <= 4; $j++) {
			$array[$i][$j] = $cont[$j];
		}
		$i++;
	}
	return $array;
}
/*testimonials fetch on home page End*/

/*Aluminies fetch on home page*/
function getAluminies()
{
	global $conngndpc;
	$qry = "SELECT * FROM aluminies";
	$exe = mysqli_query($conngndpc, $qry);
	$array = array(array());
	$i = 0;
	while ($cont = mysqli_fetch_array($exe)) {
		for ($j = 0; $j <= 4; $j++) {
			$array[$i][$j] = $cont[$j];
		}
		$i++;
	}
	return $array;
}
/*Aluminies fetch on home page End*/

/*news fetch on home page start*/
function getNews()
{
	global $conngndpc;
	$qry = "SELECT * FROM gndpcnews";
	$exe = mysqli_query($conngndpc, $qry);
	$array = array(array());
	$i = 0;
	while ($cont = mysqli_fetch_array($exe)) {
		for ($j = 0; $j < 6; $j++) {
			$array[$i][$j] = $cont[$j];
		}
		$i++;
	}
	return $array;
}
/*news fetch on home page End*/

/*Events fetch on home page start*/
function getEvents()
{
	global $conngndpc;
	$qry = "SELECT * FROM events ORDER BY date DESC";
	$exe = mysqli_query($conngndpc, $qry);
	$array = array(array());
	$i = 0;
	while ($cont = mysqli_fetch_array($exe)) {
		for ($j = 0; $j < 5; $j++) {
			$array[$i][$j] = $cont[$j];
		}
		$i++;
	}
	return $array;
}
/*Events fetch on home page End*/

/*Events fetch on home page start*/
function getAchievements()
{
	global $conngndpc;
	$qry = "SELECT * FROM achievements ORDER BY date DESC";
	$exe = mysqli_query($conngndpc, $qry);
	$array = array(array());
	$i = 0;
	while ($cont = mysqli_fetch_array($exe)) {
		for ($j = 0; $j < 5; $j++) {
			$array[$i][$j] = $cont[$j];
		}
		$i++;
	}
	return $array;
}
/*Events fetch on home page End*/

/*Staff fetch on home page start*/
function getStaff($department)
{
	global $conngndpc;
	$qry = "SELECT * FROM staff WHERE department='$department'";
	$exe = mysqli_query($conngndpc, $qry);
	$array = array(array());
	$i = 0;
	while ($cont = mysqli_fetch_array($exe)) {
		for ($j = 0; $j < 10; $j++) {
			$array[$i][$j] = $cont[$j];
		}
		$i++;
	}
	return $array;
}
/*Staff fetch on home page End*/


//getComtype('managementC','9','mc');
/*Management fetch start*/
function getComtype($comt, $count, $type)
{
	global $conngndpc;
	$qry = "SELECT * FROM managementC WHERE comName='$type'";
	$exe = mysqli_query($conngndpc, $qry);
	$array = array(array());
	$i = 0;
	while ($cont = mysqli_fetch_array($exe)) {
		for ($j = 0; $j < 10; $j++) {
			$array[$i][$j] = $cont[$j];
		}
		$i++;
	}
	return $array;
}
/*Management fetch  End*/



//Function to get slider content Starts
function getGalleryImages($length, $place, $tOrf)
{
	global $conngndpc;
	$qry = "SELECT * FROM gallery WHERE $place='$tOrf'";
	$exe = mysqli_query($conngndpc, $qry);
	$array = array(array());
	$i = 0;
	while ($cont = mysqli_fetch_array($exe)) {
		for ($j = 0; $j < $length; $j++) {
			$array[$i][$j] = $cont[$j];
		}
		$i++;
	}
	return $array;
}
//Function to get slider content End


/*Notice PHP Start***************************************************************************************/

/*Update Notice*/
function updateNotice($sno, $dept, $date, $notice, $important, $urlname, $link)
{
	global $conngndpc;

	$qry = "UPDATE gndpcnotice SET `department`='$dept',`date`='$date',`noticecontent`='$notice',`important`='$important',`linkname`='$urlname',`link`='$link' WHERE sno=$sno";

	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Updated');
	skip:
}
/*Update Notice*/


/****************Dept. Notice show starts Here******************/
function showNotice($dept)
{
	global $conngndpc;
	$sql = "SELECT * FROM gndpcnotice WHERE  (department ='$dept' or department ='Common')";
	$result = $conngndpc->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			echo '<li onclick="newschange(this)">
							<span class="important">' . $row["important"] . '</span>[' . dateFormat($row["date"]) . '] ' . $row["noticecontent"] . ' <a target="_blank" href="//' . $row["link"] . '">' . $row["linkname"] . '</a></li>';
		}
	}
}



/****************Dept. Notice show Ends Here******************/
/*Notice PHP End***************************************************************************************/

/*Library PHP Start***************************************************************************************/

/*Update Lib. Links*/
function updateLib($sno, $content, $urlname, $link)
{
	global $conngndpc;

	$qry = "UPDATE liblinks SET `content`='$content',`linkname`='$urlname',`url`='$link' WHERE sno=$sno";

	$exe = mysqli_query($conngndpc, $qry);
	checkQuery($exe, 'Updated');
	skip:
}
/*Update Lib. Links*/


/*Library PHP End************/
