<?php session_start();?>
<?php 
$ownid=$_GET["ownid"];
$userid=$_GET["userid"];
if (!$ownid) if ($userid) $ownid=$userid;
//if ((!$userid))   header("location: welcome.php");
//if( (!$gsuperid) or (!$_SESSION["loggedin"] !== true){
// header("location: welcome.php");
//}
111
$submit=$_GET['submit'];
//$modeu=$GET['modeu'];//set modeu alert
$percent=number_format(($submit/$registered)*100,2);
$packid=$_GET['packid'];
$title=urlencode($_GET['title']);
$id=$_SESSION["uid"] ;
$aid=$_SESSION["adminid"] ;
$username=$_SESSION["username"];   //
$company=$_SESSION["company"];   //
$guser=$_SESSION["guser"];
$gadminid=$_SESSION["gadminid"];
$guserid=$_SESSION["guserid"];
$suid=$_SESSION["suid"] ;
$gsuperid=$_SESSION["gsuperid"];

$usernameg=($_GET["username"]);
if (!$username) if ($usernameg) $username=$usernameg;
$companyg=rawurldecode($_GET["company"]);
$titleg=rawurlencode($title);
$urlback="ownid=".$ownid."&userid=".$ownid."&username=".$usernameg."&company=".$companyg."&title=".$titleg;
//if(!isset($_SESSION["uid"]) || $_SESSION["loggedin"] !== true){
//  header("location: welcome.php");
//}
if (!$packid)
{
   $packid=$_SESSION["packid"] ;
  // if (!$packid) 
  // echo '<script>alert("NO PACK'.$packid.'");</script>';
}
//echo '<script>alert("g'.$gsuperid.'uid'.$_SESSION["loggedin"].'");</script>';
if (!$_SESSION["loggedin"]) {
    
    header("location: welcome.php");
}
$_SESSION["admin"]=$id;
$lmenu="h_diva1.php";
if ($guser<10)$bmenu="h_breadcombm.php";
if (($guser>=10) or ($gsuperid>=10)) $bmenu="h_breadcombs.php";
if ($guser>=20) $bmenu="h_breadcomba.php";
if ($guser>=30) $bmenu="https://n.kunok.com/lib/ui/h_breadcombd.php";
if (($guser>=100) or ($gadminid>=100)) { 
    $bmenu="h_breadcomba.php";
    $lmenu="h_diva1.php";
}
//bellow is destroy modeu
?>  
 <script>       //sessionStorage.setItem('modeu', "");//comment will make it one only alert </script>

<!DOCTYPE html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1"/>
<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0' >	
<script type="text/javascript" src="lang_th.php"></script>
<meta charset="UTF-8"><script type="text/javascript" src="https://n.kunok.com/lib/js/init.js"></script>	
<link rel="stylesheet" type="text/css" href="https://n.kunok.com/lib/css/h01.css">
<link rel="stylesheet" type="text/css" href="https://n.kunok.com/lib/css/cardbox4.css">
<link rel="stylesheet" type="text/css" href="https://n.kunok.com/lib/css/h_boxcolors.css">
<div w3-include-html="topbara1.php"></div>

<div w3-include-html="h_bottombar.php"></div>

<link rel="stylesheet" type="text/css" href="loading.css">
<link rel="stylesheet" type="text/css" href="tx.css">
<script type="text/javascript" src="https://n.kunok.com/lib/js/OptionPagination.js"></script>
<!-- <script type="text/javascript" src="./js/sticky.js"></script> -->
<script type="text/javascript" src="https://n.kunok.com/lib/js/limit_table.js"></script>
<script type="text/javascript" src="https://n.kunok.com/lib/js/search.js"></script>    
<script type="text/javascript" src="allx.js" ></script>


<link rel="stylesheet" type="text/css" href="https://n.kunok.com/s5.css">

<link rel="stylesheet" type="text/css" href="https://n.kunok.com/snb.css">
<link rel="stylesheet" type="text/css" href="https://n.kunok.com/lib/css/all21.css">
<script type="text/javascript" src="js9.js" ></script>
<link rel="stylesheet" type="text/css" href="corn9.css">
<script type="text/javascript" src="basic1.js"></script>
<link id="style1" rel="stylesheet" type="text/css" href="https://n.kunok.com/lib/css/h_breadcomb.css"/>
<div w3-include-html="<?php echo $lmenu;?>"></div>
<link rel="stylesheet" type="text/css" href="icons2.css">
<script>includeHTML();</script>
<script>
    

    localStorage.setItem("uid", <?php echo $ownid;?>);
    localStorage.setItem("uname", <?php echo $username;?>);
    localStorage.setItem("guser", <?php echo $guser;?>);
    localStorage.setItem("packid", <?php echo $packid;?>);
    localStorage.setItem("company", <?php echo $company;?>);
    gyg=localStorage.getItem("yg");

</script> 
</head>
<body>

<div id=maincont >

          <div id="corn9r" ><span class=closecorn9r onclick=closecorn("corn9r"); >&#x2715;</span><span id="contentcorn9rh"></span><div id="contentcorn9r">WAIT...<br><br>ON... <br>me<br></div></div>
<div id="corn9f" ><span class=closecorn9f onclick=closecorn("corn9f"); >&#x2715;</span><span id="contentcorn9fh"></span><div id="contentcorn9f">WAIT...<br><br>ON... <br>me<br></div></div>
    <div id="corn9e" ><span class=closecorn9e onclick=closecorn("corn9e"); >&#x2715;</span><span id="contentcorn9eh"></span><div id="contentcorn9e">WAIT...<br><br>ON... <br>me<br></div></div>
     <div id="corn96" ><span class=closecorn96 onclick=closecorn("corn96"); >&#x2715;</span><span id="contentcorn96h"></span><div id="contentcorn95">WAIT...<br><br>ON... <br>me<br></div></div>
    <div id="corn95" ><span class=closecorn95 onclick=closecorn("corn95"); >&#x2715;</span><span id="contentcorn95h"></span><div id="contentcorn95">WAIT...<br><br>ON... <br>me<br></div></div>
        <div id="corn94" ><span class=closecorn94 onclick=closecorn("corn94"); >&#x2715;</span><span id="contentcorn94h"></span><div id="contentcorn94">WAIT...<br><br>ON... <br>me<br></div></div>
