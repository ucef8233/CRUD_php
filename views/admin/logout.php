<?php
session_start();
session_destroy();
header('location:utulisateurs.php?p=login');
