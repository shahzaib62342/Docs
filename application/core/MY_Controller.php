<?php

class MY_Controller extends CI_Controller
  {
   //Properties That Contain Meta Data
   public  $title = "Venuehook Documentation", //Title Of Page
   $description = "REST API For Venuehook", //Meta Description Of Page
   $author = "Faraz Ali", //Meta Author Data
   $publisher = "www.venuehook.pk", //Meta Publisher
   $copyright = "www.venuehook.pk"; //Meta Copyright

   //Properties That Contain All Data For View
   public  $data = array(), // Stores Data for view Array
   $view = ''; // Stores HTML Data for view Array

   public $activeTab = '',
   $activeChild = '';

  }
?>
