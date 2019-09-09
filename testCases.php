<?php

class CalTest extends  TestCases
{
    private $_calcForm;
    public function setUp(){
        $this ->_calcForm = new CalcForm();
    }
    public function  testFor3(){
        $this->assertEquals(0,$this->_calcForm->calcRemainder(24,3));
    }
    public function  testFor5(){
        $this->assertEquals(0,$this->_calcForm->calcRemainder(20,5));
    }
    public function  testFor35(){
        $this->assertEquals(0,$this->_calcForm->addRemainder(0,0));
        $this->assertEquals(0,$this->_calcForm->addRemainder(($this->_calcForm->calcRemainder(30,5)),($this->_calcForm->calcRemainder(15,3))));
    }

}
?>