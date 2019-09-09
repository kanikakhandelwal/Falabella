<<<<<<< HEAD
<?php
class Main
{
    public  function mainAssignmntFunc(){
        for($i =1; $i <=100;$i++)
        {
            $result = new Output();
            $result -> number = $i;
            $result -> rem3  = getRem($i,3);
            $result -> rem5  = getRem($i,5);
            $result -> rem35 = addrem($result->rem3,$result->rem5);
            $write = new Printer();
            $write->printSolution($result);
        }
    }


    // get remainder function
    function getRem($number,$param )
    {
        return $number % $param;
    }
    function addrem($number3,$number5)
    {
        return $number3 +  $number5;
    }
=======
<?php
class Main
{
    public  function mainAssignmntFunc(){
        for($i =1; $i <=100;$i++)
        {
            $result = new Output();
            $result -> number = $i;
            $result -> rem3  = getRem($i,3);
            $result -> rem5  = getRem($i,5);
            $result -> rem35 = addrem($result->rem3,$result->rem5);
            $write = new Printer();
            $write->printSolution($result);
        }
    }


    function getRem($number,$param )
    {
        return $number % $param;
    }
    function addrem($number3,$number5)
    {
        return $number3 +  $number5;
    }
>>>>>>> 3dd47726655d11854196dbff0864225e8776acc2
}