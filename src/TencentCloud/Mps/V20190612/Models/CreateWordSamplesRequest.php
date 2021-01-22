<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWordSamples request structure.
 *
 * @method array getUsages() Obtain <b>Keyword use case. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based detection of inappropriate content;
4. Review.Asr：ASR-based detection of inappropriate content;
<b>These values can be merged as follows:</b>
5. Recognition: ASR- and OCR-based content recognition, equivalent to 1+2 above;
6. Review: ASR- and OCR-based detection of inappropriate content, equivalent to 3+4 above;
7. All: ASR- and OCR-based content recognition and detection of inappropriate content, equivalent to 1+2+3+4 above;
 * @method void setUsages(array $Usages) Set <b>Keyword use case. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based detection of inappropriate content;
4. Review.Asr：ASR-based detection of inappropriate content;
<b>These values can be merged as follows:</b>
5. Recognition: ASR- and OCR-based content recognition, equivalent to 1+2 above;
6. Review: ASR- and OCR-based detection of inappropriate content, equivalent to 3+4 above;
7. All: ASR- and OCR-based content recognition and detection of inappropriate content, equivalent to 1+2+3+4 above;
 * @method array getWords() Obtain Keyword. Array length limit: 100.
 * @method void setWords(array $Words) Set Keyword. Array length limit: 100.
 */
class CreateWordSamplesRequest extends AbstractModel
{
    /**
     * @var array <b>Keyword use case. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based detection of inappropriate content;
4. Review.Asr：ASR-based detection of inappropriate content;
<b>These values can be merged as follows:</b>
5. Recognition: ASR- and OCR-based content recognition, equivalent to 1+2 above;
6. Review: ASR- and OCR-based detection of inappropriate content, equivalent to 3+4 above;
7. All: ASR- and OCR-based content recognition and detection of inappropriate content, equivalent to 1+2+3+4 above;
     */
    public $Usages;

    /**
     * @var array Keyword. Array length limit: 100.
     */
    public $Words;

    /**
     * @param array $Usages <b>Keyword use case. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based detection of inappropriate content;
4. Review.Asr：ASR-based detection of inappropriate content;
<b>These values can be merged as follows:</b>
5. Recognition: ASR- and OCR-based content recognition, equivalent to 1+2 above;
6. Review: ASR- and OCR-based detection of inappropriate content, equivalent to 3+4 above;
7. All: ASR- and OCR-based content recognition and detection of inappropriate content, equivalent to 1+2+3+4 above;
     * @param array $Words Keyword. Array length limit: 100.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Usages",$param) and $param["Usages"] !== null) {
            $this->Usages = $param["Usages"];
        }

        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new AiSampleWordInfo();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }
    }
}
