<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class&obj</title>
</head>
<body>

<h1>CLASS AND OBJECT IN STUDENTS LIST</h1>
    <?php
  class student {
    public $name;
    public $slnum;
    public $mark;

    function set_name($name) {
      $this->name = $name;
    }

    function get_name() {
      return $this->name;
    }

    function set_slnum($slnum){
      $this->slnum = $slnum;
    }

    function get_slnum() {
      return $this->slnum;
    }

    function set_mark($mark){
      $this-> mark = $mark;
    }

    function get_mark() {
      return $this->mark;
    }
  }

  $vijay = new student();
  $ajay = new student();
$arul= new student();

  $vijay->set_name('VIJAYAGANAPATHY');
  $ajay->set_name('AJAYKIRAN');
  $vijay->set_slnum('3999');
  $ajay->set_slnum('4000');
  $vijay->set_mark('499');
  $ajay->set_mark('499');
  $arul->set_name('ARUL');
  $arul->set_slnum('4001');
  $arul->set_mark('500');


  print 'STUDENT NAME :'.$vijay->get_name();
  print "<br>";
  print 'STUDENT MARK :'.$vijay->get_mark();

  print "<br>";
  print  'STUDENT NUMBER :'.$vijay->get_slnum();
  print "<br>";
  print "<br>";
  print "<br>";
  
  print 'STUDENT NAME :'. $ajay->get_name();
  print "<br>"; 
  print 'STUDENT MARK :'. $ajay->get_mark();
  print "<br>";
print 'STUDENT NUMBER :'. $ajay->get_slnum();
print "<br>";
print "<br>";
print "<br>";
print "<br>";
print 'STUDENT NAME :'.$arul->get_name();
  print "<br>";
  print 'STUDENT MARK :'.$arul->get_mark();

  print "<br>";
  print  'STUDENT NUMBER :'.$arul->get_slnum();
  print "<br>";
  print "<br>";
?>
</body>
</html>