<?php
setcookie("iduser", '', time() + (86400 * 30), "/");
header('Location: /');