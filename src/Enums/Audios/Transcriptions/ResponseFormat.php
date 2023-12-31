<?php

namespace Kepson\SimplestOpeniaSdk\Enums\Audios\Transcriptions;  

enum ResponseFormat: string
{
    case JSON = 'json';
    case TEXT = 'text';
    case SRT = 'srt';
    case VERBOSE_JSON = 'verbose_json';
    case VTT = 'vtt';
}