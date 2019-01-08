<?php
      if (isset($_POST["submit"]))
      {
        require_once("includes/config.php");
        $nameimg = $_POST["nameimg"];
        $alt = $_POST["alt"];
        $description = $_POST["description"];
        $contentUrl = $_POST["contentUrl"];
        $keywords = $_POST["keywords"];
        $height = $_POST["height"];
        $width = $_POST["width"];
        $nameOrganization = $_POST["nameOrganization"];
        $urlOrganization = $_POST["urlOrganization"];
        $namePerson = $_POST["namePerson"];
        $urlPerson = $_POST["urlPerson"];
        $linkSameas1 = $_POST["linkSameas1"];
        $linkSameas2 = $_POST["linkSameas2"];
        $linkSameas3 = $_POST["linkSameas3"];
        $linkSameas4 = $_POST["linkSameas4"];
        $namevi = $_POST["namevi"];
        $descriptionvi = $_POST["descriptionvi"];
        $thumbnailUrl = $_POST["thumbnailUrl"];
        $uploadDate = $_POST["uploadDate"];
        $duration = $_POST["duration"];
        $urlLogo = $_POST["urlLogo"];
        $widthLogo = $_POST["widthLogo"];
        $heightLogo = $_POST["heightLogo"];
        $contentUrlvi = $_POST["contentUrlvi"];
        $embedUrl = $_POST["embedUrl"];
        $interactionCount = $_POST["interactionCount"];
        $qtion = $_POST["qtion"];
        $urlq = $_POST["urlq"];
        $nameAuthor = $_POST["nameAuthor"];
        $aswer = $_POST["aswer"];
        $urla = $_POST["urla"];
        $id1 = $_POST["id1"];
        $name1 = $_POST["name1"];
        $img1 = $_POST["img1"];
        $id2 = $_POST["id2"];
        $name2 = $_POST["name2"];
        $img2 = $_POST["img2"];
        $id3 = $_POST["id3"];
        $name3 = $_POST["name3"];
        $img3 = $_POST["img3"];
        $linkbv = $_POST["linkbv"];
        $linkimg = $_POST["linkimg"];
        $hline = $_POST["hline"];
        $aline = $_POST["aline"];
        $dateCreate = $_POST["dateCreate"];
        $contentLocation = $_POST["contentLocation"];
        $kw1 = $_POST["kw1"];
        $kw2 = $_POST["kw2"];
        $kw3 = $_POST["kw3"];
        $linkwk1 = $_POST["linkwk1"];
        $linkwk2 = $_POST["linkwk2"];
        $linkwk3 = $_POST["linkwk3"];
        $articleSection = $_POST["articleSection"];
        $articleBody = $_POST["articleBody"];

        $insert_sql = "INSERT INTO `schemabest` (`nameimg`, `alt`, `description`, `contentUrl`, `keywords`, `height`, `width`, `nameOrganization`, `urlOrganization`, `namePerson`, `urlPerson`, `linkSameas1`, `linkSameas2`, `linkSameas3`, `linkSameas4`, `namevi`, `descriptionvi`, `thumbnailUrl`, `uploadDate`, `duration`, `urlLogo`, `widthLogo`, `heightLogo`, `contentUrlvi`, `embedUrl`, `interactionCount`, `qtion`, `urlq`, `nameAuthor`, `aswer`, `urla`, `id1`, `name1`, `img1`, `id2`, `name2`, `img2`, `id3`, `name3`, `img3`, `linkbv`, `linkimg`, `hline`, `aline`, `dateCreate`, `contentLocation`, `kw1`, `kw2`, `kw3`, `linkwk1`, `linkwk2`, `linkwk3`, `articleSection`, `articleBody`) VALUES ('".$nameimg."', '".$alt."', '".$description."', '".$contentUrl."', '".$keywords."', '".$height."', '".$width."', '".$nameOrganization."', '".$urlOrganization."', '".$namePerson."', '".$urlPerson."', '".$linkSameas1."', '".$linkSameas2."', '".$linkSameas3."', '".$linkSameas4."', '".$namevi."', '".$descriptionvi."', '".$thumbnailUrl."', '".$uploadDate."', '".$duration."', '".$urlLogo."', '".$widthLogo."', '".$heightLogo."', '".$contentUrlvi."', '".$embedUrl."', '".$interactionCount."', '".$qtion."', '".$urlq."', '".$nameAuthor."', '".$aswer."', '".$urla."', '".$id1."', '".$name1."', '".$img1."', '".$id2."', '".$name2."', '".$img2."', '".$id3."', '".$name3."', '".$img3."', '".$linkbv."', '".$linkimg."', '".$hline."', '".$aline."', '".$dateCreate."', '".$contentLocation."', '".$kw1."', '".$kw2."', '".$kw3."', '".$linkwk1."', '".$linkwk2."', '".$linkwk3."', '".$articleSection."', '".$articleBody."')";

        mysqli_query($db, $insert_sql);
      }
      ?>
