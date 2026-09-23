<?php

class ParseCSV
{

  /*
  * How it is used:
  *
  * Why it exists:
  * What problem does it solve?
  * What would break or become harder if we used a simpler approach?
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
  * How it is used:
  *
  * Why it exists:
  * What problem does it solve?
  * What would break or become harder if we used a simpler approach?
  */
  //see result last results after parsing
  public function last_results()
  {
    return $this->data;
  }

  /*
  * How it is used:
  *
  * Why it exists:
  * What problem does it solve?
  * What would break or become harder if we used a simpler approach?
  */
  public function row_count()
  {
    return $this->row_count;
  }

  /*
  * How it is used:
  *
  * Why it exists:
  * What problem does it solve?
  * What would break or become harder if we used a simpler approach?
  */
  //clear data no dups
  private function reset()
  {
    $this->header = NULL;
    $this->data = [];
    $this->row_count = 0;
  }
}
