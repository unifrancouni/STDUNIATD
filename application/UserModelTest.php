<?php
//require_once(__DIR__.'models\users.php');

class UserModelTest extends PHPUnit_Framework_TestCase {

    protected $_user;

    public function setUp()
    {

    }

    public function testCorregirURI()
    {
        $this->assertEquals('http://std-uni-atd.org.ni/catalogos/0',  //Lo que espera
            $this->CorregirURI('std-uni-atd.org.ni/','index.php/catalogos/1')); //Lo que ejecuta
    }

    //Corrige la URI antes de entrar en un controller (URL's Amigables)
    public function CorregirURI($HOST, $REQUEST)
    {
        $count=0;
        $newURI = str_replace('index.php/','',$REQUEST,$count);

        return 'http://'.$HOST.$newURI;
    }

}
