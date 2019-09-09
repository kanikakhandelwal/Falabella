<<<<<<< HEAD
<?php
class Printer
{
    function printSolution($result) : void
    {
        switch ($result) {
            case ($result->rem35 == 0 ):
                echo sprintf("%s\n","Linianos");
                break;
            case ($result->rem5 == 0):
                echo sprintf("%s\n","IT");
                break;
            case ($result->rem3==0):
                echo sprintf("%s\n","Linio");
                break;
            default:
                echo sprintf("%s\n",$result->number);
        }
    }
=======
<?php
class Printer
{
    function printSolution($result) : void
    {
        switch ($result) {
            case ($result->rem35 == 0 ):
                echo sprintf("%s\n","Linianos");
                break;
            case ($result->rem5 == 0):
                echo sprintf("%s\n","IT");
                break;
            case ($result->rem3==0):
                echo sprintf("%s\n","Linio");
                break;
            default:
                echo sprintf("%s\n",$result->number);
        }
    }
>>>>>>> 3dd47726655d11854196dbff0864225e8776acc2
}