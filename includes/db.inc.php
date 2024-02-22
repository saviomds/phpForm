<?php

$connect = mysqli_connect('localhost', 'root', '', 'form');

if ($connect) {
    echo 'Database Connected';
} else {
    echo 'DB Failed';
}

