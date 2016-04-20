<?php
//config.php - will allow us to swap html pieces dynamically
//echo basename($_SERVER['PHP_SELF']);
//die;

$nav1 = array();
$nav1['index.php'] = "Home";
$nav1['about.php'] = "About Me";
$nav1['bookshelf.php'] = "Bookshelf";
$nav1['news.php'] = "News";
$nav1['contact.php'] = "Contact";

//--- end config area

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
  case "index.php":
  $myTitle = "Celeste Deveney Contemporary Romance";
  $myPageID = "Welcome!";
  $myPic = "images/cdheadshot2.jpg";
  break;

  case "about.php":
  $myTitle = "Celeste Deveney Biography";
  $myPageID = "About&nbsp;Celeste";
  $myPic = "images/cdheadshot2.jpg";
  break;
  
  case "bookshelf.php":
  $myTitle = "Celeste Deveney Books";
  $myPageID = "Books and Works in Progress";
  break;
 
  case "news.php":
  $myTitle = "Celeste Deveney News";
  $myPageID = "News";
  break;

  case "contact.php":
  $myTitle = "Contact Celeste Deveney";
  $myPageID = "Contact Me";
  break;

  
  default:
  $myTitle = THIS_PAGE; #unique
  $myPageID = "Celeste Deveney";
  $myPic = "images/cdheadshot2.jpg";
}
// echo $myTitle;



/*
makeLinks function will create our dynamic nav when called.

Call like this:

echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/

function makeLinks($linkArray)
{
    $myReturn = 
    '
    <nav id="cssmenu">
    	<ul>
    ';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//current page - add class reference
	    	$myReturn .= '<li class="active"><a href="' . $url . '"><span>' . $text . '</span></a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '"><span>' . $text . '</span></a></li>'  . PHP_EOL;
    	}    
    }
    
    $myReturn .= 
    '
    	</ul>
    </nav>
    ';
        
    return $myReturn;    
}

/*
#uncomment to test:
echo '$myTitle is: ' . $myTitle . '<br />';
echo '$myPageID is: ' . $myPageID . '<br />';
echo 'The dynamic nav looks like the following:<br />';
echo makeLinks($nav1);
die;
*/



?>