<?php 
require_once("includes/config.php");
session_start(); // thiết lập biến session
$sql = "SELECT * FROM schemabest ORDER BY id DESC LIMIT 1";
$result = mysqli_query($db,$sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
?>
<?php 
$x = "&lt;script type=\"application/ld+json\"&gt;{
  \"@context\": \"http://schema.org\",
  \"@type\": \"ImageObject\",
  \"name\": \"".$row["nameimg"]."\",
  \"alternativeHeadline\": \"".$row["alt"]."\",
  \"caption\": \"".$row["description"]."\",
  \"contentUrl\": \"".$row["contentUrl"]."\",
  \"keywords\": \"".$row["keywords"]."\",
  \"height\": ".$row["height"].",
  \"width\": ".$row["width"].",
  \"creator\": {
    \"@type\": \"Person\",
    \"name\": \"".$row["namePerson"]."\",
    \"url\": \"".$row["urlPerson"]."\",
    \"worksFor\": {
      \"@type\": \"Organization\",
      \"name\": \"".$row["nameOrganization"]."\",
      \"url\": \"".$row["urlOrganization"]."\",
	\"sameAs\": [
	\"".$row["linkSameas1"]."\",
	\"".$row["linkSameas2"]."\",
	\"".$row["linkSameas3"]."\",
	\"".$row["linkSameas4"]."\"
			]
		}
	},
  \"producer\": {
  \"@type\": \"Person\",
  \"name\": \"".$row["namePerson"]."\",
  \"url\": \"".$row["urlPerson"]."\"
  },
  \"copyrightHolder\": {
  \"@type\": \"Organization\",
  \"name\": \"".$row["nameOrganization"]."\",
  \"url\": \"".$row["urlOrganization"]."\"
  },
  \"publisher\": {
  \"@type\": \"Person\",
  \"name\": \"".$row["namePerson"]."\",
  \"url\": \"".$row["urlPerson"]."\"
  }
}&lt;/script&gt;";
 $y = "&lt;script type=\"application/ld+json\"&gt;
{
  \"@context\": \"http://schema.org\",
  \"@type\": \"VideoObject\",
  \"name\": \"".$row["namevi"]."\",
  \"description\": \"".$row["descriptionvi"]."\",
  \"thumbnailUrl\": \"".$row["thumbnailUrl"]."\",
  \"uploadDate\": \"".$row["uploadDate"]."\",
  \"duration\": \"".$row["duration"]."\",
  \"publisher\": {
    \"@type\": \"Organization\",
    \"name\": \"".$row["nameOrganization"]."\",
    \"logo\": {
      \"@type\": \"ImageObject\",
      \"url\": \"".$row["urlLogo"]."\",
      \"width\": ".$row["widthLogo"].",
      \"height\": ".$row["heightLogo"]."
    }
  },
  \"contentUrl\": \"".$row["contentUrlvi"]."\",
  \"embedUrl\": \"".$row["embedUrl"]."\",
  \"interactionCount\": \"".$row["interactionCount"]."\"
}&lt;/script&gt;";
 $z = "&lt;script type=\"application/ld+json\"&gt;
{
  \"@context\": \"http://schema.org/\",
  \"@type\": \"Question\",
  \"text\":\"".$row["qtion"]."\",
  \"url\": \"".$row["urlq"]."\",
  \"author\": {
    \"@type\": \"Person\",
    \"name\": \"".$row["nameAuthor"]."\"
  },
  \"AcceptedAnswer\": {
    \"@type\":\"Answer\",
    \"text\":\"".$row["aswer"]."\",
    \"url\": \"".$row["urla"]."\",
\"author\": {
      \"@type\": \"Person\",
      \"name\": \"".$row["namePerson"]."\",
    \"url\": \"".$row["urlPerson"]."\"
    }
  }
}
&lt;/script&gt;";

