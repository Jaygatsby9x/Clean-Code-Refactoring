<?php
include_once "Cylinder.php";

class CylinderTest extends Cylinder
{
    public function testGetVolume0And0()
    {
        $radius = 0;
        $height = 0;
        $cylinder = new Cylinder();
        $result = $cylinder->getVolume($radius, $height);
    }
    public function testGetVolume1And2()
    {
        $radius = 1;
        $height = 2;
        $cylinder = new Cylinder();
        $result = $cylinder->getVolume($radius, $height);
    }
}