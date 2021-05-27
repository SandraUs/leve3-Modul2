<?php

use App\QueryBuilder;

$db = new QueryBuilder();
$db->insert([
'title' => 'new post from QueryFactory package'], 'posts');
