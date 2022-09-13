<?php

function getApps(): array
{
	$str = file_get_contents('db/apps.txt');
	return json_decode($str, true);
}

function addApp(string $name, string $phone)
{
	$dt = date('Y-m-d H:i:s');
	$app = ['dt' => $dt, 'name' => $name, 'phone' => $phone];
	$allApps = getApps();
	$allApps[] = $app;
	return saveApps($allApps);
}

function saveApps(array $apps): bool
{
	$str = json_encode($apps);
	file_put_contents('db/apps.txt', $str);
	echo $str;
	return true;
}