<br>
<?php $menugo=str_replace("urlback",$urlback,file_get_contents($bmenu));?>
    <?php echo $menugo;?>
    <div class="flex container" id="major" ><!--startflexcontainer-->
<div class="flex container" >
<section>
		   <div class="flex info">
  <div class="info-name"></div>
  <?php
$tz = 'Asia/Bangkok';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
$dtz= $dt->format('Y-m-d, H:i:s');
 // $dtz=date("Y-m-d"). ":".date("h:i:sa");

?>
          <div class="info-code"><?php echo $dtz;?>
          <?php echo ":".$guser.":";?></div>		  
        </div>
        <script>
   //  if (localStorage.getItem('wasVisited') == undefined) {
    //    mol9corn("corn9r","aexprofiler1u.php?id=<?php echo $ownid;?>&username=<?php echo $username;?>","<?php echo $hder;?>","no");
    //    localStorage.setItem('wasVisited', 1);}
    //remove 2022-03-10
const DEFAULT_MODE = "alert";
	//chkalert="alert";
	nochkalert="noalert";
	let storedMode = sessionStorage.getItem('modeu');
	    if (!storedMode) {
	        storedMode = DEFAULT_MODE;
	        sessionStorage.setItem('modeu', DEFAULT_MODE);
	    }
	    setMode(storedMode);
		function setMode(modeu = DEFAULT_MODE) {
		    if (modeu === chkalert) {
				//alert("CHK");
				mol9corn("corn9r","aexprofiler1u.php?id=<?php echo $ownid;?>&username=<?php echo $username;?>","<?php echo $hder;?>","no");
		        sessionStorage.setItem('modeu', nochkalert);

		    } else if (modeu === nochkalert) {
		       // alert("NO");
		    }
		}        
     
    </script>
<?php 
$uarea="Area";
$ubusinesstype="Store";
$ucompany="Company";//$ucompany="Branch";
?>

<?php		        require_once "configs.php";
$sqlw = "SELECT * FROM difa  where owndifaid=13";
    $resw = $db->query($sqlw);
    if ($resw) {
        while ($row = $resw->fetchArray()) {
            if ($row['title']=="weight") $weighta= $row["description"];
       if ($row['title']=="chkcolslimit") $chkcolslimit= $row["description"];
          if ($row['title']=="commentreq") $commentreq= $row["description"];
          if ($row['title']=="scoreshow") $scoreshow= $row["description"];
          if ($row['title']=="uarea") $uarea= $row["description"];
          if ($row['title']=="ubusinesstype") $ubusinesstype= $row["description"];
          if ($row['title']=="ucompany") $ucompany= $row["description"];
          if ($row['title']=="ulogo") $ulogo= $row["description"]; // this is logo
          if ($row['title']=="powerby") $powerby = $row["description"];
          if ($row['title']=="powerbylogo") $powerbylogo = $row["description"];
        }
    } else{
            //No records were found
            }  //  ERROR: Could not able to execute $sql. " . mysqli_error($lin
            
        $rows=0;
$id=$_GET['userid'];
if (!$id) $id=$_GET['id'];
if (!$id) $id=$_SESSION["uid"] ;
if (!$id) $id=$_SESSION["id"] ;
$sql="select * from dyna left join users on dyna.ownerid=users.id left join fixa on fixa.id=dyna.packid where ownerid=".$id;
//$packid=$_GET['packid'];
if ($packid) $sql="select * from dyna left join users on dyna.ownerid=users.id left join fixa on fixa.id=dyna.packid where dyna.packid=".$packid." and ownerid=".$id;
       $res = $db->query($sql);
