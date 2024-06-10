<?php
include 'session.php';	
 $database = new Connection();
  $connect = $database->open();
?>	
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Client Portal -  Gas Stock Management System</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Client Portal - Ali Gas Stock Management System">
    <meta name="author" content="Bizimana King Sharoon">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="../assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="../assets/css/portal.css">
<link href="../assets/simple-datatables/style.css" rel="stylesheet">
</head> 

<body class="app">   	
 <header class="app-header fixed-top">	   	            
         <?php 	include 'heaf.php'; ?>