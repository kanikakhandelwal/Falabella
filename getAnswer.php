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
}