if ($res) {
           while ($row = $res->fetchArray()) {

$progress=$row['progress']; 
//$title=$row['title']; 
if ($_SESSION['lang']=="en") $title=$row['title']; else $title=$row['title_th'];
$packid=$row['packid']; 
$tas=$row["tas"];
$register=$row["register"];
$submit=$row["submit"];
$score=$row["ibox"];
$acore=$row["ibox"];
$usernamep=$row["username"];
$company=$row["company"];
$percent=number_format(floor(($row["ibox"]/$tas)*100),2);
$percent=number_format(($row["ibox"]/$tas)*100,2);
$percentx=number_format(($row["ibox"]/$tas)*100,2);
$perc=($row["ibox"]/$tas)*100;
 $grade="A";
if ($perc<80) $grade="B";
if ($perc<70) $grade="C";
if ($perc<59) $grade="D";
//$links.= "<a href=zform55v.php?packid=".$row['id']."&ownid=".$row["ownerid"]."&title=".urlencode($row['title'] ).$title."</a><br>";
$links.="<tr><td><h4><a href=?packid=$packid&progress=$progress&pscore=$percent&ascore=$percent&submit=$submit&registered=$register&grade=$grade&userid=".$row["ownerid"]."&ownid=".$row["ownerid"]."&title=$title>$title</a></td><td><a href=zform55v.php?packid=$packid&ownid=".$row["ownerid"]."&title=$title>&#128196;</a></h4></td></tr>";
//$linksn.="<tr><td><h4><a href=superuser_va.php?id=".$row['ownerid']."&ownid=".$row["ownerid"]."&username=".$row['username']."&guser=".$row['guser']."&packid=".$row['id']."&title=".urlencode($row['title'] ).">".urldecode($row['title'] )." <br>(".$row['username'].")   &#128196;</a></h4></td></tr>";
//$tlink="<a href=superuser_va.php?id=".$row['ownerid']."&username=".$row['username']."&guser=".$row['guser']."&packid=".$row['id']."&title=".urlencode($row['title'] ).">";
$normal="<tr><td><h4>&#128196; <a href=zform55v.php?id=".$row['ownerid']."&ownid=".$row["ownerid"]."&username=".$row['username']."&guser=".$row['guser']."&packid=".$row['id']."&title=".urlencode($row['title'] ).">".urldecode($row['title'] )." <br>  </a></h4></td></tr>";
if ($submit>0) $normal ="<tr><td><h4>&#128196; <a href=zform55v.php?id=".$row['ownerid']."&ownid=".$row["ownerid"]."&username=".$row['username']."&guser=".$row['guser']."&packid=".$row['id']."&title=".urlencode($row['title'] ).">".urldecode($row['title'] )." <br>** ALREADY SUBMIT  (".$row['username'].")  </a></h4></td></tr>";
$normal="";
if ($submit>0) $normal ="<tr><td><h4><section>✅ ALREADY SUBMITTED &#128196;  (".$row['username'].")  </section></h4></td></tr>";

$linksn.=$normal;
$gowhere="zform55v.php?id=".$row['ownerid']."&ownid=".$row["ownerid"]."&username=".$row['username']."&guser=".$row['guser']."&packid=".$row['id']."&title=".urlencode($row['title'] );
//$tlink="<a href=superuser_va.php?id=".$row['ownerid']."&username=".$row['username']."&guser=".$row['guser']."&packid=".$row['id']."&title=".urlencode($row['title'] ).">";
$gowhere="umos.php?packid=$packid&registered=$registered&progress=$progress&total=$total&tas=$tas&submit=$submit&title=$title";

$rows++;			
}
              //   mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
if ($rows<=0) echo "<h1>WAITING.. FOR ADMIN GRANT</h1>";                

//echo $registered;echo $startf;echo $approve;


$total=$_GET['total'];
if (!$progress) $progress=$_GET['progress'];
if (!$grade) $grade=$_GET['grade'];
$registered=$_GET['registered'];
$submit=$_GET['submit'];
if (!$percent)  $ascore=$_GET['ascore']; else $ascore=$percent;

if (!$percent) $pscore=$_GET['pscore'];
$percent=number_format(floor(($registered/$total)*100),2);
//$company=$_GET['company'];

//$gowhere="";
?>
<?php 
           	$sql1='SELECT * FROM "users" ,fixa where (fixa.bcode=users.businesstype or fixa.bcode=users.area) and users.id='.$id;
	$res1 = $db->query($sql1);
    if ($res1) {
    while ($row = $res1->fetchArray()) {
        $ifbi=substr($row["scode"],0,1)=="b"; //check if is business -first char is b then true
        if (( $row["businesstype"]==$row["bcode"]) && $ifbi)   $businesstype=$row["title"];
        // if ( $row["area"]==$row["bcode"]) {$area="A".$row["title"]; //Khun AE MAcro Case neeed A prefix
       if ( $row["area"]==$row["bcode"]) {$area="".$row["title"];
           $namedb= $row["username"];
           $companydb= $row["company"];
        }
         if ($ifbi) $tas=$row["tas"];
     //  echo $tas;
    }
        
    }
//	 echo $ifbi. $area.$businesstype.$tas;
$mypercent=($score*100)/$tas;
$grade="A";
if ($mypercent<80) $grade="B";
if ($mypercent<70) $grade="C";
if ($mypercent<59) $grade="D";
$progress=number_format($progress,2);
$mypercent=number_format($mypercent,2);
            ?>
<?php 
$sql = "SELECT * FROM difa  where owndifaid=13";
    $res = $db->query($sql);
    if ($res) {
        while ($row = $res->fetchArray()) {
            if ($row['title']=="timeexpired") $timeexpired= $row["description"];
              if ($row['title']=="showtime") $showtime= $row["description"];

        }
    } else{
            //No records were found
            }  //  ERROR: Could not able to execute $sql. " . mysqli_error($lin
?>
<?php if ($submit>0) $progress="100";?>
		<center><h3>My progress <?php echo $progress."%";//$total;?>
	<!-- 	-->
	<?php //echo $progress."%";
	$myprogress=$progress;?>
	<?php if ($scoreshow==1) { ?>
	</h3><span style="opacity:0.5">Grade </span><?php echo $grade;?> <?php echo"<br><span style='opacity:0.5'>Total Score</span> $tas <br><span style='opacity:0.5'>Achived Score </span> $score<br>";?>
	<hr>
	<?php echo "<span style='opacity:0.5'>Achived Score </span> $mypercent% ";?>
	<br>
	<div class="pie" data-pie='{ "percent": <?php echo $mypercent;?> }'></div>
	<hr>
	<span style='opacity:0.5'>Progress</span> <?php echo $progress;?>% 
	<?php }?>
<div class="pie" data-pie='{ "percent": <?php echo $progress;?> }'></div>
        <div class="code">
        		  		
        </div><br>
      TIME LEFT
		
		<p id=demo></p><p id=demo2></p></center>
	
</section>
<!--section1-->

            <script>
            localStorage.setItem("packid","<?php echo $packid;?>");
            localStorage.setItem("company","<?php echo $companyd;?>");
            localStorage.setItem("username","<?php echo $usernamed;?>");
            </script>
<!--section2-->
<section>
        <div class="flex info">
          <div class="info-name">Program :<?php echo $guserid. "/".$suid ."/".$companyg."/".$gsuperid;?></div>
          <div class="info-code"></div>
        </div>
<center>
        <div class="profile_pic">
    <img style="max-width:100%; border-radius: 10%;-moz-box-shadow: 10px 10px 5px rgba(210,210,210,.2);  -webkit-box-shadow: 10px 10px 5px rgba(210,210,210,.2);" src="<?php echo $ulogo;?>">
        </div>
<br>
<h1>
<?php 
    $sql = "select * from fixa where status>0 and status ";
    $res = $db->query($sql);
    if ($res) {
        while ($row = $res->fetchArray()) {
            if ($row['status']) $statusc="red";
            //echo $row["status"];
            
        if ($_SESSION['lang']=="en") $title=$row['title']; else $title=$row['title_th'];
    $packid=$row["id"];
    //echo $title;//$packid;
    echo "<br>";
        }
    } else{
            //No records were found
            }  //  ERROR: Could not able to execute $sql. " . mysqli_error($link);
           $_SESSION['packid']= $packid;      
?>

</script>
</h1>		
<?php $allowed="yes";
//if ( (($guser<10) and (!$gsuperid)) || ($gadminid>=100)) $chlistallowed="yes"; else $chlistallowed="no";
if ( (($gsuperid==0) || ($gsuperid==20) || ($gsuperid==30) ) || ($gadminid>=100)) $chlistallowed="yes"; else $chlistallowed="no";
?>
<!--<a href=#\ onclick="jsgo('zf.php?id=<?php echo $id;?>')";>CHECKLIST<?php echo $packid; ?></a>-->
<br><h3><a href=az5.php?ownid=<?php echo $id."&packid=".$packid."&username=".$usernamed."&company=".$companyd."&title=".rawurlencode($title);?>><?php if ($chlistallowed=="yes") {
  //  echo "<section class='section' style='width:220px;color:Teal;'>";
  //echo "<img src=/img/chklist.png style='width:18px;'>";
  echo "<h1 style='font-family:Times'>ESG</h1> Assessment";
?>
<p id=d_checklistnamex></p>
<?php
 //echo "</sction>";
}?></a>
</h3>
<?php  if ($chlistallowed=="yes") echo $normal;?>
        <div class="code">
          
        </div>
</center>
</section>
<!--section2-->
<!--section3-->
<?php
$d_advance_profile="Profile";
$d_advance_profile="ข้อมูลพื้นฐานส่วนตัว";
$d_advance_profilet="ข้อมูลพื้นฐานส่วนตัว";
if ($_SESSION['lang']!="en")  $hder=rawurlencode($d_advance_profile); else  $hder=rawurlencode($d_advance_profilet);
 $hder=rawurlencode($d_advance_profile);
   // echo ' <button class="button1 blue" style="color:white;" onclick= mol9corn("corn9r","ak4fa.php?id=' . $row['id'] .'&aid=' . $aid .'&packid='.$packid.'&tas='.$tas.'&registered='.$registered.'&total='.$total.'&title='.$title.'","'.$hder.'");>🔍 Registered '.$registered.'</button>';?>
<section class="section">
        <div class="flex info">
          <div class="info-name"><?php echo $usernamed;?>
          <?php
          $sql2="SELECT * FROM dyna WHERE  ownerid=".$id;
 
          $res2 = $db->query($sql2);
          if ($res2) {
          while ($row = $res2->fetchArray()) {
              $profiled=$row["profile"];
              
          }
          }
          echo "Items:".$profiled;
        ?>
          </div>
          <div class="info-code"></div>
		  <div id=showbar class="a"><?php echo '<button class="button1 blue" style="color:white;" onclick= mol9corn("corn9r","aexprofiler1u.php?id='.$id.'&username='. urlencode($row['username']) .'","'.$hder.'","no");>🔍 Prof!</button>';?>
</div>
        </div>
		<center>
		<div class="container2">
			<div id=show class="con-1">
    <div id=showu3 class="con-1">
<?php
 $rows=0;
$rowdyna=0;
$dminu=0;
//echo "ID:".$id;
		$sql = "SELECT * FROM difa where  ( scode like 'f%'  or scode like 's%' or scode like 't%')   and owndifaid=".$id." order by scode";
		//status='1'  and
		//and title<>'profile_pic' and title<>'user_attm'
$res = $db->query($sql);
if ($res) {

    echo "<table id=tble style='color:inherit !important;' >";
  //  echo "<tr>";
    //	echo "<th onclick='sortTableX(0)'  style='width:5%;'>item</th><th onclick='sortTableX(1)'  style='width:10%;'>Description</th>";	
   // echo "<td colspan='2' ></td>";				
//	echo "</tr>";
    while ($row = $res->fetchArray()) {
        $tlink="<a href=superuser_va.php?id=".$row['ownerid']."&username=".$row['username']."&guser=".$row['guser']."&packid=".$row['id']."&title=".urlencode($row['title'] ).">";
        $mlink="<a href=zprog_listi.php?id=".$row['ownerid']."&username=".$row['username']."&guser=".$row['guser']."&packid=".$row['id']."&title=".urlencode($row['title'] ).">";
        $loca="zprog_listi.php?packid=".$row['id'];
        //									echo "<tr onclick=window.location='".$loca."'>";
        
    echo "<tr>";
    //echo "<td>".substr($row["title"],0,150)."(".$row["packid"].")"."</td>";		
	//echo "<td  >".$row["title"]."</a></td>";	
    if (strtolower($row["title"])=="attachment" || strtolower($row["title"])=="profile_pic") $description="<a href='".$row["description"]."' target='_blank' class='button1 grey' style='font-size:12px;color:red;'>&#128279;</a>"; else $description=$row["description"];
    //if (strtolower($row["title"])=="profile_pic") $description="<a href='".$row["description"]."' target='_blank' class='button1 grey' style='font-size:12px;color:red;'>&#128279;</a>"; else $description=$row["description"];
    
    if (strtolower($row["title"])=="profile_pic")  $imgprofile=$row["description"];
    if (strlen($imgprofile)<=0)  {$imgprofile="img/user.png";} else {$rowdyna--;}
    if (strtolower($row["title"])=="company")  $companyprofile=$row["description"];
    if (strtolower($row["title"])=="company_contact")  $company_contact=$row["description"];
    if (strtolower($row["title"])=="contact_tel")  $contact_tel=$row["description"];
    $title=$row["title"];
    if(strpos($title, 'rang1') !== false) $itype="hidden"; else  $itype="text";
$dynainput0= '<input type="'.$itype.'" style="width:97%;" onblur="myTrimBlur(this)" id="iadvprof'.$i.'" name="iadvprof'.$i.'" value="'.$row['description'].'" title="_'.$row['description'].'" required>';
                                   //echo  $dynainput0;
                                //  echo "<td>";
 if(strpos($title, 'rang1') == false)  echo "";
if(strpos($title, 'rang1') !== false) { echo "";
$dynainput='<br><input type="radio" name="seconds1[1]" value="0"';
if ($row['description']==0) $ch0="checked";
if ($row['description']==1) $ch1="checked";
if ($row['description']==2) $ch2="checked";
if ($row['description']==3) $ch3="checked";
$var0="0 คน";
$var1="10 คน";
$var2="20 คน";
$dynainput.=$ch0.' onChange=document.getElementById("'.$eid.'").value=this.value>'.$var0;
$dynainput.='<br><input type="radio" name="seconds1[1]" value="1" ';
$dynainput.= $ch1.' onChange=document.getElementById("'.$eid.'").value=this.value>'.$var1;
$dynainput.='<br><input type="radio" name="seconds1[1]" value="2" ';
$dynainput.= $ch2.' onChange=document.getElementById("'.$eid.'").value=this.value>'.$var2;
$dynainput.='<br><input type="radio" name="seconds1[1]" value="3" ';
$dynainput.= $ch3.' onChange=document.getElementById("'.$eid.'").value=this.value>'.'<input type="text" name="other_reason" />';
//echo  $dynainput;
$title=str_replace("rang1",$dynainput,$title);
//echo "</td>";
}

if(strpos($title, 'rang2') !== false) { echo "";
  $dynainput='<br><input type="radio" name="seconds1[1]" value="0"';
  if ($row['description']==0) $ch0="checked";
  if ($row['description']==1) $ch1="checked";
  if ($row['description']==2) $ch2="checked";
  if ($row['description']>2) {$ch3="checked";$valueResult=$row['description'];}
  $var0="0 คน";
  $var1="10 คน";
  $var2="20 คน";
  $dynainput.=$ch0.' onChange=document.getElementById("it'.$eid.'").value=this.value;>'.$var0;
  $dynainput.='<br><input type="radio" name="seconds1[1]" value="1" ';
  $dynainput.= $ch1.' onChange=document.getElementById("it'.$eid.'").value=this.value;>'.$var1;
  $dynainput.='<br><input type="radio" name="seconds1[1]" value="2" ';
  $dynainput.= $ch2.' onChange=document.getElementById("it'.$eid.'").value=this.value;>'.$var2;
  $dynainput.='<br><input type="radio" name="seconds1[1]" value="3" ';
  $dynainput.= $ch3.' onChange=document.getElementById("it'.$eid.'").value=this.value;> อื่นๆ '.'<input id="it'.$eid.'" type="text" name="other_reason" value="'.$valueResult.'" />';
//echo  $dynainput;
$description="";  // ถ้ามี rang ไม่ต้องแสดงค่าเก่า
$title=str_replace("rang2",$dynainput,$title);
//echo "</td>";
}

    if (strtolower($row["title"])!="user_attm" and strtolower($row["title"])!="profile_pic" )  	echo "<td style='opacity:.4;font-size:small;'>".$title."</a></td>";	
    //if (strtolower($row["title"])!="user_atm")  	echo "<td  style='color:grey;'>".$row["title"]."</a></td>";	
    //	if (strtolower($row["title"])!="profile_pic")  		echo "<tr><td colspan='2'>".$description."</a></td></tr>";	
    if (strtolower($row["title"])!="user_attm" and strtolower($row["title"])!="profile_pic" ) echo "<tr><td colspan='2'>".$description."</a></td></tr>";	
    //echo "<td>".$row["username"]."(".$row["ownerid"].")"."</td>";
    //echo "<td>".$row["ibox"]."</td>";
	//		echo "<td>".$tlink ."fEdiT</a></td>";
if ((strtolower($row["title"])=="user_attm") or (strtolower($row["title"])=="profile_pic")) $dminu++;
 
    $rows++;
       $rowdyna=$rows-$dminu;
    }					
    echo "</tr>";	
    //   $sql="update dyna set profile=".$rowdyna. " where profile<>$rowdyna and ownerid=".$id;
   //     $res = $db->query($sql);                          								
        // Free result set
        //  mysqli_free_result($result);
    } else{
        echo "<p class='lead'><em>No records were found.</em></p>";
    }
    echo "</table>";
    $sql1="SELECT * FROM difa WHERE scode like 'f%' and owndifaid=".$id;
    $r=0;
    $res1 = $db->query($sql1);
    if ($res1) {
    while ($row = $res1->fetchArray()) {
        $profilec=$row["profile"];
        $r=$r+1;
    }
    }
    if ($r<9) 
    {
    $profilect="<section><b style='color:red'>Your profiles [". $r."] < 9 <br>Not allowed to submit </b><br></section>";
    //echo $profilect;
  //  echo '<center><button class="button blue" style="color:white;" onclick= mol5fp("aexprofiler1u.php?id='.$id.'&username='. urlencode($row['username']) .'","'.$hder.'","no");>New Profile!</button></center>';
     echo '<center><button class="button1 red" style="color:white;" onclick= mol9corn("corn9r","aexprofiler1u.php?id='.$id.'&username='. urlencode($row['username']) .'","'.$hder.'","no");>New Profile!</button></center>';
    }
     //  if ($profiled<>$rowdyna) {
  //  $sqlx="update dyna set profile=".$rowdyna. " where ownerid=".$id;
 //   $res = $db->query($sqlx);
 //   echo $sqlx.$res.$id.$profiled.":".$rowdyna;
    
//} else{
  //  echo "<p class='lead'><em>"."Updated.</em></p>";
//}
?>

			</div>
        </div>
		</center>
	</section>
	<!--section4-->
	<?php

    $total=$_GET['total'];
    $progress=$_GET['progress'];
    $percent=number_format(floor(($progress/$total)*100),2);
    $percent=$percent;
    $packid=$_GET['packid'];
    $hder=rawurlencode("Profile Pic");
    //echo '<button class="button1 green" style="color:white;" onclick= mol9corn("corn9r","ak7fa.php?id=' . $row['id'] .'&packid='.$packid.'&tas='.$tas.'&registered='.$registered.'&total='.$total.'&title='.$title.'","'.$hder.'");>🔍 On Progress '.$act.'</button>';
    $sql1='SELECT * FROM difa where  title="profile_pic" and owndifaid='.$id .' order by id DESC limit 1';
    $r=0;
    $res1 = $db->query($sql1);
    if ($res1) {
    while ($row = $res1->fetchArray()) {
        $imgprofile=$row["description"];
        
    }
    }
 
    if (strlen($imgprofile)<=0)  {$imgprofile="img/user.png";} 
    ?>
	<section class="section">
        <div class="flex info">
        <div class="info-name"><?php echo "$usernamed" ;?><!--<?php echo '<button class="button1 blue" style="color:white;" onclick= mol9corn("corn9r","aexprofiler1e.php?id='.$id.'&username='. urlencode($row['username']) .'","'.$hder.'","no");>🔍+Prof!</button>';?>--></div>
        <div class="info-code"></div>
        <div id=showbar class="a"><?php echo '<button class="button1 green" style="color:white;" onclick= mol9corn("corn94","mul.php?id='.$id.'&username='.$usernamed.'","'.$hder.'","no");>🔍+ Pic!</button>';?>
        </div>
        </div>
		<center>
		<div class="container2s">
		 <div class="profile_pic">
		<a href=<?php echo $link;?>?id=<?php echo $id;?>&t=t><img style="max-height:192px; max-width:192px;border-radius: 50%;" src=<?php echo $imgprofile;?>></a>
        </div>
	<br> <?php $ucompany="Company";?>
	<section class="section" style='width:220px;'>
		User: <?php echo htmlspecialchars($namedb);?><br><?php echo $ucompany;?>: <?php echo htmlspecialchars($companydb);?>
		<?php $uarea="Group";$ubusinesstype="Type"; //MAKRO CHALEE?>
		<br><?php echo $uarea;?>: <?php echo $area;?>
		<br><?php echo $ubusinesstype;?>: <?php echo $businesstype;?><?php
 $rows=0;
$rowdyna=0;
$dminu=0;
//echo "ID:".$id;
		$sql = "SELECT * FROM difa where  ( scode like 'e%')   and owndifaid=".$id." order by scode";
		//status='1'  and
		//and title<>'profile_pic' and title<>'user_attm'
// $res = $db->query($sql);
if ($res) {

    echo "<table id=tbles  >";
        //20220308 --added style display none from K.NAN Tuv Requested aftered they requested to added weeks ago
  //  echo "<tr>";
    //	echo "<th onclick='sortTableX(0)'  style='width:5%;'>item</th><th onclick='sortTableX(1)'  style='width:10%;'>Description</th>";	
   // echo "<td colspan='2' ></td>";				
//	echo "</tr>";
    while ($row = $res->fetchArray()) {
        $tlink="<a href=superuser_va.php?id=".$row['ownerid']."&username=".$row['username']."&guser=".$row['guser']."&packid=".$row['id']."&title=".urlencode($row['title'] ).">";
        $mlink="<a href=zprog_listi.php?id=".$row['ownerid']."&username=".$row['username']."&guser=".$row['guser']."&packid=".$row['id']."&title=".urlencode($row['title'] ).">";
        $loca="zprog_listi.php?packid=".$row['id'];
        //									echo "<tr onclick=window.location='".$loca."'>";
        
    echo "<tr>";
    //echo "<td>".substr($row["title"],0,150)."(".$row["packid"].")"."</td>";		
	//echo "<td  >".$row["title"]."</a></td>";	
 $description=$row["description"];
    //if (strtolower($row["title"])=="profile_pic") $description="<a href='".$row["description"]."' target='_blank' class='button1 grey' style='font-size:12px;color:red;'>&#128279;</a>"; else $description=$row["description"];
    
     //	echo "<td  style='color:rgba(125,125,125,.5);'>".$row["title"]."</td>";	// removed by NAN Requested (2022-03-13)
    //if (strtolower($row["title"])!="user_atm")  	echo "<td  style='color:grey;'>".$row["title"]."</a></td>";	
    //	if (strtolower($row["title"])!="profile_pic")  		echo "<tr><td colspan='2'>".$description."</a></td></tr>";	
   // echo "<td >:".$description."</td>";	// removed by NAN Requested (2022-03-13)
    //echo "<td>".$row["username"]."(".$row["ownerid"].")"."</td>";
    //echo "<td>".$row["ibox"]."</td>";
	//		echo "<td>".$tlink ."fEdiT</a></td>";
if ((strtolower($row["title"])=="user_attm") or (strtolower($row["title"])=="profile_pic")) $dminu++;
 
    $rows++;
       $rowdyna=$rows-$dminu;
    }					
    echo "</tr>";	
   //    $sql="update dyna set profile=".$rowdyna. " where profile<>$rowdyna and ownerid=".$id;
   //     $res = $db->query($sql);                          								
        // Free result set
        //  mysqli_free_result($result);
    } else{
        echo "<p class='lead'><em>No records were found.</em></p>";
    }
    echo "</table>";
    $sql1="SELECT * FROM difa WHERE scode like 'e%' and owndifaid=".$id;
    $r=0;
    $res1 = $db->query($sql1);
    if ($res1) {
    while ($row = $res1->fetchArray()) {
        $profilec=$row["profile"];
        $r=$r+1;
    }
    }
    
?>
<br>
<br><?php
echo '<a href =#\ class="button1 red" style="color:white;" onclick='.'\'xupdpass("'.$id.'","'.$usernamed .'");\''.'>&#128273;Change</a>';
?>
</section>
		</div>
		</center>
	</section>
<!--section5-->
<?php
$total=$_GET['total'];
$progress=$_GET['progress'];

$percent=number_format(floor(($progress/$total)*100),2);
$percent=$percent;
$packid=$_GET['packid'];
?>

	<section class="section">
        <div class="flex info">
          <div class="info-name">LOG:<?php echo $id  .':'. $guser ?></div>
          <div class="info-code"><?php echo $username;?></div>
		  <div id=showbar class="a"></div>
        </div>
		<center>
	<div class = "outertb" style="height:320px;overflow-y: auto;">

<div class="vtl">
<?php
//$id=50;
                    // Include config file
        require_once "configs.php";
$d[]="";
$data = array( 
             array('Business', date,date),

);
        $rows=0;
        // Attempt select query execution
$sql="select * from dyna left join users on dyna.ownerid=users.id left join fixa on fixa.id=dyna.packid order by fixa.id desc,ibox desc";
$sql = "SELECT * FROM fixa where fixa.scode like 'p%' or fixa.scode like 'q%' order by scode ";
$sql="select *,datetime(titan.datetime,'+7 hours') as datetimem   from titan left join users on titan.titanid=users.id where titanid=".$id;
$res = $db->query($sql);
if ($res) {

  while ($row = $res->fetchArray()) {
			  echo "<tr> <div class='event'>";
if ($_SESSION['lang']=="en") $title=$row['title']; else $title=$row['title_th'];
//                                        echo "<td>" . $title. "</td>";
if ($row['status']=='3') $title="<a href=az5.php?".$title."</a>";
if ($row['status']=='8') $title="<a href=az5.php?".$title."</a>";
						//			echo "<td>".$title."</td>";	
									//echo "<td>".$title."(".$row["packid"].")"."</td>";									
//									echo "<td>".$row["username"]."(".$row["ownerid"].")"."</td>";
	//								echo "<td>".$row["ibox"]."</td>";
										//echo "<td>"."<a href=zlisalist53.php?packid=".$row['id']."&title=".urlencode($row['title'] ).">" ."&#128221;debug</a></td>";
										//echo "<td>"."<a href=v_form53.php?packid=".$row['id']."&ownid=".$row["ownerid"]."&title=".urlencode($row['title'] ).">" ."&#128221;EdiT</a></td>";
		//								echo "<td>".$row['company']."</td>";
if ($row['status']=='1') $status="Registered";
if ($row['status']=='2') $status="Start FillIn";
if ($row['status']=='3') $status="Submit";
if ($row['status']=='5') $status="Protected";
if ($row['status']=='6') $status="UnRegistered";
if ($row['status']=='8') $status="Approved";
			//						echo "<td>".$status."</td>"; //&#128441;
//									echo "<td>".$row['datetimem']."</td>"; //&#128441;
									//echo "<td>";
								             $rows++;		
//$dt="new Date('".$row['datetime']."')";
//$d=array($status,$dt,$dt);

//$d=array('date',34);
//$data[]=$d;   
?>
    <strong class="edate"><?php echo $row['datetimem'];?></strong>
    <p class="etxt"><?php echo $status;?> </p>
<?php
                                    echo "</tr>  </div>";
                                }
  //                              echo "</tbody>";                            

                            // Free result set
                          //  mysqli_free_result($result);
$dataj=json_encode($data);
                        } else{
                            echo "<p class='lead'><em>First Time login  were found.</em></p>";
//start insert new to titan
 $sql = "INSERT INTO titan (titanid,status) VALUES (?, ?)";
  if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ii", $param_titanid,$param_status);
    // Set parameters
    $param_titanid = $id;
    $param_status=1;
    //$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                // header("location: login.php");
                echo " created user" .$param_titanid;
//echo '<script>window.location.reload();</script>';
            } else{
                $rest="ERROR: Could not able to execute $sql. " . mysqli_error($link);
                echo "Err$rest.";
            }

            // Close statement
//            mysqli_stmt_close($stmt);
    }
