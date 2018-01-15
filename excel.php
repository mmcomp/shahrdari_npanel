<?php
session_start();
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=spreadsheet.xls");
echo $_SESSION['csv_ready'];
die();