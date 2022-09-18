<?php
/*
*     Project: New Subsite Function
*     Author: Brandon Moeller
*     Inspiration / Original Author: Ryan Capehart
*     Date: Sept. 18, 2022
*
*     Usage: php make-subsite.php [subsite/name]
*
*     This function will create all the necessary files for a new subsite
*     using the files found in /_subsite-template/. 
*
*     These files are not for the deployment on production server(s):
*
*     make-subsite.php
*     /_subsite-template/*
*
*     Additional files can be added to the includes in the /_subsite-template/includes/
*     folder and then to the createSubsiteIncludes function. 
*
*     Additional PLACEHOLDERs can be put in the files if multiple things need to be changed. 
*     For example: PLACEHOLDER_ONE could be used in this way: 
*     str_replace("PLACEHOLDER_ONE", "Replacement string", "Replaced in this string.")
*
*/

// Starts the process to create from the CLI with given input
createSubsiteMain($argc, $argv);

/* 
*     Main Subsite Function
*
*     Outputs either help and usage text or runs the createSubsite function with the given 
*     subsite name.
*
*/
function createSubsiteMain($argc, $argv)
{
  if (isset($argc)) {
    if ((isset($argv[1]) && strtolower($argv[1]) === 'help') || !isset($argv[1])) {
      print "\nBrandon Moeller PHP Template Subsite Creation \n";
      print "Usage: php make-subsite.php [subsite/name] \n";
      print "\nSubsite template location: /_subsite-template \n";
    } else {
      createSubsite($argv[1]);
    }
  } else {
    echo "argc and argv are disabled.\nCannot perform function.\n\n";
  }
}

/* 
*     Creates a single subsite
*
*     Runs the functions that generates all of the pieces of a new subsite.
*
*     Outputs progress and results to the terminal.
*
*/
function createSubsite($directory)
{
  print "Begin creation of subsite: [" . $directory . "]\n\n";
  print str_pad("Creating subsite root", 40, ".");
  createSubsiteRoot($directory);
  print str_pad("Creating subsite css", 40, ".");
  createSubsiteCss($directory);
  print str_pad("Creating subsite js", 40, ".");
  createSubsiteJs($directory);
  print "Creating subsite includes:" . PHP_EOL;
  createSubsiteIncludes($directory);
  print str_pad("Adding to site functions", 40, ".");
  createNewSubsiteEntry($directory);
  print "\nSubsite creation [" . $directory . "] process complete!" . goodbyeSalutation() . PHP_EOL;
}

/* 
*     Creates subsite root index file from template.
*
*     Any changes should be made to the _subsite-template/subsite/index.php file.
*
*     Additional PLACEHOLDERs can be added here as well.
*
*/
function createSubsiteRoot($subsite)
{
  $path = $subsite;
  if (!is_dir($path)) {
    mkdir($path, 0777, true);
  }
  $filename = $path . '/index.php';
  if (!file_exists($filename)) {
    $stream = fopen($filename, 'wb');
    $data = file_get_contents('_subsite-template/subsite/index.php');
    $data = str_replace("PLACEHOLDER", $subsite, $data);
    file_put_contents($filename, $data);
    print  "done!" . PHP_EOL;
    fclose($stream);
  } else {
    print  "failed! File exists." . PHP_EOL;
  }
}

/* 
*     Creates subsite css file from template.
*
*     Any changes should be made to the _subsite-template/css/main.css file.
*
*     Additional PLACEHOLDERs can be added here as well.
*
*/
function createSubsiteCss($subsite)
{
  $path = 'css/' . $subsite;
  if (!is_dir($path)) {
    mkdir($path, 0777, true);
  }
  $filename = $path . '/main.css';
  if (!file_exists($filename)) {
    $stream = fopen($filename, 'wb');
    $data = file_get_contents('_subsite-template/css/main.css');
    $data = str_replace("PLACEHOLDER", $subsite, $data);
    file_put_contents($filename, $data);
    print  "done!" . PHP_EOL;
    fclose($stream);
  } else {
    print  "failed! File exists." . PHP_EOL;
  }
}

