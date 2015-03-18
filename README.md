# VideoLengthValidator

A very basic validator that can validate if the length of a video is under a specific value.

It uses https://github.com/PHP-FFMpeg/PHP-FFMpeg to get the duration of the video, so you need to have ffprobe
installed on your system.

## Usage

```php
<?php

use LenardPalko\Validator\VideoLengthValidator;

$validator = new VideoLengthValidator;
if ($validator->isValid($filePath, $maxLength)) {
	echo "Video is too long. $filePath exceeds $maxLength s";
}
```