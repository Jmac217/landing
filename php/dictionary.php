<?php

$JSON = json_decode(file_get_contents('../json/dictionaries.json', true));
$priority_index = $JSON->priority_index[0];

$type= $priority_index->type[0];
$workload= $priority_index->workload[0];
$importance= $priority_index->importance[0];
$due_date= $priority_index->due_date[0];

// dictionary debug block

// types
echo $bug = $type->bug;
echo $fix = $type->fix;
echo $rewrite = $type->rewrite;
echo $feature = $type->feature;
echo $request = $type->request;
echo $style = $type->style;

echo "<br/>";

// workloads
echo $quick = $workload->quick;
echo $light = $workload->light;
echo $medium = $workload->medium;
echo $heavy = $workload->heavy;
echo $intense = $workload->intense;

echo "<br/>";

// importance
echo $minimal = $importance->minimal;
echo $low = $importance->low;
echo $meidum = $importance->medium;
echo $high = $importance->high;
echo $urgent = $importance->urgent;

echo "<br/>";

// due_date
echo $specific = $due_date->specific;
echo $soon= $due_date->soon;
echo $sometime = $due_date->sometime;
echo $eventually = $due_date->eventually;

// this still needs prototyped to coordinate with an algorithm, but this is kind of what I'm going for.

?>