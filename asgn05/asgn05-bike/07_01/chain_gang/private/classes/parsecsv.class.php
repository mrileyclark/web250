<?php

class ParseCSV
{

  /*
  * Why is it static?
  * It is static because the delimiter belongs to the ParseCSV class and does not need to be different for every parser object. The class can use the * same delimiter when it reads the CSV.

  * Why is it a property instead of a constant?
  * It is a property because the delimiter could be changed if needed. For example, some CSV files might use a semicolon instead of a comma. A *constant could not be changed after it was created.
  */
  public static $delimiter = ',';

  //private so cant be set directly only passed in with new instance or calling outside class
  private $filename;
  private $header;
  private $data = [];
  //keeps track of # rows private so read only cant set it
  private $row_count = 0;

  public function __construct($filename = '')
  {
    if ($filename != '') {
      //check file exist in class when new instance is created
      $this->file($filename);
    }
  }

  //check if file exists/readable outside class
  public function file($filename)
  {
    if (!file_exists($filename)) {
      echo "File does not exist.";
      return false;
    } elseif (!is_readable($filename)) {
      echo "File is not readable.";
      return false;
    }
    //checks were successful
    $this->filename = $filename;
    return true;
  }

  public function parse()
  {
    if (!isset($this->filename)) {
      echo "File not set.";
      return false;
    }
    //clear prev results for fresh copy
    $this->reset();

    $file = fopen($this->filename, 'r');
    while (!feof($file)) {
      $row = fgetcsv($file, 0, self::$delimiter);
      if ($row == [NULL] || $row === FALSE) {
        continue;
      }
      if (!$this->header) {
        $this->header = $row;
      } else {
        $this->data[] = array_combine($this->header, $row);
        $this->row_count++;
      }
    }
    fclose($file);
    return $this->data;
  }

  /*
  * When is this method useful instead of only using the return value from parse()?
  * It is useful when I want to get the results from the last time the CSV was parsed without having to run parse() again. The parser already saved *the results in $data, so this method lets me access them later.
  */
  //see result last results after parsing
  public function last_results()
  {
    return $this->data;
  }

  /*
  * Why does the parser keep a row counter while parsing rather than requiring the page to call count() later?
  *The parser is already going through each row, so it can keep track of the number of rows as it parses. 
  *This means the page can just ask the parser 
  * for the row count instead of getting all the data and counting it afterward.
  */
  public function row_count()
  {
    return $this->row_count;
  }

  /*
  * Why is it private?
  *It is private because resetting the parser is something the ParseCSV class needs to do internally. Other code using the parser does not need to *control when it resets.

  *What could go wrong if outside code could call it?*Outside code could accidentally call reset() while the parser's results are still needed. *This *would clear the header, data, and row count and could cause information to be lost.
  */
  //clear data no dups
  private function reset()
  {
    $this->header = NULL;
    $this->data = [];
    $this->row_count = 0;
  }
}