//end insert new to titan

                        }
//                    } else{
                     //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                  //  }
 
                    // Close connection
               //     mysqli_close($link);
				//	echo "<pre>";

?>

</div>
</div> <!-- end outertb -->
		</center>
	</section>
<section class="section4">
      <div class="flex info">
          <div class="info-name">🏪</div>
          <div class="info-code"> status</div>
        </div>
     <center>Your Step By Step<hr><br>
<?php 
$sql1="SELECT * FROM difa WHERE scode like 't%' ";
$advprofc=0;
$res1 = $db->query($sql1);
if ($res1) {
 while ($row = $res1->fetchArray()) {
$profilec=$row["profile"];
$r=$r+1;
}
$advprofc=$r;
}
$sql1="SELECT * FROM difa WHERE scode like 'f%' and status and owndifaid=".$id;
$r=0;

$res1 = $db->query($sql1);
if ($res1) {
 while ($row = $res1->fetchArray()) {
$profilec=$row["profile"];
$r=$r+1;
}

}
if ($r<9) $profilect="<b style='color:red'>check if profile < 9 âœ‹not allowed to submit [". $r."]</b><br>";


$sql="select * from dyna left join users on dyna.ownerid=users.id left join fixa on fixa.id=dyna.packid where fixa.status and ownerid=".$id;
  $res = $db->query($sql);
