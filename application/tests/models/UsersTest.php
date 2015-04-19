<?php
/**
 * Created by PhpStorm.
 * User: FRANCO
 * Date: 18/04/2015
 * Time: 22:58
 */


class UsersTest extends PHPUnit_Framework_TestCase {

    public function testTest()
    {
        $this->assertEquals(1, 1);
    }

    //Obtener usuarios
    public function testgetUsers()
    {

        $this->assertEquals(120, $this->Factorial(5));

        //$regs = getUsers();
        //$this->assertEquals($regs[0]['sNombreUsuario'],'unifrancouni');
    }

    //Obtener usuarios
    public function Factorial($n)
    {
        $f =  1;

        for($i=1; $i<=$n; $i++)
        {
            $f*=$i;
        }

        return $f;
        //$query = $this->db->query('select * from ssgcuenta');
        //return $query->result();
    }

}
