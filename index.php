<?php
require_once ('helpers.php');
require_once ('config.php');


$main = include_template ('main.php', ['array_projects' => $array_projects, 'array_info_task' => $array_info_task, 'show_complete_tasks' => $show_complete_tasks]);

$page_content = include_template ('layout.php', ['title' => "Дела в порадке", 'main' => $main]);
print($page_content);
?>

