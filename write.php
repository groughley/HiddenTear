file_put_contents("filename.txt", $_SERVER["REMOTE_ADDR"]. ":" . $_GET["info"], FILE_APPEND | LOCK_EX);