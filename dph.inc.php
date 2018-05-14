<?php
    
$conn = mysqli_connect('localhost', 'root', 'localhost', 'commentsection');

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}