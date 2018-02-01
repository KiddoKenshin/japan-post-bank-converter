<?php

namespace KiddoKenshin\JapanPostBankConverter;

class JapanPostBankConverter
{
    // TODO: Split this part to a proper Util Class

    private function getAllBranchData()
    {
        return [
            '008' => ['name' => '〇〇八', 'kana' => 'ゼロゼロハチ'],
            '018' => ['name' => '〇一八', 'kana' => 'ゼロイチハチ'],
            '028' => ['name' => '〇二八', 'kana' => 'ゼロニハチ'],
            '038' => ['name' => '〇三八', 'kana' => 'ゼロサンハチ'],
            '048' => ['name' => '〇四八', 'kana' => 'ゼロヨンハチ'],
            '058' => ['name' => '〇五八', 'kana' => 'ゼロゴハチ'],
            '068' => ['name' => '〇六八', 'kana' => 'ゼロロクハチ'],
            '078' => ['name' => '〇七八', 'kana' => 'ゼロナナハチ'],
            '088' => ['name' => '〇八八', 'kana' => 'ゼロハチハチ'],
            '098' => ['name' => '〇九八', 'kana' => 'ゼロキユウハチ'],
            '108' => ['name' => '一〇八', 'kana' => 'イチゼロハチ'],
            '118' => ['name' => '一一八', 'kana' => 'イチイチハチ'],
            '128' => ['name' => '一二八', 'kana' => 'イチニハチ'],
            '138' => ['name' => '一三八', 'kana' => 'イチサンハチ'],
            '148' => ['name' => '一四八', 'kana' => 'イチヨンハチ'],
            '158' => ['name' => '一五八', 'kana' => 'イチゴハチ'],
            '168' => ['name' => '一六八', 'kana' => 'イチロクハチ'],
            '178' => ['name' => '一七八', 'kana' => 'イチナナハチ'],
            '188' => ['name' => '一八八', 'kana' => 'イチハチハチ'],
            '198' => ['name' => '一九八', 'kana' => 'イチキユウハチ'],
            '208' => ['name' => '二〇八', 'kana' => 'ニゼロハチ'],
            '218' => ['name' => '二一八', 'kana' => 'ニイチハチ'],
            '228' => ['name' => '二二八', 'kana' => 'ニニハチ'],
            '238' => ['name' => '二三八', 'kana' => 'ニサンハチ'],
            '248' => ['name' => '二四八', 'kana' => 'ニヨンハチ'],
            '258' => ['name' => '二五八', 'kana' => 'ニゴハチ'],
            '268' => ['name' => '二六八', 'kana' => 'ニロクハチ'],
            '278' => ['name' => '二七八', 'kana' => 'ニナナハチ'],
            '288' => ['name' => '二八八', 'kana' => 'ニハチハチ'],
            '298' => ['name' => '二九八', 'kana' => 'ニキユウハチ'],
            '308' => ['name' => '三〇八', 'kana' => 'サンゼロハチ'],
            '318' => ['name' => '三一八', 'kana' => 'サンイチハチ'],
            '328' => ['name' => '三二八', 'kana' => 'サンニハチ'],
            '338' => ['name' => '三三八', 'kana' => 'サンサンハチ'],
            '348' => ['name' => '三四八', 'kana' => 'サンヨンハチ'],
            '358' => ['name' => '三五八', 'kana' => 'サンゴハチ'],
            '368' => ['name' => '三六八', 'kana' => 'サンロクハチ'],
            '378' => ['name' => '三七八', 'kana' => 'サンナナハチ'],
            '388' => ['name' => '三八八', 'kana' => 'サンハチハチ'],
            '398' => ['name' => '三九八', 'kana' => 'サンキユウハチ'],
            '408' => ['name' => '四〇八', 'kana' => 'ヨンゼロハチ'],
            '418' => ['name' => '四一八', 'kana' => 'ヨンイチハチ'],
            '428' => ['name' => '四二八', 'kana' => 'ヨンニハチ'],
            '438' => ['name' => '四三八', 'kana' => 'ヨンサンハチ'],
            '448' => ['name' => '四四八', 'kana' => 'ヨンヨンハチ'],
            '458' => ['name' => '四五八', 'kana' => 'ヨンゴハチ'],
            '468' => ['name' => '四六八', 'kana' => 'ヨンロクハチ'],
            '478' => ['name' => '四七八', 'kana' => 'ヨンナナハチ'],
            '488' => ['name' => '四八八', 'kana' => 'ヨンハチハチ'],
            '498' => ['name' => '四九八', 'kana' => 'ヨンキユウハチ'],
            '508' => ['name' => '五〇八', 'kana' => 'ゴゼロハチ'],
            '518' => ['name' => '五一八', 'kana' => 'ゴイチハチ'],
            '528' => ['name' => '五二八', 'kana' => 'ゴニハチ'],
            '538' => ['name' => '五三八', 'kana' => 'ゴサンハチ'],
            '548' => ['name' => '五四八', 'kana' => 'ゴヨンハチ'],
            '558' => ['name' => '五五八', 'kana' => 'ゴゴハチ'],
            '568' => ['name' => '五六八', 'kana' => 'ゴロクハチ'],
            '578' => ['name' => '五七八', 'kana' => 'ゴナナハチ'],
            '588' => ['name' => '五八八', 'kana' => 'ゴハチハチ'],
            '598' => ['name' => '五九八', 'kana' => 'ゴキユウハチ'],
            '608' => ['name' => '六〇八', 'kana' => 'ロクゼロハチ'],
            '618' => ['name' => '六一八', 'kana' => 'ロクイチハチ'],
            '628' => ['name' => '六二八', 'kana' => 'ロクニハチ'],
            '638' => ['name' => '六三八', 'kana' => 'ロクサンハチ'],
            '648' => ['name' => '六四八', 'kana' => 'ロクヨンハチ'],
            '658' => ['name' => '六五八', 'kana' => 'ロクゴハチ'],
            '668' => ['name' => '六六八', 'kana' => 'ロクロクハチ'],
            '678' => ['name' => '六七八', 'kana' => 'ロクナナハチ'],
            '688' => ['name' => '六八八', 'kana' => 'ロクハチハチ'],
            '698' => ['name' => '六九八', 'kana' => 'ロクキユウハチ'],
            '708' => ['name' => '七〇八', 'kana' => 'ナナゼロハチ'],
            '718' => ['name' => '七一八', 'kana' => 'ナナイチハチ'],
            '728' => ['name' => '七二八', 'kana' => 'ナナニハチ'],
            '738' => ['name' => '七三八', 'kana' => 'ナナサンハチ'],
            '748' => ['name' => '七四八', 'kana' => 'ナナヨンハチ'],
            '758' => ['name' => '七五八', 'kana' => 'ナナゴハチ'],
            '768' => ['name' => '七六八', 'kana' => 'ナナロクハチ'],
            '778' => ['name' => '七七八', 'kana' => 'ナナナナハチ'],
            '788' => ['name' => '七八八', 'kana' => 'ナナハチハチ'],
            '798' => ['name' => '七九八', 'kana' => 'ナナキユウハチ'],
            '808' => ['name' => '八〇八', 'kana' => 'ハチゼロハチ'],
            '818' => ['name' => '八一八', 'kana' => 'ハチイチハチ'],
            '828' => ['name' => '八二八', 'kana' => 'ハチニハチ'],
            '838' => ['name' => '八三八', 'kana' => 'ハチサンハチ'],
            '848' => ['name' => '八四八', 'kana' => 'ハチヨンハチ'],
            '858' => ['name' => '八五八', 'kana' => 'ハチゴハチ'],
            '868' => ['name' => '八六八', 'kana' => 'ハチロクハチ'],
            '878' => ['name' => '八七八', 'kana' => 'ハチナナハチ'],
            '888' => ['name' => '八八八', 'kana' => 'ハチハチハチ'],
            '898' => ['name' => '八九八', 'kana' => 'ハチキユウハチ'],
            '908' => ['name' => '九〇八', 'kana' => 'キユウゼロハチ'],
            '918' => ['name' => '九一八', 'kana' => 'キユウイチハチ'],
            '928' => ['name' => '九二八', 'kana' => 'キユウニハチ'],
            '938' => ['name' => '九三八', 'kana' => 'キユウサンハチ'],
            '948' => ['name' => '九四八', 'kana' => 'キユウヨンハチ'],
            '958' => ['name' => '九五八', 'kana' => 'キユウゴハチ'],
            '968' => ['name' => '九六八', 'kana' => 'キユウロクハチ'],
            '978' => ['name' => '九七八', 'kana' => 'キユウナナハチ'],
            '988' => ['name' => '九八八', 'kana' => 'キユウハチハチ'],
            '998' => ['name' => '九九八', 'kana' => 'キユウキユウハチ'],
            '009' => ['name' => '〇〇九', 'kana' => 'ゼロゼロキユウ'],
            '019' => ['name' => '〇一九', 'kana' => 'ゼロイチキユウ'],
            '029' => ['name' => '〇二九', 'kana' => 'ゼロニキユウ'],
            '039' => ['name' => '〇三九', 'kana' => 'ゼロサンキユウ'],
            '049' => ['name' => '〇四九', 'kana' => 'ゼロヨンキユウ'],
            '059' => ['name' => '〇五九', 'kana' => 'ゼロゴキユウ'],
            '069' => ['name' => '〇六九', 'kana' => 'ゼロロクキユウ'],
            '079' => ['name' => '〇七九', 'kana' => 'ゼロナナキユウ'],
            '089' => ['name' => '〇八九', 'kana' => 'ゼロハチキユウ'],
            '099' => ['name' => '〇九九', 'kana' => 'ゼロキユウキユウ'],
            '109' => ['name' => '一〇九', 'kana' => 'イチゼロキユウ'],
            '119' => ['name' => '一一九', 'kana' => 'イチイチキユウ'],
            '129' => ['name' => '一二九', 'kana' => 'イチニキユウ'],
            '139' => ['name' => '一三九', 'kana' => 'イチサンキユウ'],
            '149' => ['name' => '一四九', 'kana' => 'イチヨンキユウ'],
            '159' => ['name' => '一五九', 'kana' => 'イチゴキユウ'],
            '169' => ['name' => '一六九', 'kana' => 'イチロクキユウ'],
            '179' => ['name' => '一七九', 'kana' => 'イチナナキユウ'],
            '189' => ['name' => '一八九', 'kana' => 'イチハチキユウ'],
            '199' => ['name' => '一九九', 'kana' => 'イチキユウキユウ'],
            '209' => ['name' => '二〇九', 'kana' => 'ニゼロキユウ'],
            '219' => ['name' => '二一九', 'kana' => 'ニイチキユウ'],
            '229' => ['name' => '二二九', 'kana' => 'ニニキユウ'],
            '239' => ['name' => '二三九', 'kana' => 'ニサンキユウ'],
            '249' => ['name' => '二四九', 'kana' => 'ニヨンキユウ'],
            '259' => ['name' => '二五九', 'kana' => 'ニゴキユウ'],
            '269' => ['name' => '二六九', 'kana' => 'ニロクキユウ'],
            '279' => ['name' => '二七九', 'kana' => 'ニナナキユウ'],
            '289' => ['name' => '二八九', 'kana' => 'ニハチキユウ'],
            '299' => ['name' => '二九九', 'kana' => 'ニキユウキユウ'],
            '309' => ['name' => '三〇九', 'kana' => 'サンゼロキユウ'],
            '319' => ['name' => '三一九', 'kana' => 'サンイチキユウ'],
            '329' => ['name' => '三二九', 'kana' => 'サンニキユウ'],
            '339' => ['name' => '三三九', 'kana' => 'サンサンキユウ'],
            '349' => ['name' => '三四九', 'kana' => 'サンヨンキユウ'],
            '359' => ['name' => '三五九', 'kana' => 'サンゴキユウ'],
            '369' => ['name' => '三六九', 'kana' => 'サンロクキユウ'],
            '379' => ['name' => '三七九', 'kana' => 'サンナナキユウ'],
            '389' => ['name' => '三八九', 'kana' => 'サンハチキユウ'],
            '399' => ['name' => '三九九', 'kana' => 'サンキユウキユウ'],
            '409' => ['name' => '四〇九', 'kana' => 'ヨンゼロキユウ'],
            '419' => ['name' => '四一九', 'kana' => 'ヨンイチキユウ'],
            '429' => ['name' => '四二九', 'kana' => 'ヨンニキユウ'],
            '439' => ['name' => '四三九', 'kana' => 'ヨンサンキユウ'],
            '449' => ['name' => '四四九', 'kana' => 'ヨンヨンキユウ'],
            '459' => ['name' => '四五九', 'kana' => 'ヨンゴキユウ'],
            '469' => ['name' => '四六九', 'kana' => 'ヨンロクキユウ'],
            '479' => ['name' => '四七九', 'kana' => 'ヨンナナキユウ'],
            '489' => ['name' => '四八九', 'kana' => 'ヨンハチキユウ'],
            '499' => ['name' => '四九九', 'kana' => 'ヨンキユウキユウ'],
            '509' => ['name' => '五〇九', 'kana' => 'ゴゼロキユウ'],
            '519' => ['name' => '五一九', 'kana' => 'ゴイチキユウ'],
            '529' => ['name' => '五二九', 'kana' => 'ゴニキユウ'],
            '539' => ['name' => '五三九', 'kana' => 'ゴサンキユウ'],
            '549' => ['name' => '五四九', 'kana' => 'ゴヨンキユウ'],
            '559' => ['name' => '五五九', 'kana' => 'ゴゴキユウ'],
            '569' => ['name' => '五六九', 'kana' => 'ゴロクキユウ'],
            '579' => ['name' => '五七九', 'kana' => 'ゴナナキユウ'],
            '589' => ['name' => '五八九', 'kana' => 'ゴハチキユウ'],
            '599' => ['name' => '五九九', 'kana' => 'ゴキユウキユウ'],
            '609' => ['name' => '六〇九', 'kana' => 'ロクゼロキユウ'],
            '619' => ['name' => '六一九', 'kana' => 'ロクイチキユウ'],
            '629' => ['name' => '六二九', 'kana' => 'ロクニキユウ'],
            '639' => ['name' => '六三九', 'kana' => 'ロクサンキユウ'],
            '649' => ['name' => '六四九', 'kana' => 'ロクヨンキユウ'],
            '659' => ['name' => '六五九', 'kana' => 'ロクゴキユウ'],
            '669' => ['name' => '六六九', 'kana' => 'ロクロクキユウ'],
            '679' => ['name' => '六七九', 'kana' => 'ロクナナキユウ'],
            '689' => ['name' => '六八九', 'kana' => 'ロクハチキユウ'],
            '699' => ['name' => '六九九', 'kana' => 'ロクキユウキユウ'],
            '709' => ['name' => '七〇九', 'kana' => 'ナナゼロキユウ'],
            '719' => ['name' => '七一九', 'kana' => 'ナナイチキユウ'],
            '729' => ['name' => '七二九', 'kana' => 'ナナニキユウ'],
            '739' => ['name' => '七三九', 'kana' => 'ナナサンキユウ'],
            '749' => ['name' => '七四九', 'kana' => 'ナナヨンキユウ'],
            '759' => ['name' => '七五九', 'kana' => 'ナナゴキユウ'],
            '769' => ['name' => '七六九', 'kana' => 'ナナロクキユウ'],
            '779' => ['name' => '七七九', 'kana' => 'ナナナナキユウ'],
            '789' => ['name' => '七八九', 'kana' => 'ナナハチキユウ'],
            '799' => ['name' => '七九九', 'kana' => 'ナナキユウキユウ'],
            '809' => ['name' => '八〇九', 'kana' => 'ハチゼロキユウ'],
            '819' => ['name' => '八一九', 'kana' => 'ハチイチキユウ'],
            '829' => ['name' => '八二九', 'kana' => 'ハチニキユウ'],
            '839' => ['name' => '八三九', 'kana' => 'ハチサンキユウ'],
            '849' => ['name' => '八四九', 'kana' => 'ハチヨンキユウ'],
            '859' => ['name' => '八五九', 'kana' => 'ハチゴキユウ'],
            '869' => ['name' => '八六九', 'kana' => 'ハチロクキユウ'],
            '879' => ['name' => '八七九', 'kana' => 'ハチナナキユウ'],
            '889' => ['name' => '八八九', 'kana' => 'ハチハチキユウ'],
            '899' => ['name' => '八九九', 'kana' => 'ハチキユウキユウ'],
            '909' => ['name' => '九〇九', 'kana' => 'キユウゼロキユウ'],
            '919' => ['name' => '九一九', 'kana' => 'キユウイチキユウ'],
            '929' => ['name' => '九二九', 'kana' => 'キユウニキユウ'],
            '939' => ['name' => '九三九', 'kana' => 'キユウサンキユウ'],
            '949' => ['name' => '九四九', 'kana' => 'キユウヨンキユウ'],
            '959' => ['name' => '九五九', 'kana' => 'キユウゴキユウ'],
            '969' => ['name' => '九六九', 'kana' => 'キユウロクキユウ'],
            '979' => ['name' => '九七九', 'kana' => 'キユウナナキユウ'],
            '989' => ['name' => '九八九', 'kana' => 'キユウハチキユウ'],
            '999' => ['name' => '九九九', 'kana' => 'キユウキユウキユウ']
        ];
    }

