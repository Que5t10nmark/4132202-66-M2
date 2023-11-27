<?

$host = "db";
$user = "root";
$pass = "1234";
$db = "internet";

mysqli_connect($host,$user,$pass,$db);

try{
    mysqli_connect($host,$user,$pass,$db);
    mysqli_query($conn,"SET NAME utf8");
}catch(Exception $e){
    $error = $e->getMessage();
    echo $error;
}
?>