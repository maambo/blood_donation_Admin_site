<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blood Donation</title>

</head>


<body>
<?php session_start() ?>
<?php

  header('index.php?page=home');
 include 'header.php'; ?>
<?php if(isset($_SESSION['login_id'])) include 'navBar.php'; ?>

<div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-body text-white">
  </div>
</div>

    <?php 
    if(isset($_GET['page']) && !empty($_GET['page']))
      include($_GET['page'].'.php');
    else
      include('home.php');

    ?>
   
    <div class="modal fadeIn" tabindex="-1" id="uni_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
           
          </div>
        </div>
      </div>
    </div>

</html>