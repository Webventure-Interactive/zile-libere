<?php
	function returnLegalDays($year, $api = false ){
		/**
		 * Luna în care va pica Paştele se stabileşte după formula [(d + e + 114) / 31],
		 * iar ziua după formula ((d + e + 114) mod 31) + 1,
		 * unde d = (19 * c + 15) mod 30, e = (2 * a + 4 * b – d + 34) mod 7,
		 * a = A mod 4, b = A mod 7, c = A mod 19 unde A = anul dorit
		 */
		$a = $year % 4;
		$b = $year % 7;
		$c = $year % 19;
		$d = (19 * $c + 15) % 30;
		$e = (2 * $a + 4 * $b - $d + 34) % 7;
		$month = ($d + $e + 114) / 31;
		$day = (($d + $e + 114) % 31) + 1;
		$easter = date('Y/m/d', strtotime(jdtogregorian (juliantojd(intval($month), $day, $year))));
		$easter2 = date('Y/m/d', strtotime($easter . '+1 day'));
		$rusalls = date('Y/m/d', strtotime($easter . '+50 day'));

		$legalDays = [
			[
				'name' => 'Anul Nou', 
				'date' => [
					[
						'date' => $year . '/01/01',
						'weekday' => date('D',  strtotime($year . '/01/01')),
					],
					[
						'date' => $year . '/01/02',
						'weekday' => date('D',  strtotime($year . '/01/02')),
					],
				], 
			],
			[
				'name' => 'Ziua Unirii Principatelor Române', 
				'date' => [
					[
						'date' => $year . '/01/24',
						'weekday' => date('D',  strtotime($year . '/01/24')),
					],
				],
			],
			[
				'name' => 'Paștele Ortodox', 
				'date' => [
					[
						'date' => $easter,
						'weekday' => date('D',  strtotime($easter)),
					],
					[
						'date' => $easter2,
						'weekday' => date('D',  strtotime($easter2)),
					],
				],
			],
			[
				'name' => 'Ziua Muncii', 
				'date' => [
					[
						'date' => $year . '/05/01',
						'weekday' => date('D',  strtotime($year . '/01/05')),
					],
				],
			],
			[
				'name' => 'Ziua Copilului', 
				'date' => [
					[
						'date' => $year . '/06/01',
						'weekday' => date('D',  strtotime($year . '/01/06')),
					],
				],
			],
			[
				'name' => 'Rusalii', 
				'date' => [
					[
						'date' => $rusalls,
						'weekday' => date('D',  strtotime($rusalls)),
					],
				],
			],
			[
				'name' => 'Adormirea Maicii Domnului', 
				'date' => [
					[
						'date' => $year . '/08/15',
						'weekday' => date('D',  strtotime($year . '/08/15')),
					],
				],
			],
			[
				'name' => 'Sfântul Andrei', 
				'date' => [
					[
						'date' => $year . '/11/30',
						'weekday' => date('D',  strtotime($year . '/11/30')),
					],
				],
			],
			[
				'name' => 'Ziua Națională a României', 
				'date' => [
					[
						'date' => $year . '/12/01',
						'weekday' => date('D',  strtotime($year . '/12/01')),
					],
				],
			],
			[
				'name' => 'Crăciunul', 
				'date' => [
					[
						'date' => $year . '/12/25',
						'weekday' => date('D',  strtotime($year . '/12/25')),
					],
					[
						'date' => $year . '/12/26',
						'weekday' => date('D',  strtotime($year . '/12/26')),
					],
				],
			],
		];
		
		if ( $api ) {
			return json_encode($legalDays);
		} else {
			return $legalDays;
		}
	}
?>