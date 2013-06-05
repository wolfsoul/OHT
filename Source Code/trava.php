<?php 
		extract( $_GET ) ;
		
		$a = mysql_connect( "localhost" , "root" , "" ) ;
		
		$txt = " SELECT * FROM troubleshooting.".$part." where start =".$node ;
		
		$query = mysql_query( $txt ) ; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" href="favicon.ico" />
	
    <link href="green.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'03233e23-022a-49c9-9c59-89b7b643985e'});</script>
    
    <title>Hardware TroubleShooter</title>
    
    </head>

<body>

<div id="header">
	<div id="logo">
		<h1><a href="">HdWare TroubleShooter<sup></sup></a></h1>
		<h2>Designed by <b>JNJ</b> Productions</h2>
	</div>
	
	<div id="menu">
		<ul>
			<li><a href="start.html">home</a></li>
			<li><a href="troubleshoot.php">troubleshoot</a></li>
			<li><a href="faq.html">faq</a></li>
            <li><a href="pcparts.html">pc parts</a></li>
			<li><a href="links.html">links</a></li>
			<li><a href="contact.html">contact</a></li>   
		</ul>                        	            	                    
	</div>
</div>

<div id="page">
	<div id="content">
		<div class="post">
			<h1 class="title">...Troubleshooting has begun</h1>    
            
            <?php		
			while ( $data = mysql_fetch_array($query)  )
			{
				if  ( $data['stop'] != 0)
				{
					if (  !isset($head_created)  ) 
					{
						echo "<form action=\"trava.php\" method=\"get\"> " ;
						$head_created = true ;
					}
					
					echo "<input type=\"radio\" style=\"font-size:200%\" name=\"node\" value=\"".$data['stop']. "\" />" ;
					echo $data['text' ] ;
					echo "<br />" ;
				}
				else
				{
					echo $data['text'] ;
				}
			}
			
			if (  isset($head_created)  ) 
			{
				echo "<input type=\"hidden\" name=\"part\" value=\" ".$part."\" />" ;
				echo "<input type=\"submit\" style=\"font-size:120%\" value=\"Next\" />";
				echo "</form>" ;
				echo "<br />" ;
			}			
		
		mysql_close( $a ) ;
?>
                   			
		</div>
 					        
		<div class="post">
			<img name="PC_Parts_Numbers" src="PC_Parts_Numbers.png" width="680" height="431" border="0" usemap="#m_PC_Parts_Numbers" alt=""><map name="m_PC_Parts_Numbers">
<area shape="poly" coords="618,271,626,278,630,285,639,293,650,297,663,297,669,287,664,270,650,260,649,246,658,239,663,231,662,218,655,211,647,207,636,209,626,218,626,228,629,239,637,245,647,246,648,259,641,256,630,256,622,261,618,266,618,271" href="trava.php?part=mouse&node=1" alt="" >
<area shape="poly" coords="366,211,366,263,381,278,438,266,439,274,451,283,467,287,486,288,506,284,519,280,532,271,540,261,541,251,535,244,527,241,600,219,607,214,608,40,602,37,603,29,596,22,590,17,578,16,571,20,566,26,564,31,373,63,365,74,364,157,388,171,390,191,398,194,398,204,366,211" href="trava.php?part=monitorgpu&node=1" alt="" >
<area shape="poly" coords="585,266,641,308,641,318,444,381,443,391,434,399,419,404,405,393,405,376,410,367,421,364,391,337,392,320,585,266" href="trava.php?part=keyboard&node=1" alt="" >
<area shape="poly" coords="368,287,292,304,244,259,237,263,225,263,215,256,212,249,213,238,218,230,226,223,237,224,243,227,250,237,250,251,318,238,368,277,368,287" href="trava.php?part=HDD&node=1" alt="" >
<area shape="poly" coords="228,144,227,168,283,219,308,214,309,219,397,203,396,195,389,194,388,173,337,140,343,135,348,127,348,116,344,109,336,103,324,102,316,106,310,115,310,127,313,134,231,145,231,145,228,144" href="trava.php?part=CDDVD&node=1" alt="" >
<area shape="poly" coords="39,45,17,46,16,110,52,149,68,148,70,153,72,157,70,159,73,162,92,161,91,154,84,150,83,147,133,140,132,72,93,41,67,43,73,35,73,23,67,15,58,10,47,9,40,14,34,23,34,34,39,45" href="trava.php?part=PSU&node=1" alt="PSU" >
</map>    <br />
            
<span class="st_twitter_large" displayText="Tweet"></span><span class="st_facebook_large" displayText="Facebook"></span><span class="st_ybuzz_large" displayText="Yahoo! Buzz"></span><span class="st_gbuzz_large" displayText="Google Buzz"></span><span class="st_email_large" displayText="Email"></span><span class="st_sharethis_large" displayText="ShareThis"></span>
            
		</div>
	</div>
    </div>
    
<div id="right_sidebar">
		<ul>
			                           
		</ul>
	</div>
	<!-- end right_sidebar -->
	
	<div style="clear: both;">&nbsp;</div>

<div id="footer">
	<p id="legal">(c) 2010 HdWare TroubleShooter. Design by <b>J.N.J</b> Productions.</p>
</div>

</body>
</html>
		
