<?php

namespace NoorElbahr\BangunRuang\Tests;

use NoorElbahr\BangunRuang\Facades\PersegiPanjang;

class PersegiPanjangTest extends TestCase
{
    public function testHitungLuas()
    {
        $panjang = 10;
        $lebar = 5;

        $hasil = PersegiPanjang::hitungLuas($panjang, $lebar);

        $this->assertEquals($hasil, 50);
    }
}
