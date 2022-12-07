<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\TheCore\Support\Enums\String;

/**
 * ### Supported character encodings enum
 * @since 0.1.3.pre-alpha.M1
 *
 * @api
 */
enum Encoding:string {

    case BASE64 = 'BASE64';
    case UUENCODE = 'UUENCODE';
    case HTML_ENTITIES = 'HTML-ENTITIES';
    case QUOTED_PRINTABLE = 'Quoted-Printable';
    case SEVEN_BIT = '7bit';
    case EIGHT_BIT = '8bit';
    case UCS_4 = 'UCS-4';
    case UCS_4BE = 'UCS-4BE';
    case UCS_4LE = 'UCS-4LE';
    case UCS_2 = 'UCS-2';
    case UCS_2BE = 'UCS-2BE';
    case UCS_2LE = 'UCS-2LE';
    case UTF_32 = 'UTF-32';
    case UTF_32BE = 'UTF-32BE';
    case UTF_32LE = 'UTF-32LE';
    case UTF_16 = 'UTF-16';
    case UTF_16BE = 'UTF-16BE';
    case UTF_16LE = 'UTF-16LE';
    case UTF_8 = 'UTF-8';
    case UTF_7 = 'UTF-7';
    case UTF7_IMAP = 'UTF7-IMAP';
    case ASCII = 'ASCII';
    case EUC_JP = 'EUC-JP';
    case SJIS = 'SJIS';
    case EUCJP_WIN = 'eucJP-win';
    case EUC_JP_2004 = 'EUC-JP-2004';
    case SJIS_MOBILE_DOCOMO = 'SJIS-Mobile#DOCOMO';
    case SJIS_MOBILE_KDDI =  'SJIS-Mobile#KDDI';
    case SJIS_MOBILE_SOFTBANK = 'SJIS-Mobile#SOFTBANK';
    case SJIS_MAC = 'SJIS-mac';
    case SJIS_2004 = 'SJIS-2004';
    case UTF_8_MOBILE_DOCOMO = 'UTF-8-Mobile#DOCOMO';
    case UTF_8_MOBILE_KDDI_A = 'UTF-8-Mobile#KDDI-A';
    case UTF_8_MOBILE_KDDI_B = 'UTF-8-Mobile#KDDI-B';
    case UTF_8_MOBILE_SOFTBANK = 'UTF-8-Mobile#SOFTBANK';
    case CP932 = 'CP932';
    case CP51932 = 'CP51932';
    case JIS = 'JIS';
    case ISO_2022_JP = 'ISO-2022-JP';
    case ISO_2022_JP_MS = 'ISO-2022-JP-MS';
    case GB18030 = 'GB18030';
    case WINDOWS_1252 = 'Windows-1252';
    case WINDOWS_1254 = 'Windows-1254';
    case ISO_8859_1 = 'ISO-8859-1';
    case ISO_8859_2 = 'ISO-8859-2';
    case ISO_8859_3 = 'ISO-8859-3';
    case ISO_8859_4 = 'ISO-8859-4';
    case ISO_8859_5 = 'ISO-8859-5';
    case ISO_8859_6 = 'ISO-8859-6';
    case ISO_8859_7 = 'ISO-8859-7';
    case ISO_8859_8 = 'ISO-8859-8';
    case ISO_8859_9 = 'ISO-8859-9';
    case ISO_8859_10 = 'ISO-8859-10';
    case ISO_8859_13 = 'ISO-8859-13';
    case ISO_8859_14 = 'ISO-8859-14';
    case ISO_8859_15 = 'ISO-8859-15';
    case ISO_8859_16 = 'ISO-8859-16';
    case EUC_CN = 'EUC-CN';
    case CP936 = 'CP936';
    case HZ = 'HZ';
    case EUC_TW = 'EUC-TW';
    case BIG_5 = 'BIG-5';
    case CP950 = 'CP950';
    case EUC_KR = 'EUC-KR';
    case UHC = 'UHC';
    case ISO_2022_KR = 'ISO-2022-KR';
    case WINDOWS_1251 = 'Windows-1251';
    case CP866 = 'CP866';
    case KOI8_R = 'KOI8-R';
    case KOI8_U = 'KOI8-U';
    case ARM_SCII_8 = 'ArmSCII-8';
    case CP850 = 'CP850';
    case ISO_2022_JP_2004 = 'ISO-2022-JP-2004';
    case ISO_2022_JP_MOBILE_KDDI = 'ISO-2022-JP-MOBILE#KDDI';
    case CP50220 = 'CP50220';
    case CP50221 = 'CP50221';
    case CP50222 = 'CP50222';

}