    private function getNumericKanjiTable()
    {
        return [
            '〇' => '0',
            '一' => '1',
            '二' => '2',
            '三' => '3',
            '四' => '4',
            '五' => '5',
            '六' => '6',
            '七' => '7',
            '八' => '8',
            '九' => '9'
        ];
    }

    private static function getBranchInfo($branchCode)
    {
        $allBranch = self::getAllBranchData();
        if (isset($allBranch[$branchCode])) {
            return $allBranch[$branchCode];
        }
        return null;
    }

    private static function isSavingAccount(String $kigouOrBranchCode, $toKigou = false)
    {
        if (!$toKigou && intval($kigouOrBranchCode[0]) == 1) {
            return true;
        } elseif ($toKigou && intval(substr($kigouOrBranchCode, -1)) == 8) {
            return true;
        }
        return false;
    }

    private static function getSpecialDigit($rawDigit)
    {
        $rawDigit *= 2;
        if ($rawDigit > 9) {
            $rawDigit -= 9;
        }
        return $rawDigit;
    }

    private static function getReplacementDigit($rawKigou, $rawBangou)
    {
        $splitKigou = str_split($rawKigou);
        $splitBangou = str_split(substr('00000000' . $rawBangou, -8));

        $replacementDigit = (
            // Kigou
            intval($splitKigou[0]) +
            (intval($splitKigou[1]) * 3) +
            self::getSpecialDigit(intval($splitKigou[2])) +
            (intval($splitKigou[4]) * 3) +
            // Bangou
            self::getSpecialDigit(intval($splitBangou[0])) +
            intval($splitBangou[1]) +
            (intval($splitBangou[2]) * 3) +
            self::getSpecialDigit(intval($splitBangou[3])) +
            intval($splitBangou[4]) +
            (intval($splitBangou[5]) * 3) +
            self::getSpecialDigit(intval($splitBangou[6])) +
            intval($splitBangou[7])
        ) % 10;
        return $replacementDigit;
    }

