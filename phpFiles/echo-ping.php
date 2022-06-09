<?php
  $name = $_GET['name'];
  $host = $_GET['host'];

  echo "Welcome $name! \nI will ping $host";
  system("ping -c 3 $host");