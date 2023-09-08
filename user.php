<?php 

//GET: QUERY STRING PARAMETERS (URL) (?)
// echo "Welcome" . $_GET["username"]
//POST: BODY PARAMETERS (IN REQUEST)
// echo "Welcome" . $_POST["username"]

echo "Quieres recibir correos? : ";
echo isset($_POST["email_news"]) ? "SI" : "NO";
echo "<script>alert('HOLAAAA')</script>"
?>