$t = "&lt;script type=\"application/ld+json\"&gt;
{
  \"@context\": \"http://schema.org\",
  \"@type\": \"BreadcrumbList\",
  \"itemListElement\": [{
    \"@type\": \"ListItem\",
    \"position\": 1,
    \"item\": {
      \"@id\": \"".$row["id1"]."\",
      \"name\": \"".$row["name1"]."\",
      \"image\": \"".$row["img1"]."\"
    }
  },{
    \"@type\": \"ListItem\",
    \"position\": 2,
    \"item\": {
      \"@id\": \"".$row["id2"]."\",
      \"name\": \"".$row["name2"]."\",
      \"image\": \"".$row["img2"]."\"
    }
    },{
    \"@type\": \"ListItem\",
    \"position\": 3,
    \"item\": {
      \"@id\": \"".$row["id3"]."\",
      \"name\": \"".$row["name3"]."\",
      \"image\": \"".$row["img3"]."\"
    }
  }]
}
&lt;/script&gt;";

$r = "&lt;script type=\"application/ld+json\"&gt;
{	\"@context\":\"http://schema.org\",
    \"@type\": \"BlogPosting\",
	\"mainEntityOfPage\": {
 	\"@type\": \"WebPage\",
	\"@id\": \"".$row["linkbv"]."\"
  },
	\"image\": \"".$row["linkimg"]."\",
	\"url\": \"".$row["linkbv"]."\",
	\"headline\": \"".$row["hline"]."\",
	\"alternativeHeadline\": \"".$row["aline"]."\",
	\"dateCreated\": \"".$row["dateCreate"]."\",
	\"datePublished\": \"".$row["dateCreate"]."\",
	\"dateModified\": \"".$row["dateCreate"]."\",
	\"inLanguage\": \"vi-VN\",
	\"isFamilyFriendly\": \"true\",
	\"copyrightYear\": \"2019\",
	\"copyrightHolder\": 
		{ \"@type\": \"Organization\",
          	\"name\": \"".$row["nameOrganization"]."\" },
            \"contentLocation\": {
            		\"@type\": \"Place\",
            		\"name\": \"".$row["contentLocation"]."\"
            		},
            		\"accountablePerson\": {
            			\"@type\": \"Person\",
            			\"name\": \"".$row["namePerson"]."\",
            			\"url\": \"".$row["urlPerson"]."\"
            		},
            		\"author\": {
            			\"@type\": \"Person\",
            			\"name\": \"".$row["namePerson"]."\",
            			\"url\": \"".$row["urlPerson"]."\"
            		},
            		\"creator\": {
            			\"@type\": \"Person\",
            			\"name\": \"".$row["namePerson"]."\",
            			\"url\": \"".$row["urlPerson"]."\"
            		},
            		\"publisher\": {
            			\"@type\": \"Organization\",
            			\"name\": \"".$row["nameOrganization"]."\",
            			\"url\": \"".$row["urlOrganization"]."\",
            			\"logo\": {
            				\"@type\": \"ImageObject\",
            				\"url\": \"".$row["urlLogo"]."\"
            			}
            		},
            		\"keywords\": [
            			\"".$row["kw1"]."\",
                  \"".$row["kw2"]."\",
                  \"".$row["kw3"]."\"
            		],
            		\"genre\":[
						      \"".$row["linkwk1"]."\",
                  \"".$row["linkwk2"]."\",
                  \"".$row["linkwk3"]."\"
                  ],
            		\"articleSection\": \"".$row["articleSection"]."\",
            		\"articleBody\": 
                \"".$row["articleBody"]."\"
            	}
            &lt;/script&gt;";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<a href="index.html">Trang chủ</a>
 <div style = "width: 800px; margin: 0 auto; text-align: center;">
	<h3>Schema Img</h3>
	<textarea rows="30" cols="120"><?php echo $x; ?></textarea>
</div>
<div style = "width: 800px; margin: 0 auto; text-align: center;">
	<h3>Schema Video</h3>
	<textarea rows="30" cols="120"><?php echo $y; ?></textarea>
</div>
<div style = "width: 800px; margin: 0 auto; text-align: center;">
	<h3>Schema Question</h3>
	<textarea rows="30" cols="120"><?php echo $z; ?></textarea>
</div>
<div style = "width: 800px; margin: 0 auto; text-align: center;">
	<h3>Schema BreadcrumbList</h3>
	<textarea rows="30" cols="120"><?php echo $t; ?></textarea>
</div>
<div style = "width: 800px; margin: 0 auto; text-align: center;">
	<h3>Schema BlogPosting</h3>
	<textarea rows="30" cols="120"><?php echo $r; ?></textarea>
</div>
 </body>
 </html>