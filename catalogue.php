<?php
$catalogue = array();
$catalogue[] = "Design Patterns";
$catalogue[] = "Forrest Gump";
$catalogue[] = "Beethovan";
$catalogue[] = "Clean Code";

$pageTitle = "Full Catalogue";
$section = null;

if (isset($_GET["cat"])) {
  if ($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
  } else if ($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  } else if ($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}
include("inc/header.php"); ?>

<div class="section catalogue page">

  <div class="wrapper">
    <h1><?php echo $pageTitle; ?></h1>
    <ul>
      <?php foreach($catalogue as $item) {
        echo "<li>" . $item . "</li>";
      }
      ?>
    </ul>
  </div>

</div>

<?php include("inc/footer.php"); ?>
