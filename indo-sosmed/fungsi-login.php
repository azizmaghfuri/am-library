<?php

include_once 'config.php';

function login($username, $password) {
  // Hubungkan ke database
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  if ($conn->connect_error) {
    die('Koneksi ke database gagal: ' . $conn
