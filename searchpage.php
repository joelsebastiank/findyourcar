<?php


	


	$carname=$_POST['carname'];//this values comes from html file after submitting
	$type=$_POST['type'];
	$minprice=$_POST['minprice']; 
	$fuel=$_POST['fuel'];//this values comes from html file after submitting
	$maxprice=$_POST['maxprice'];
	$mileage=$_POST['mileage']; 
	$company=$_POST['company'];
	$i=0;
	$j=0;
	$a=0;
	$count=0;
	$names[50]=0;
	$company2[50]=0;
	$mileage2[50]=0;
	$con= mysql_connect('mysql11.000webhost.com','a5872202_JOEL','wonderla');
	mysql_select_db('a5872202_CAR',$con);
	$name2[0]="SWIFT"; $name2[1]="i20"; $name2[2]="SANTRO"; $name2[3]="K10";  $name2[4]="BEAT"; $name2[5]="RITZ"; $name2[6]="TAVERA"; $name2[7]="ESTILO"; 
	$name2[8]="INNOVA"; $name2[9]="ALTO"; $name2[10]="DUSTER"; $name2[11]="ECOSPORT";  $name2[12]="VERNA"; $name2[13]="XUV 500"; $name2[14]="CRETA"; $name2[15]="KWID"; 
	$name2[16]="WAGNOR"; $name2[17]="i10";  $name2[18]="BALENO"; $name2[19]="CIAZ"; $name2[20]="XYLO"; $name2[21]="AMAZE";
	
	$mileage2[0]="15"; $mileage2[1]="15"; $mileage2[2]="18"; $mileage2[3]="22";  $mileage2[4]="18"; $mileage2[5]="20"; $mileage2[6]="12"; $mileage2[7]="18"; 
	$mileage2[8]="10"; $mileage2[9]="22"; $mileage2[10]="16"; $mileage2[11]="18";  $mileage2[12]="15"; $mileage2[13]="10"; $mileage2[14]="20"; $mileage2[15]="22";
	$mileage2[16]="20"; $mileage2[17]="18";  $mileage2[18]="18"; $mileage2[19]="20"; $mileage2[20]="15"; $mileage2[21]="16";
	
	$company2[0]="MARUTHI "; $company2[1]="HYUNDAI"; $company2[2]="HYUNDAI"; $company2[3]="MARUTHI";  $company2[4]="CHERVOLET"; $company2[5]="MARUTHI"; $company2[6]="CHERVOLET"; $company2[7]="MARUTHI"; 
	$company2[8]="TOYOTA"; $company2[9]="MARUTHI"; $company2[10]="RENAULT"; $company2[11]="FORD";  $company2[12]="HYUNDAI"; $company2[13]="MAHENDRA"; $company2[14]="HYUNDAI"; $company2[15]="RENAULT";
	$company2[16]="MARUTHI"; $company2[17]="HYUNDAI";  $company2[18]="MARUTHI"; $company2[19]="MARUTHI"; $company2[20]="MAHENDRA"; $company2[21]="HONDA";
	
	$price2[0]="7,00,000 "; $price2[1]="7,30,000"; $price2[2]="5,20,000"; $price2[3]="3,45,000";  $price2[4]="5,00,000"; $price2[5]="5,20,000"; $price2[6]="9,00,000"; $price2[7]="4,20,000"; 
	$price2[8]="12,00,000"; $price2[9]="2,45,000"; $price2[10]="8,00,000"; $price2[11]="8,10,000";  $price2[12]="10,00,000"; $price2[13]="15,00,000"; $price2[14]="7,25,000"; $price2[15]="4,00,000";
	$price2[16]="5,00,000"; $price2[17]="5,45,000";  $price2[18]="6,00,000"; $price2[19]="12,00,000"; $price2[20]="13,20,000"; $price2[21]="10,00,000";
	
	$showerma= mysql_query("SELECT `COMPANY`, `NAME`, `TYPE`, `MILEAGE`, `SEATS`, `PRICE`, `FUEL` FROM  `CARDATA` WHERE FUEL ='$fuel' AND PRICE <= '$maxprice'  AND TYPE='$type' AND MILEAGE >= '$mileage' ");
	$nelo = mysql_fetch_array($showerma);
	
	do
	{
		$coni=count($nelo);
		$company2[$a] = $nelo['COMPANY'];
		$names[$a] = $nelo['NAME'];
		$type1[$a] = $nelo['TYPE'];
		$mileage2[$a] = $nelo['MILEAGE']; 
		$seating1 = $nelo['SEATS'];
		$price2[$a] = $nelo['PRICE'];
		$fuel1 = $nelo['FUEL'];
		
		$a++;
		$count++;
		
		
	}while($nelo = mysql_fetch_array($showerma));
	echo "$count ";
	for($j=0,$i=0;$j <$count ;$j++,$i++)
	{
		$name2[$i]=$names[$j];
		$mileage2[$i]=$mileage2[$j];
		$company2[$i]=$company2[$j];
		$type[$i]= $type1[$j];
	}
	
	
	
	echo"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title>RealOne | Search Results</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link href='css/layout.css' rel='stylesheet' type='text/css' />
