<?php
class TestGrade extends PHPUnit_Framework_TestCase {

	public $grade;

	public function setUp() {
		$this->grade = new Grade();
	}

	public function testScoreLessThan50IsF() {
		$this->assertEquals('F', $this->grade->tad(49));
	}

	public function testScoreLessThan60IsD() {
		$this->assertEquals('D', $this->grade->tad(59));
	}

	public function testScoreLessThan70IsC() {
		$this->assertEquals('C', $this->grade->tad(69));
	}

	public function testScoreLessThan80IsC() {
		$this->assertEquals('B', $this->grade->tad(79));
	}

	public function testScoreMoreThan80IsA() {
		$this->assertEquals('A', $this->grade->tad(80));
	}
}