if ($res) {
      while ($row = $res->fetchArray()) {

//echo $row["title"];
//echo $row["profile"];
?>
    <div class="containerc">
      <ul class="progressbarc">
        <li class="active">SignUP</li>
        <li class="<?php if($row["submit"]>0) echo "active";?>"> Checklist / Attachment (<?php echo $myprogress."%";//$total;?>)</li>
        <li class="<?php  if($r>=8) echo "active";?>"> Profile </li>
      </ul>
    </div>
<?php
}
}
?>
  </center>


      </section> 

</body>	
<script>
      window.addEventListener('DOMContentLoaded', () => {
        const circle = new CircularProgressBar('pie');

        const pie = document.querySelectorAll('.pie');
        const range = document.querySelector('[type="range"]');

        range.addEventListener('input', (e) => {
          pie.forEach((el, index) => {
            const options = {
              index: index + 1,
              percent: e.target.value
            }
            circle.animationTo(options);
          })
        })

        

        document.querySelectorAll('pre code').forEach((el) => {
          hljs.highlightElement(el);
        });

        const infoCode = document.querySelectorAll('.info-code');
        infoCode.forEach(info => {
          info.addEventListener('click', (e) => {
            e.target.closest('section').classList.toggle('show-code');
          })
        })

      });
</script>
<script src="circularProgressBar.min.js"></script>
<!-- Display the countdown timer in an element -->
</html>
<style>
/* (A) "SET" THE TIMELINE CONTAINER */
.vtl {
  /* (A1) RELATIVE POSITION NECESSARY TO PROPERLY POSITION TIMELINE LATER */
  position: relative;
  /* (A2) RESERVE MORE SPACE TO THE LEFT FOR THE TIMELINE */
  padding: 10px 10px 10px 50px;
  /* (A3) OPTIONAL WIDTH RESTRICTION */
  max-width: 400px;
}

/* (B) DRAW TIMELINE USING ::BEFORE */
.vtl::before {
  /* (B1) DRAW THE TIMELINE */
  content: '';
  width: 5px;
  background-color: #DE421A;
  /* (B2) POSITION IT TO THE LEFT */
  position: absolute;
  top: 0;
  bottom: 0;
  left: 15px;
}

/* (C) STYLES FOR THE EVENTS */
div.event {
  padding: 20px 30px;
  background-color: #ffebeb;
  position: relative;
  border-radius: 6px;
  margin-bottom: 10px;
}

/* (D) STYLES FOR THE DATE & TEXT */
strong.edate {
  font-size: 1.1em;
  font-weight: bold;
  color: #ff6a00;
}
p.etxt {
  margin: 10px 0 0 0;
  color: #222;
}

/* (E) ADD "SPEECH BUBBLE TRIANGLE" TO THE EVENTS */
div.event::before {
  content: '';
  border: 10px solid transparent;
  border-right-color: #ffebeb;
  border-left: 0;
  position: absolute;
  top: 20%;
  left: -10px;
}

/* (F) ADD A CIRCLE ON THE TIMELINE TO INDICATE AN EVENT */
div.event::after {
  content: '';
  background: #fff;
  border: 4px solid #DE421A;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  position: absolute;
  top: 20%;
  left: -44px;
}

/* (X) DOES NOT MATTER */
html, body { font-family: arial, sans-serif; }
</style>
        <div class="code">
          
        </div>
</section>	  
 

<!--ProgressBarc-->      
	  
<style>
.containerc {
  width: 100%;
}

.progressbarc {
  counter-reset: step;
}
.progressbarc li {
  list-style: none;
  display: inline-block;
  width: 30.33%;
  position: relative;
  text-align: center;
  cursor: pointer;
    font-family: Arial;
}
.progressbarc li:before {
  content: counter(step);
  counter-increment: step;
  width: 30px;
  height: 30px;
  line-height : 30px;
  border: 1px solid #aaa;
  border-radius: 100%;
  display: block;
  text-align: center;
  margin: 0 auto 10px auto;
  background-color: #ddd;
    font-weight: bold;
	  font-family: Arial;
}
.progressbarc li:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: #ddd;
  top: 15px;
  left: -50%;
  z-index : -1;
}
.progressbarc li:first-child:after {
  content: none;
}
.progressbarc li.active {
  color: grey;
}
.progressbarc li.active:before {
  border-color: green;
  background-color: #4bb543;;
  color:white;
} 
.progressbarc li.active + li:after {
  background-color: green;
}
</style>     
   

