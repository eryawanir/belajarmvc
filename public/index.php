<?php
if (!session_id()) session_start();
//init akan memmanggil semua file yg dibutuhkan
//teknik ini disebut bootstraping
require_once '../app/init.php';
$app = new App;
