class Student
{

    var $name;
    var $program;
	var $age;

    function __construct($name, $program, $age)
    {
        $this->name = $name;
        $this->program = $program;
        $this->age = $age;

    }

    <!-- function setName($name)
    {
        $this->name = $name;
    } -->
    function getName()
    {
        echo $this->name . "<br />";
    }
    <!-- function setProgram($program)
    {
        $this->program = $program;
    } -->
    function getProgram()
    {
        echo $this->program . "<br />";
    }

    <!-- function setAge($age)
    {
        $this->age = $age;
    } -->
    function getAge()
    {
        echo $this->age . "<br />";
    }
}


$student1 = new Student("Rhys","WebDev", 20);
$student1->getName();
$student1->getProgram();
$student1->getAge();