/* 
*     Creates subsite js file from template.
*
*     Any changes should be made to the _subsite-template/js/site.js file.
*
*     Additional PLACEHOLDERs can be added here as well.
*
*/
function createSubsiteJs($subsite)
{
  $path = 'js/' . $subsite;
  if (!is_dir($path)) {
    mkdir($path, 0777, true);
  }
  $filename = $path . '/site.js';
  if (!file_exists($filename)) {
    $stream = fopen($filename, 'wb');
    $data = file_get_contents('_subsite-template/js/site.js');
    $data = str_replace("PLACEHOLDER", $subsite, $data);
    file_put_contents($filename, $data);
    print  "done!" . PHP_EOL;
    fclose($stream);
  } else {
    print  "failed! File exists." . PHP_EOL;
  }
}

/* 
*     Generates all subsite includes from templates.
*
*     Additional includes can be added to the processes by adding the file to
*     the _subsite-template/includes/ directory and adding the following line:
*     createInclude($subsite, 'new-file-name.php'; 
*
*/
function createSubsiteIncludes($subsite)
{
  $path = 'includes/' . $subsite;
  if (!is_dir($path)) {
    mkdir($path, 0777, true);
  }
  createInclude($subsite, 'functions.php');
  createInclude($subsite, 'site-js.php');
}

/*
*     Creates individual includes from templates.
*
*     Any changes should be made to the particular _subsite-template/includes/ file.
*
*     Additional PLACEHOLDERs can be added here as well.
*/
function createInclude($subsite, $filename)
{
  print "\t" . str_pad($filename, 32, ".");
  if (file_exists('_subsite-template/includes/' . $filename)) {
    $source = 'includes/' . $subsite . '/' . $filename;
    if (!file_exists($source)) {
      $stream = fopen($source, 'wb');
      $data = file_get_contents('_subsite-template/includes/' . $filename);
      $data = str_replace("PLACEHOLDER", $subsite, $data);
      file_put_contents($source, $data);
      print  "done!" . PHP_EOL;
      fclose($stream);
    } else {
      print  "failed! File exists." . PHP_EOL;
    }
  } else {
    print  "failed! Template does not exist." . PHP_EOL;
  }
}

/*
*     Adds the new subsite to the main site includes/functions.php file.
*
*     Additional PLACEHOLDERs can be added here as well.
*
*/
function createNewSubsiteEntry($subsite)
{
  $checkIfExists = "case '" . $subsite . "':";
  $replacement = "case '" . $subsite . "':" . PHP_EOL . "\t\t\treturn '/includes/" . $subsite . "/functions.php';" . PHP_EOL . "\t\t// PLACEHOLDER";
  $source = 'includes/functions.php';
  $data = file_get_contents($source);
  if (strpos($data, $checkIfExists) == false) {
    $stream = fopen($source, 'wb');
    $data = str_replace("// PLACEHOLDER", $replacement, $data);
    file_put_contents($source, $data);
    print  "done!" . PHP_EOL;
    fclose($stream);
  } else {
    print "failed! Subsite exists. Check out the main functions file.";
  }
}

/*
*     Randomy display some snark!
*/
function goodbyeSalutation()
{
  // increase the max for decreased frequency of a message, or to add more messages
  $rand = rand(0, 10); 

  switch ($rand) {
    case 0:
      # add something fun to return
    case 1:
      return " Thanks for playing! ";
    case 2:
      return " Templating made easy ";
    case 3:
      return " Thanks, Ryan! ";
    case 4:
      return " Having fun yet? ";
    case 5:
      return " Don't believe the hype. ";
    case 6:
      return " Splendid, bitches! ";
    case 7:
      return " Congratulations! ";
    case 8:
      return " How's it going? ";
    case 9:
      return " Your new subsite is ready. ";
    default:
      if ((int)date('w') === 5) { // If it's Friday, exclaim this:
        return " Happy FRIDAY!! ";
      }
      break;
  }
}