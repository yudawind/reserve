<?

$query = mysqli_query($CONNECT, 'SELECT * FROM `history` LIMIT '.$_SESSION['loader'].',2');

if ( !mysqli_num_rows($query) ) {
    if ($_SESSION['loader'] == 0) exit('empty');
    else exit('end');
    exit;
}
$_SESSION['loader'] += 2;
while ( $row = mysqli_fetch_assoc($query) ) {
    echo '<p>'.$row['text'].'</p>';
}

?>