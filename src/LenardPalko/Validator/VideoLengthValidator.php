<?php

namespace LenardPalko\Validator;

use FFMpeg\FFProbe;

/**
 * VideoLengthValidator
 *
 * @author Lenard Palko <lenard.palko@gmail.com>
 */
class VideoLengthValidator
{
    public function isValid($filePath, $maxLength = 0)
    {
        if (!$filePath) {
            return true;
        }

        if (!file_exists($filePath)) {
            throw new \Exception('Invalid filename provided!');
        }

        $ffprobe = FFProbe::create();
        $video = $ffprobe->format($filePath);

        if (!$video) {
            throw new \Exception('Unrecognized video type!');
        }

        $duration = $video->get('duration');

        return $duration && $duration < $maxLength;
    }
}
