<?php

class Database
{
  private $server;
  private $username;
  private $password;
  private $database;
  private $port;

  public function connect()
  {
    // echo __DIR__.'/../env.php';
    include(__DIR__ . '/../../env.php');
    // $env_server = "localhost";
    // $env_username = "root";
    // $env_password = "root";
    // $env_database = "task";
    // $env_port = "8889";

    $this->server = $env_server;
    $this->username = $env_username;
    $this->password = $env_password;
    $this->database = $env_database;
    $this->port = $env_port;
    // echo $env_database;
    $conn = new mysqli($this->server, $this->username, $this->password, $this->database, $this->port);
    return $conn;
  }
}
