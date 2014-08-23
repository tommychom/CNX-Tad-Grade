<?php
class Grade {

	public function tad($score) {
		if ($score < 50) {
			return 'F';
		} elseif ($score < 60) {
			return 'D';
		} elseif ($score < 70) {
			return 'C';
		} elseif ($score < 80) {
			return 'B';
		} elseif ($score >= 80) {
			return 'A';
		}
	}
}
