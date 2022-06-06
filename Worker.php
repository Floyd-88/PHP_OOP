<?php
class Worker
{
    private $name;
    private $experience;
    private $position;
    private $salary;

    public function __construct($name, $experience, $position, $salary) {
        $this->name = $name;
        $this->experience = $experience;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }
    public function getExperience() {
        return $this->experience;
    }
    public function setExperience() {
            $this->experience += 1;
            $this->salary += 500; 
    }
    public function getPosition() {
        return $this->position;
    }
    public function setPosition($position) {
        $this->position = $position;
    }

    public function getSalary() {
        return $this->salary;
    }
    // private function isCorrectExperience($experience) {
    //     if($experience >=1 and $experience <=50) {
    //         return true;
    //     }
    // }
}
?>