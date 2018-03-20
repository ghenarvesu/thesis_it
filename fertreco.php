<?php
session_start();

$user = (isset($_GET["user"]) && $_GET['user'] != "") ? $_GET['user'] : "";

if ($user == 'admin'){
include('mainnav.php');
}else if($user == 'employee'){
include('emp_nav.php');
}
?>

 <?php
 $connect = mysqli_connect("localhost", "root", "", "db_ccasd");

 $q = "SELECT * FROM tbltemp where 1";//where brgy= $brgy and crop=$crop
 $result = mysqli_query($connect, $q);
 while($row = mysqli_fetch_array($result))
 {
   $sample= $row['sample'];
   $res_n= $row['res_n'];
   $res_n_val= $row['res_n_val'];
   $res_p= $row['res_p'];
   $res_p_val= $row['res_p_val'];
   $res_k= $row['res_k'];
   $res_k_val= $row['res_k_val'];
   $res_ph= $row['res_ph'];
   $resp_ph_val= $row['resp_ph_val'];
   $datee = $row['datee'];
   $name = $row['name'];
   $brgy = $row['brgy'];
   $area = $row['area'];
   $crop = $row['crop'];
 }
/*
 $sql= "SELECT * FROM tblfert";//where brgy= $brgy and crop=$crop
 $result = mysqli_query($connect, $sql);
 while($row = mysqli_fetch_array($result))
 {
 $crops=$row['f_crops'];
 $n_low=$row['f_n_low'];
 $n_mediums=$row['f_n_medium'];
 $crops=$row['f_n_high'];
 $crops=$row['f_p_low'];
 $crops=$row['f_p_medium'];
 $crops=$row['f_p_high'];
 $crops=$row['f_k_deficient'];
 }
 */
 ?>
<div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>City of Calamba
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Agricultural Services Department</h3>

            </div>
        </div>


<body>
	 <div class="main-content">
   <center>
<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=156 colspan=2 valign=top style='width:116.8pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'>Name<o:p></o:p></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>
  <span style='font-family:"Segoe UI",sans-serif;color:#232323;
  background:white'> <?php echo  $name; ?>
