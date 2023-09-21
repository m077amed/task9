<?php
session_start() ;
include("../form/core/commonFunctions.php");
session_destroy();
redirect("./register.php");