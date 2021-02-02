<?php
class Student
{
    public $name;
    public $attendance;
    private $totalMarks;

    public function setTotalMarks($marks) {
        $this->totalMarks = $marks;
    }
    public function getTotalMarks() {
        return $this->totalMarks."<br>";
    }
}
