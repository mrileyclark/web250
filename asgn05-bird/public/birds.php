<?php
require_once('../private/initialize.php');
$page_title = 'Sightings';
?>

<?php
/*
 * birds.php -- STARTER SCAFFOLD
 *
 * Read the whole file before you write anything. Note that the page logic
 * (loading and preparing data) happens up here, ABOVE the header include,
 * and the markup happens below it. Keeping those separate is why you can
 * print a clean error message instead of a half-rendered page.
 *
 * Your model is public/bicycles.php from chapter 7 video 07.
 */

/*
 * TODO 1 -- The delimiter
 *
 * Open private/wnc-birds.csv. The fields are not separated by commas.
 *
 * ParseCSV ships with a comma as its default and you must not edit that
 * file. Instead, set the delimiter from out here, before you parse, using
 * the static property. One line.
 *
 * WHEN YOU SKIP THIS STEP: the page still loads and the table still has one
 * row per bird, but every cell is empty. That is the symptom to remember.
 * The whole line lands in a single field, so the key your constructor looks
 * for never exists and every property falls back to its default.
 *
 * why comment required: why can you set this from outside the class at all,
 * and why is that better than editing parsecsv.class.php? 
 * 
 * $delimiter is public static, which allows another file to access and change
 * the class without creating a ParseCSV object.
 * 
 * ParseCSV has a comma as a default delimiter. Setting it here allows bird.php to use a any desired 
 * delimiter for this file without changing the ParseCSV. This way ParseCSV class isn't modified every time
 * a CSV file calls for a different delimiter to be used.
 *  
 */
ParseCSV::$delimiter = '|';

/*
 * TODO 2 -- Parse the file
 *
 * Create a ParseCSV object for PRIVATE_PATH . '/wnc-birds.csv' and call
 * parse(). Build the path from the constant, not a relative path like
 * '../private/wnc-birds.csv'.
 */
$parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
$bird_array = $parser->parse();

// echo '<pre>';
// print_r($bird_array);
// echo '</pre>';

/*
 * TODO 3 -- Handle a missing or unreadable file
 *
 * parse() returns false when there was no readable file. If you hand false
 * to a foreach, PHP warns and you get a blank page with a warning on it.
 *
 * Set a flag here (something like $data_error) and use it further down to
 * print a readable message instead of the table. The page must still render
 * its header, nav, and footer. Test it by renaming the CSV, loading the
 * page, and then renaming it back.
 */
$data_error = false;

if ($bird_array === false) {
  $data_error = true;
}

/*
 * TODO 4 -- Build the objects
 *
 * Loop over the parsed rows and create one Bird per row, collecting them in
 * an array. In bicycles.php this happens inside the table markup; do it up
 * here instead so the markup below stays readable.
 */
$birds = [];

if (!$data_error) {
  foreach ($bird_array as $args) {
    $birds[] = new Bird($args);
  }
}

// echo '<pre>';
// print_r($birds);
// echo '</pre>';
/*
 * OPTIONAL -- "go further" options 1 and 2 (sort and filter)
 *
 * If you are doing those, this is where the $_GET handling goes. Validate
 * anything that arrives in the query string against a list of values you
 * control BEFORE you use it. Explain in a comment why you cannot trust $_GET
 * directly.
 */
$allowed_sorts = [
  'common_name',
  'habitat',
  'food',
  'behavior'
];

$sort = 'common_name';

if (isset($_GET['sort'])) {
  if (in_array($_GET['sort'], $allowed_sorts)) {
    //$_GET can be changed by the user, only allow values from approved list.
    $sort = $_GET['sort'];
  }
}

function sort_birds($a, $b)
{
  //sort links when clicked, sort the birds by the column clicked.
  global $sort;
  return strnatcmp($a->$sort, $b->$sort);
}

if (!$data_error) {
  usort($birds, 'sort_birds');
}

?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>
<p><strong>Bird Summary</strong></p>


