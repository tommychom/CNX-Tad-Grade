<?php
class Grade {
	public function tad($score) {
		$grade = '';
		if ($score < 50) {
			$grade = 'F';
		} elseif ($score < 60) {
			$grade = 'D';
		} elseif ($score < 70) {
			$grade = 'C';
		} elseif ($score < 80) {
			$grade = 'B';
		} else {
			$grade = 'A';
		}
		return $grade;
	}
}
