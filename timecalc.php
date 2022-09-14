<?php
class time_calc {
    public function time_ago($time) {
		$diff = time() - strtotime($time);
		$sec = $diff;
		$min = round($diff / 60 );
		$hrs = round($diff / 3600);
		$days = round($diff / 86400 );
		$weeks = round($diff / 604800);
		$mnths = round($diff / 2600640 );
		$yrs = round($diff / 31207680 );
		$unixmax = round($diff / time() );
		if ($sec <= 60) {
			$tempy1 = ' ' . 'second(s)' . '';
			return $tempy1;
		} elseif ($min <= 60) {
			if ($min==1) {
				$tempy1 = '1 ' . 'minute' . '';
				return $tempy1;
			} else {
				$tempy1 = $min . 'minutes' . '';
				return $tempy1;
			}
		} elseif ($hrs <= 24) {
			if ($hrs == 1) {
				$tempy1 = '1 ' . 'hour' . '';
				return $tempy1;
			} else {
				$tempy1 = $hrs . 'hours' . '';
				return $tempy1;
			}
		} elseif ($days <= 7) {
			if ($days == 1) {
				$tempy1 = 'yesterday';
				return $tempy1;
			} else {
				$tempy1 = $days . 'days' . '';
				return $tempy1;
			}
		} elseif ($weeks <= 4.3) {
			if ($weeks == 1) {
				$tempy1 = '1 ' . 'week' . '';
				return $tempy1;
			} else {
				$tempy1 = '' . $weeks . 'weeks' . '';
				return $tempy1;
			}
		} elseif ($mnths <= 12) {
			if ($mnths == 1) {
				return "1 " . 'month' . "";
			} else {
				return "$mnths " . 'months' . "";
			}
		} else {
			if ($yrs == 1) {
				return "1 " . 'year' . "";
			} elseif ($yrs > 1) {
				if ($yrs == $unixmax) {
					return "$yrs " . 'epochs' . "";
				} else {
					return "$yrs " . 'years' . "";
				}
			}
		}
	}

}
?>