<?php
/* 
*TODO 5 -- if you set an error flag in TODO 3, print the message here
*and skip the table. 
*/
if ($data_error) {
  echo "<p>Unable to load the bird data.</p>";
} else {
  //do more toString method in Bird class to display more information about the bird.
  echo "<p>" . h($birds[0]) . "</p>";

  /*
 * TODO 6 -- The record count
 *
 * Print a line reporting how many records were in the file, using the
 * row_count() method. If you added the static counter to Bird, print that
 * too. Notice whether the two numbers agree.
 */
  echo "<p>Showing " . h($parser->row_count()) . " records in the data file. "
    . h(Bird::$count) . " Bird objects were created for this page.</p>";
?>

  <?php
  /*
 * TODO 7 -- The table
 *
 * Build it with <thead> and <tbody>, a <caption>, and scope="col" on each
 * header cell. Use border="1" so it is readable without CSS. The page has to
 * validate at validator.w3.org, so no stray tags.
 *
 * A column for each thing worth showing. The measurements should appear in
 * both units, the way bicycles.php shows kg and lbs:
 *
 *   Bird (common name, and the scientific name in <em>)
 *   Habitat, Food, Nest, Behavior
 *   Wingspan (cm / in)
 *   Weight (g / oz)
 *   Size class
 *   Conservation
 *   Backyard tips
 *
 * TODO 8 -- The rows
 *
 * foreach over your array of Bird objects and emit one <tr> per bird.
 *
 * EVERY value goes through h(). No exceptions. The backyard_tips column
 * contains apostrophes and dashes typed by a human, which is exactly the
 * kind of content that breaks a page when it is not escaped.
 *
 * Call your methods, not the raw properties, for anything measured or coded:
 * $bird->wingspan_cm() rather than reaching for the property.
 */
  ?>

  <table style="border: 1px solid;">
    <caption>Birds of western North Carolina, sorted by name.</caption>
    <thead style="border: 1px solid;">
      <tr>
        <th scope="col" style="border: 1px solid;"><a href="birds.php?sort=common_name">Bird</a></th>
        <th scope="col" style="border: 1px solid;"><a href="birds.php?sort=habitat">Habitat</a></th>
        <th scope="col" style="border: 1px solid;"><a href="birds.php?sort=food">Food</a></th>
        <th scope="col" style="border: 1px solid;">Nest</th>
        <th scope="col" style="border: 1px solid;"><a href="birds.php?sort=behavior">Behavior</a></th>
        <th scope="col" style="border: 1px solid;">Wingspan</th>
        <th scope="col" style="border: 1px solid;">Weight</th>
        <th scope="col" style="border: 1px solid;">Size</th>
        <th scope="col" style="border: 1px solid;">Conservation</th>
        <th scope="col" style="border: 1px solid;">Backyard tips</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($birds as $bird) { ?>
        <tr>
          <td style="border: 1px solid;"><?php echo h($bird->common_name); ?><br>
            <em><?php echo h($bird->scientific_name); ?></em>
          </td>
          <td style="border: 1px solid;"><?php echo h($bird->habitat); ?></td>
          <td style="border: 1px solid;"><?php echo h($bird->food); ?></td>
          <td style="border: 1px solid;"><?php echo h($bird->nest_placement); ?></td>
          <td style="border: 1px solid;"><?php echo h($bird->behavior); ?></td>
          <td style="border: 1px solid;"><?php echo h($bird->wingspan_cm()) . ' / ' . h($bird->wingspan_in()); ?></td>
          <td style="border: 1px solid;"><?php echo h($bird->weight_g()) . ' / ' . h($bird->weight_oz()); ?></td>
          <td style="border: 1px solid;"><?php echo h($bird->size_class()); ?></td>
          <td style="border: 1px solid;"><?php echo h($bird->conservation()); ?></td>
          <td style="border: 1px solid;"><?php echo h($bird->backyard_tips); ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

<?php
}
?>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
