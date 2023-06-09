<?php 
class Link {
    // DB stuff
    private $conn;
    private $table = 'links';


    // Post Properties
    // public $sno;
    // public $name;
    // public $description;
    // public $regLink;
    // public $startTime;
    // public $endTime;
    // public $watchLink;
    // public $partners;
    // public $speakers;
    // public $poster;
    // public $year;
    // public $numberOfEvents;
    // public $heading;
    // public $more;
  

    public function __construct($db) {
      // echo 'check1.1';
      $this->conn = $db;
      
    }
//   public function allLink($year,$start,$limit) {
//       // Create query
//       $query = ' SELECT * FROM event  WHERE year=' . $year . ' ORDER BY startDate DESC LIMIT ' . $start . ',' . $limit . ' ';                 
//       // echo $query;
//       $stmt = $this->conn->query($query); 
//       // echo "statement".$stmt;  
//       return $stmt;
//       }
  public function allLink() {
      // Create query
      $query = " SELECT * FROM links  WHERE uniqueNo='shorty'";
    //   var_dump($query);                 
      // echo $query;
      $stmt = $this->conn->query($query); 
      // echo "statement".$stmt;  
      return $stmt;
      }

}
?>