</span>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'>Date<o:p></o:p></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Segoe UI",sans-serif;color:#232323;
  background:white'><?php echo  $datee; ?></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=156 colspan=2 valign=top style='width:116.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'>Location<o:p></o:p></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'><?php echo  $brgy; ?></span></span><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'><o:p></o:p></span></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'>Crop<o:p></o:p></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'><?php echo  $crop; ?></span></span><span style='font-family:
  "Segoe UI",sans-serif;color:#232323;background:white'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=623 colspan=8 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>Results
  of Soil Analysis<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=125 valign=top style='width:93.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>SAMPLE
  NO.<o:p></o:p></span></b></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><b style='mso-bidi-font-weight:
  normal'><span style='font-family:"Segoe UI",sans-serif;color:#232323;
  background:white'>pH</span></b></span><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'><o:p></o:p></span></b></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>N<o:p></o:p></span></b></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>P<o:p></o:p></span></b></p>
  </td>
  <td width=125 valign=top style='width:93.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>K<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=125 valign=top style='width:93.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'><?php echo  $sample; ?><o:p></o:p></span></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'>6.4<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'>(Slightly Acidic)<o:p></o:p></span></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'><?php echo  $res_n; ?><o:p></o:p></span></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'><?php echo  $res_p; ?><o:p></o:p></span></p>
  </td>
  <td width=125 valign=top style='width:93.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'><?php echo  $res_k; ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=249 colspan=3 valign=top style='width:186.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>Nutrient
  Requirement <o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>(kg/Ha.)<o:p></o:p></span></b></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>N<o:p></o:p></span></b></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>P<o:p></o:p></span></b></p>
  </td>
  <td width=125 valign=top style='width:93.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>K<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=249 colspan=3 valign=top style='width:186.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>Ampalaya</span></span><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'><o:p></o:p></span></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'>60-120<o:p></o:p></span></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'>0-3<o:p></o:p></span></p>
  </td>
  <td width=125 valign=top style='width:93.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'>30-90<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=249 colspan=3 valign=top style='width:186.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=125 colspan=2 valign=top style='width:93.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=125 valign=top style='width:93.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=623 colspan=8 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'>Fertilizer
  Recommendation(bag/ha.)<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width=623 colspan=8 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;background:white'><span class=SpellE><span
  class=spelle><b><span style='font-family:"Segoe UI",sans-serif;color:#232323;
  background:white'>Ampalaya</span></span></b></span></span><span class=spelle><b><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'><o:p></o:p></span></b></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;background:white'><span class=spelle><b><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'><o:p>&nbsp;</o:p></span></b></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;background:white'><span style='font-size:12.0pt;
  font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:#232323;mso-fareast-language:EN-PH'>Basal Application</span><b><span
  style='font-family:"Segoe UI",sans-serif;color:#232323;background:white'><o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;background:white'><span style='font-size:12.0pt;
  font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:#232323;mso-fareast-language:EN-PH'>&nbsp;&nbsp;&nbsp;&nbsp; 10-15 bags
  Organic Fertilizer<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;background:white'><span style='font-size:12.0pt;
  font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:#232323;mso-fareast-language:EN-PH'>&nbsp;&nbsp;&nbsp; 3 bags <span
  class=GramE>Complete(</span>14-14-14)<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;background:white'><span style='font-size:12.0pt;
  font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:#232323;mso-fareast-language:EN-PH'>1</span><sup><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:#232323;mso-fareast-language:EN-PH'>st</span></sup><span
  style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:#232323;mso-fareast-language:EN-PH'>&nbsp;<span
  class=SpellE><span class=GramE>Sidedress</span></span><span class=GramE>(</span>30&nbsp;<span
  class=SpellE>araw</span>&nbsp;<span class=SpellE>pagkabasal</span>)<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;background:white'><span style='font-size:12.0pt;
  font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:#232323;mso-fareast-language:EN-PH'>&nbsp;&nbsp; 1 bag Urea<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;background:white'><span style='font-size:12.0pt;
  font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:#232323;mso-fareast-language:EN-PH'>2</span><sup><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:#232323;mso-fareast-language:EN-PH'>nd</span></sup><span
  style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:#232323;mso-fareast-language:EN-PH'>&nbsp;<span
  class=SpellE><span class=GramE>Sidedress</span></span><span class=GramE>(</span>25&nbsp;<span
  class=SpellE>araw</span>&nbsp;<span class=SpellE>pagka</span>&nbsp;1</span><sup><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:#232323;mso-fareast-language:EN-PH'>st</span></sup><span
  style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:#232323;mso-fareast-language:EN-PH'>&nbsp;<span
  class=SpellE>sidedress</span>)<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;background:white'><span style='font-size:12.0pt;
  font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:#232323;mso-fareast-language:EN-PH'>&nbsp;&nbsp; 1 bag <span
  class=GramE>Urea(</span>46-0-0)<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;background:white'><span style='font-size:12.0pt;
  font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:#232323;mso-fareast-language:EN-PH'>&nbsp;&nbsp; 1 bag&nbsp;<span
  class=SpellE>Muriate</span>&nbsp;of <span class=GramE>potash(</span>0-0-60)<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Segoe UI",sans-serif;
  color:#232323;background:white'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td width=623 colspan=8 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'>Lime Requirement(Bag/ha/)</span></b><span style='font-size:12.0pt;
  font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:#232323;mso-fareast-language:EN-PH'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'>5 calcium carbonate(CaCO3) apply 30 days before planting for 3
  consecutive years<span class=spelle><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td width=156 colspan=2 valign=top style='width:116.8pt;border:none;
  border-left:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'>Note:</span></b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'><o:p></o:p></span></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12'>
  <td width=156 colspan=2 valign=top style='width:116.8pt;border:none;
  border-left:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'>L(Low)<o:p></o:p></span></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border:none;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'>M(Medium)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <o:p></o:p></span></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border:none;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'>H(High)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <o:p></o:p></span></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'>-for N and P</span></b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;mso-yfti-lastrow:yes'>
  <td width=156 colspan=2 valign=top style='width:116.8pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'>D(Deficient<o:p></o:p></span></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'>S(Sufficient)<o:p></o:p></span></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:116.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;background:white'><b><span style='font-size:12.0pt;font-family:"Segoe UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:#232323;mso-fareast-language:
  EN-PH'>-for K<o:p></o:p></span></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=125 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=94 style='border:none'></td>
  <td width=62 style='border:none'></td>
  <td width=62 style='border:none'></td>
  <td width=94 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=125 style='border:none'></td>
 </tr>
 <![endif]>
</table>
</center>
</div>
</body>

       <button class="print-button"><span class="print-icon"></span></button>

      </div>
    </div>
</section>


<?php
include('footer.php');
 ?>
