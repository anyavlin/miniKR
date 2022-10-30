<?php
class Student extends \College\Entities\Human
{
    private bool $expelled = false;
    private ?DateTime $expelledDate = null;
    public function __construct(string $firstName, string $lastName, DateTime $birthDate, string $gender, private string $group, private DateTime $admissionDate)

    {
    \College\Entities\Human::__construct($firstName, $lastName, $birthDate, $gender);
    }

    public function getGroup():string{
        return $this->group;
    }

    public function getAdmissiontDate(){
        return $this->aadmissionDate;
    }

    public function Expel(bool $status, DateTime $exp):void{
        $this->expelled=$status;
        $this->expelledDate=$exp;
    }
    
    public function status(){
        if ($this->expelled==false){
            return 'Студент числится в группе' . ' ' . $this->getGroup();
        }
        return 'Студент отчислен' . ' ' . $this->expelledDate->format('Y-m-d');
    }
}