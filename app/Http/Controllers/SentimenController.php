<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class SentimenController extends Controller
{
  protected $costumer_key = "";
  protected $costumer_secret = "";
  protected $access_token = "";
  protected $access_token_secret = "";
  protected $connection = null;
    //
  public function __construct(){
   $this->costumer_key = "DcHlTcYxDxDIiZsArQuz1Y7Cr";
   $this->costumer_secret = "RWaWVhcFR0ieoo92QvZW60r8Le7nE5q7WFKRYIx3WydPBgFFyt";
   $this->access_token ="1516602431500877825-SvvEGctpHG4XX1PGOtOpQQyLOnbHWC";
   $this->access_token_secret = "3AcmVdO5r28S56K4r4HSKLA1kflOF6avGyHkGmuislHrc";

   $this->connection = new TwitterOAuth($this->costumer_key, $this->costumer_secret, $this->access_token, $this->access_token_secret);

 }
 public function index()
 {
   $batasan = 10;
   $db = [];
   $hitung = [];
   $kategoris = ['unasman', 'sulbar', 'polewali'];
   foreach ($kategoris as $key => $kategori) {
  // code...
    $statuses = $this->connection->get("search/tweets", [
      "q" => $kategori, 
      "lang" => "id",
      "count" => 100,
    ]);
    $item = $kategori. "s";
    $$item = $statuses->statuses;
    foreach ($$item as $key => $tgl) {
      // code...
      $tgl1 = strtotime($tgl->created_at);
      $tgl1 = (int) date('d', $tgl1);
      array_push($db, $tgl1);
    }
    $db = array_count_values($db);

    $hitung[$kategori] = array_sum($db);
  }   

  $data = [
    'batasan' => $batasan,
    'hitung' => $hitung,
    'kategoris' => $kategoris,
    'unasmans'=>$unasmans,
    'polewalis'=>$polewalis,
    'sulbars'=>$sulbars,
    'ats' => $this->myGet("statuses/mentions_timeline"),
  ]; 

  return view('sentimens.index', $data);
}

public function dbUnasman(){
  echo json_encode($this->dbKategori("unasman"));
}

public function dbPolewali(){
  echo json_encode($this->dbKategori("polewali"));
}

public function dbSulbar(){
  echo json_encode($this->dbKategori("sulbar"));
}

public function myGet($url = "", $data = []){
 return $this->connection->get($url, $data);
}

public function dbKategori($kategori)
{

// mencari minggu lalu dulu
$harisekarang = (int) date('d', time()); //17
// $mingguLalu = $harisekarang - 7; // 8
$mingguLalu = (int) date('d', strtotime("-7 days")); //10


$analisis = $this->myGet("search/tweets", [
  "q" => $kategori, 
  "lang" => "id",
  "count" => 100,
]);
$datas = [];
$apiTgl = $analisis->statuses;
$db = [];

foreach ($apiTgl as $key => $tgl) {
      // code...
  $tgl1 = strtotime($tgl->created_at);
  $tgl1 = (int) date('d', $tgl1);
  array_push($db, $tgl1);
}
$db = array_count_values($db);

for ($tanggal=$mingguLalu; $tanggal <= $harisekarang ; $tanggal++) { 
  if(!array_key_exists($tanggal, $db)){
   $db[$tanggal] = 0;
 }
}

// var_dump($db);die();
$data = [
  "data" => $db
];
return $data;
}


}
