<?php

namespace LenardPalko\Validator;

use LenardPalko\Validator\VidoeLengthValidator;

class VideoLengthValidatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider getValidData
     *
     */
    public function testIsValidTrue($filePath, $maxLength)
    {
        $validator = new VideoLengthValidator();

        $isValid = $validator->isValid($filePath, $maxLength);

        $this->assertTrue($isValid);
    }

    /**
     * @dataProvider getInvalidData
     *
     */
    public function testIsValidFalse($filePath, $maxLength)
    {
        $validator = new VideoLengthValidator();

        $isValid = $validator->isValid($filePath, $maxLength);

        $this->assertFalse($isValid);
    }

    public function getValidData()
    {
        return [
            [__DIR__.'/../../Fixtures/video.flv', 20]
        ];
    }

    public function getInvalidData()
    {
        return [
            [__DIR__.'/../../Fixtures/video.flv', 10]
        ];
    }
}