    //---------------- Public Usage ----------------//

    /**
     * Converts Kigou Bangou to Standard Bank Format.
     * (Provides Branch Code with it's Information, and Account Number)
     *
     * @param string $kigou | The 5 digit kigou
     * @param string $bangou | The (usually) 8 digit bangou
     * @return array|null Null when input is not numeric
     */
    public static function convertKigouBangouToStandardBankFormat(String $kigou, String $bangou)
    {
        if (!ctype_digit($kigou) || !ctype_digit($bangou)) {
            return null;
        }
        $isSaving = self::isSavingAccount($kigou);
        $branchCode = substr($kigou, 1, 2) . '9';
        $accountNumber = substr('0000000' . $bangou, -7);
        if ($isSaving) {
            $branchCode = substr($kigou, 1, 2) . '8';
            $accountNumber = substr(substr('00000000' . $bangou, -8), 0, 7);
        }
        $branchInfo = self::getBranchInfo($branchCode);
        return [
            'isSaving' => $isSaving,
            'branchCode' => $branchCode,
            'branchInfo' => $branchInfo,
            'accountNumber' => $accountNumber
        ];
    }

    /**
     * Converts Bank Format to Yuucho's Kigou Bangou code.
     * (Provides Kigou, and Bangou code)
     *
     * @param string $branchCode | The 3 digit BranchCode (Can be in Kanji Format)
     * @param string $accountNumber | The 7 digit AccountNumber
     * @return array|null Null when input is not numeric
     */
    public static function convertBankFormatToKigouBangou(String $branchCode, String $accountNumber)
    {
        // Convert Kanji BranchCode to Numeric
        if (preg_match('/^[〇一二三四五六七八九]+$/', $branchCode)) {
            $numericKanjiTable = self::getNumericKanjiTable();
            $splitted = preg_split('//u', $branchCode, -1, PREG_SPLIT_NO_EMPTY);
            $branchCode = '';
            foreach ($splitted as $char) {
                $branchCode .= $numericKanjiTable[$char];
            }
        }
        if (!ctype_digit($branchCode) || !ctype_digit($accountNumber)) {
            return null;
        }

        $rawKigou = '0' . substr($branchCode, 0, 2) . '#0';
        $rawBangou = $accountNumber;
        $isSaving = self::isSavingAccount($branchCode, true);
        if ($isSaving) {
            $rawKigou = '1' . substr($branchCode, 0, 2) . '#0';
            $rawBangou .= '1';
        }
        $replace = self::getReplacementDigit($rawKigou, $rawBangou);
        return [
            'isSaving' => $isSaving,
            'kigou' => str_replace('#', $replace, $rawKigou),
            'bangou' => strval(intval($rawBangou))
        ];
    }
}
