<?php
	try {
		include "connect.php";
		$dbh = new PDO('mysql:dbname='.$dbName.';host='.$host, $login, $password);
		$sth = $dbh->prepare("SELECT * FROM `tbl_regions`");
		$sth->execute([]);
		$res = $sth->fetchAll(PDO::FETCH_ASSOC);
		$regions = [];
		foreach ($res as $item) {
			$regions[] = $item;
		}
		print '<pre>' . print_r($regions, 1) . '</pre>';
	} catch (PDOException $e) {
		die($e->getMessage());
	}