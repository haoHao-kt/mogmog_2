<?php
session_start();

$old_id = session_id();

session_regenerate_id(true);

$new_id = session_id();

echo '<p>'.$old_id.'</p>';

echo '<p>'.$new_id.'</p>';