<link href='css/forms.css' rel='stylesheet' type='text/css' />
<script src='js/jquery.js' type='text/javascript'></script>
<script type='text/javascript'>
$(document).ready(function () {
    $('#searchdiv').hide();
    $('a').click(function () {
        $('#searchdiv').fadeIn('slow');
    });
    $('a#close').click(function () {
        $('#searchdiv').fadeOut('slow');
    })
});
</script>
</head>
<body>
<div id='wrap'>
  <div id='topbar'>
    <ul>
      <li><a href='index.html'>Home</a></li>
      <li><a href='#'>About Us</a></li>
      <li><a href='#'>Contact us</a></li>
      <li><a href='singleitem.html'>Single Template</a></li>
      <li class='current'><a href='searchresult.html'>Search Results Template</a></li>
    </ul>
  </div>
  <div id='header'>
    <div id='sitename'>
      <h1 id='logo'>RealOne</h1>
    </div>
    <div id='shoutout'><img src='images/joinnow_shoutout.jpg' alt='' width='168' height='126' /></div>
    <div id='useractions'>
      <div id='headings'>
        <h2><img src='images/create_indi_usr.jpg' alt='' width='25' height='22' /> <a href='#'>Create Individual Account</a> </h2>
        <h2><img src='images/create_agent_icon.jpg' alt='' width='27' height='22' /> <a href='#'>Create Agent Accoun</a>t</h2>
      </div>
      <div id='login'>
        <p><strong>Already registered ?</strong> Login here to access your account</p>
        <div id='loginform'>
          <form action='#'>
            <div class='formblock'>
              <label>Username</label>
              <input name='user' type='text' class='textfields' />
            </div>
            <div class='formblock'>
              <label>Password</label>
              <input name='user' type='text' class='textfields'/>
            </div>
            <div class='formblock'>
              <input type='image' src='images/loginbutton.jpg' name='button' id='button' value='Submit' />
            </div>
            <div class='clear'>&nbsp;</div>
            <p>
              <input name='' type='checkbox' value='' />
              Remember me on this computer | Forgot password ? </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id='content'>
    <div id='topcategorieslink' class='clear'>
      <h2>Filter Results</h2>
      <ul>
        <li><a href='#'>By Price</a> </li>
        <li><a href='#'>By Date </a> </li>
        <li><a href='#'>By Relevance</a> </li>
        <li><a class='highlight' href='#'>Create Alerts</a> </li>
        <li><a class='highlight' href='#' id='click'>Search Again</a> </li>
      </ul>
    </div>
    <div class='clear'>&nbsp;</div>
    <div id='main'>
      <div id='searchdiv'>
        <div id='home_main'>
          <div id='search'>
            <div class='tab'>
              <h2>Search Property To Buy / Rent</h2>
            </div>
            <div class='container'>
              <form id='form1' action='#'>
                <table class='search_form' style='width:100%; border:none;'>
                  <tr>
                    <td width='10%' class='label'>Address</td>
                    <td colspan='3'><label>
                        <input type='text' name='textfield' id='textfield' class='text longfield' />
                      </label></td>
                  </tr>
                  <tr>
                    <td class='label'>&nbsp;</td>
                    <td colspan='3'>Example : Kazhakuttom, PlaceName, Kerala, 695582 </td>
                  </tr>
                  <tr>
                    <td class='label'>Type</td>
                    <td width='34%'><label>
                        <select name='select' id='select' class='select_field'>
                          <option>Flat</option>
                          <option>Apartment</option>
                          <option>House</option>
                          <option>Villa</option>
                          <option>Land</option>
                          <option>Estate</option>
                        </select>
                      </label></td>
                    <td width='14%' class='label'>Minimum Price Rs.</td>
                    <td width='42%'><input type='text' name='textfield4' id='textfield4' class='text' /></td>
                  </tr>
                  <tr>
                    <td class='label'>To</td>
                    <td><label>
                        <select name='select2' id='select2' class='select_field'>
                          <option selected='selected'>Buy</option>
                          <option>Rent</option>
                          <option>Search Both</option>
                        </select>
                      </label></td>
                    <td class='label'>Maximum Price Rs.</td>
                    <td><input type='text' name='textfield2' id='textfield2' class='text' /></td>
                  </tr>
                  <tr>
                    <td class='label'>Bed Rooms</td>
                    <td><label>
                        <input type='text' name='textfield5' id='textfield5' class='text smalltextarea' />
                      </label></td>
                    <td class='label'>Bathrooms</td>
                    <td><input type='text' name='textfield3' id='textfield3' class='text' /></td>
                  </tr>
                  <tr>
                    <td class='label'>Lot Size</td>
                    <td><label></label>
                      <input type='text' name='textfield7' id='textfield7' class='text' /></td>
                    <td class='label'>UOM</td>
                    <td><input name='' type='radio' value='' />
                      </label>
                      Cents /
                      <input name='' type='radio' value='' />
                      </label>
                      Acres /
                      <input name='' type='radio' value='' />
                      Sq. Ft.</td>
                  </tr>
                  <tr>
                    <td class='label'>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan='2' class='label'><label> <a href='#' id='close' onclick='javascript:alert('hai');'>
                        <input type='image' src='images/searchbtn.gif' alt='search' name='button2' id='button2' value='Submit' />
                        </a></label></td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
        <div class='clear'>&nbsp;</div>
      </div>
      <h1>1- 15 of 124 Listings Found</h1>
      <ul class='listing'>
        <li>
            <div class='listinfo'> <img src='images/$type1[0]/$name2[0].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[0]</h3>
            <p> $company2[0]</p>
            <span class='price'>Rs  $price2[0] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='singleitem.html'>View Details</a></span> <span class='listbuttons'> <a href='singleitem.html'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[1]/$name2[1].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[1]</h3>
            <p> $company2[1]</p>
            <span class='price'>Rs  $price2[1] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[2]/$name2[2].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[2]</h3>
            <p> $company2[2]</p>
            <span class='price'>Rs $price2[2] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[3]/$name2[3].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[3]</h3>
            <p> $company2[3]</p>
            <span class='price'>Rs $price2[3] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[4]/$name2[4].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[4]</h3>
            <p> $company2[4]</p>
            <span class='price'>Rs $price2[4] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[5]/$name2[5].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[5]</h3>
            <p> $company2[5]</p>
            <span class='price'>Rs $price2[5] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[6]/$name2[6].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[6]</h3>
            <p> $company2[6]</p>
            <span class='price'>Rs $price2[6] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[7]/$name2[7].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[7]</h3>
            <p> $company2[7]</p>
            <span class='price'>Rs $price2[7] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[8]/$name2[8].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[8]</h3>
            <p> $company2[8]</p>
            <span class='price'>Rs $price2[8] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[9]/$name2[9].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[9]</h3>
            <p> $company2[9]</p>
            <span class='price'>Rs $price2[9] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[10]/$name2[10].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[10]</h3>
            <p> $company2[10]</p>
            <span class='price'>Rs $price2[10] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[11]/$name2[11].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[11]</h3>
            <p> $company2[11]</p>
            <span class='price'>Rs $price2[11] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[12]/$name2[12].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[12]</h3>
            <p> $company2[12]</p>
            <span class='price'>Rs $price2[12] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[13]/$name2[13].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[13]</h3>
            <p> $company2[13]</p>
            <span class='price'>Rs $price2[13] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
        <li>
          <div class='listinfo'> <img src='images/$type1[14]/$name2[14].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[14]</h3>
            <p> $company2[14]</p>
            <span class='price'>Rs $price2[14] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
		
		 <li>
          <div class='listinfo'> <img src='images/$type1[15]/$name2[15].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[15]</h3>
            <p> $company2[15]</p>
            <span class='price'>Rs $price2[15] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='singleitem.html'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
		 <li>
          <div class='listinfo'> <img src='images/$type1[16]/$name2[16].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[16]</h3>
            <p> $company2[16]</p>
            <span class='price'>Rs $price2[16] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
		 <li>
          <div class='listinfo'> <img src='images/$type1[17]/$name2[17].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[17]</h3>
            <p> $company2[17]</p>
            <span class='price'>Rs $price2[17] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
		 <li>
          <div class='listinfo'> <img src='images/$type1[18]/$name2[18].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[18]</h3>
            <p> $company2[18]</p>
            <span class='price'>Rs $price2[18] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
		 <li>
          <div class='listinfo'> <img src='images/$type1[19]/$name2[19].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[19]</h3>
            <p> $company2[19]</p>
            <span class='price'>Rs $price2[19] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
		 <li>
          <div class='listinfo'> <img src='images/$type1[20]/$name2[20].jpg' alt='' class='listingimage' alt='' width='80' height='80' />
            <h3>$name2[20]</h3>
            <p> $company2[20]</p>
            <span class='price'>Rs $price2[20] </span> <span class='media'> <img src='images/icon_img.jpg' alt='' width='19' height='15' /> 12 Images <img src='images/videos_icon.jpg' alt='' width='21' height='18' /></span> 1 Video</div>
          <div class='listingbtns'> <span class='listbuttons'> <a href='#'>View Details</a></span> <span class='listbuttons'> <a href='#'>Add To Favorites</a></span> <span class='listbuttons'> <a href='#'>Contact Seller</a></span></div>
          <div class='clear'>&nbsp;</div>
        </li>
      </ul>
      <div id='paginations'>
        <ul>
          <li><a href='#'>&laquo;</a></li>
          <li class='current'><a href='#'>1</a></li>
          <li><a href='#'>2</a></li>
          <li><a href='#'>3</a></li>
          <li><a href='#'>4</a></li>
          <li><a href='#'>5</a></li>
          <li><a href='#'>6</a></li>
          <li><a href='#'>7</a></li>
          <li><a href='#'>8</a></li>
          <li><a href='#'>0</a></li>
          <li><a href='#'>10</a></li>
          <li><a href='#'>&raquo;</a></li>
        </ul>
        <div class='clear'>&nbsp;</div>
      </div>
    </div>
    <div id='home_sidebar'>
      <div class='block smsalert'>
        <p>Create a SMS Alert Filter and we will send you SMS alerts whenever a new lsting match your criteria. What are you waiting for ? It is <strong>absolutely FREE</strong>! Start saving time now!</p>
        <p><a href='#'><img src='images/smsbutton.gif' alt='' /></a></p>
      </div>
      <div class='hot'>
        <h2 class='sidebar_head'><span class='h2link'><a href='#'>View More</a></span> Hot Properties </h2>
        <ul>
          <li><span class='imageholder'> <img src='images/imageplaceholder.jpg' alt='' width='66' height='66' /> </span>
            <h3><a href='#'>5 Room Flat at PlaceName</a></h3>
            <p class='description'> Lorem Ipsum Dolor Sit Amet <span class='price'>Rs. 500,000.00</span> </p>
            <div class='clear'>&nbsp;</div>
          </li>
          <li><span class='imageholder'> <img src='images/imageplaceholder.jpg' alt='' width='66' height='66' /> </span>
            <h3><a href='#'>5 Room Flat at PlaceName</a></h3>
            <p class='description'> Lorem Ipsum Dolor Sit Amet <span class='price'>Rs. 500,000.00</span> </p>
            <div class='clear'>&nbsp;</div>
          </li>
          <li><span class='imageholder'> <img src='images/imageplaceholder.jpg' alt='' width='66' height='66' /> </span>
            <h3><a href='#'>5 Room Flat at PlaceName</a></h3>
            <p class='description'> Lorem Ipsum Dolor Sit Amet <span class='price'>Rs. 500,000.00</span> </p>
            <div class='clear'>&nbsp;</div>
          </li>
        </ul>
      </div>
    </div>
    <div id='sidebar'>
      <div class='block advert'> <img src='images/advertisehere.jpg' alt='' /> </div>
      <div class='menulist block'>
        <h2 class='sidebar_head'>Quick Links</h2>
        <ul class='normalmenu'>
          <li><a href='#'>Pro Agent Account</a></li>
          <li><a href='#'>Find Agents</a></li>
          <li><a href='#'>Banking &amp; Finance Help</a></li>
          <li><a href='#'>Help &amp; Support</a></li>
          <li><a href='#'>SMS Alerts</a></li>
          <li><a href='#'>Email Alerts</a></li>
          <li><a href='#'>Advertising in RealOne</a></li>
          <li><a href='#'>Privacy Policy</a></li>
          <li><a href='#'>Contact Us</a></li>
        </ul>
        <div class='clear'>&nbsp;</div>
      </div>
      <div class='block'> <img src='images/dreamcar.jpg' alt='' /> </div>
      <div class='block'><img src='images/dreamcar.jpg' alt='' /></div>
      <div class='block'><img src='images/dreamcar.jpg' alt='' /></div>
    </div>
    <div class='clear'>&nbsp;</div>
  </div>
  <div id='footer'>
    <div id='upperfooter'> <a href='#'>Home</a> | <a href='#'>Search</a> | <a href='#'>Register</a> | <a href='#'>Pro Agent Account</a> | <a href='#'>About Us</a> | <a href='#'>Contact Us</a> |<a href='#'> Privacy Policy</a> <a href='#'>Terms Of Use</a> | <a href='#'>Advertise With Us</a> </div>
    <div id='lowerfooter'> <span class='backtotop'> <a href='#'>Back To Top</a> </span><a href='http://findyourcar.net16.net'>Findyourcar</a> by Team F </div>
  </div>
</div>
</body>
</html> ";


	
	
	
	
	
	
	mysql_close($con);

?>
