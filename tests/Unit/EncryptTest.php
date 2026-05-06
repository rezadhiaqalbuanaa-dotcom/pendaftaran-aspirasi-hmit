<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Crypt;

class EncryptTest extends TestCase
{
    public function testEncrypt()
    {
        $encrypt = Crypt::encrypt('Eko Kurniawan');
        $decrypt = Crypt::decrypt($encrypt);

        self::assertEquals('Eko Kurniawan', $decrypt);
    }
}