</div>
</div>
<script>
//Make the DIV element draggagle:
//dragElement(document.getElementById("corn9r"));
//mol9corn('corn9f','dux1.php');
<?php 
$d_advance_profile="Profile";
$d_advance_profile="ข้อมูลพื้นฐานส่วนตัว";
$d_advance_profilet="ข้อมูลพื้นฐานส่วนตัว";
if ($_SESSION['lang']!="en")  $hder=rawurlencode($d_advance_profile); else  $hder=rawurlencode($d_advance_profilet);
 $hder=rawurlencode($d_advance_profile);
//$hder="Advance Profile";//.":".$r.":".$advprofc;
if ($r<$advprofc) {?>
 mol9corn("corn9r","aexprofiler1u.php?id=<?php echo $id;?>&username=<?php echo urlencode($row['username']);?>","<?php echo $hder;?>","no");
// mol9corn("corn9r","aexprofiler1u.php?id=<?php echo $ownid;?>&username=<?php echo $username;?>","<?php echo $hder;?>","no");

 <?php }?>

</script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $timeexpired;?>").getTime();
var countDownShowtime = new Date("<?php echo $showtime;?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;


  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + " day(s) " + hours + "h "
  + minutes + "m " + seconds + "s ";

  
  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
var y = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date

var distance2 = countDownShowtime - now;

  // Time calculations for days, hours, minutes and seconds

  var days = Math.floor(distance2 / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance2 % (1000 * 60)) / 1000);
  // Display the result in the element with id="demo"

  document.getElementById("demo2").innerHTML = days + " day(s) " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is finished, write some text

 if (distance2 < 0) {
    clearInterval(y);
    document.getElementById("demo2").innerHTML = "Show";
  }
}, 1000);
function checkuilang(lang){
    //alert(lang);
   
d_checklistname=document.getElementById("d_checklistname");
d_advance_profile=document.getElementById("d_advance_profile");
d_checklistname.innerHTML=d_checklistname_th;
d_advance_profile.innerHTML=d_advance_profile_th;

 d_login_header=document.getElementById("login_header");
    d_login_username=document.getElementById("d_login_username");
    d_login_password=document.getElementById("d_login_password");
    d_login_password_view=document.getElementById("d_login_password_view");
    d_login_submit=document.getElementById("d_login_submit");
  //lang=th  
    d_login_header.innerHTML=d_login_header_th;
    d_login_username.innerHTML=d_login_username_th;
    d_login_password.innerHTML=d_login_password_th;
    d_login_password_view.innerHTML=d_login_password_view_th
    d_login_submit.innerHTML=d_login_submit_th;
   
}
checkuilang("th");
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"    />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
 <script type="text/javascript"src="//code.jquery.com/jquery-1.11.0.js"   ></script>
     <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>