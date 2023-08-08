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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PostQuantumCryptoEncrypt request structure.
 *
 * @method string getKeyId() Obtain Globally unique ID of the CMK generated by calling the `CreateKey` API
 * @method void setKeyId(string $KeyId) Set Globally unique ID of the CMK generated by calling the `CreateKey` API
 * @method string getPlainText() Obtain Encrypted plaintext data. This field must be Base64-encoded. The maximum size of the original data is 4 KB.
 * @method void setPlainText(string $PlainText) Set Encrypted plaintext data. This field must be Base64-encoded. The maximum size of the original data is 4 KB.
 */
class PostQuantumCryptoEncryptRequest extends AbstractModel
{
    /**
     * @var string Globally unique ID of the CMK generated by calling the `CreateKey` API
     */
    public $KeyId;

    /**
     * @var string Encrypted plaintext data. This field must be Base64-encoded. The maximum size of the original data is 4 KB.
     */
    public $PlainText;

    /**
     * @param string $KeyId Globally unique ID of the CMK generated by calling the `CreateKey` API
     * @param string $PlainText Encrypted plaintext data. This field must be Base64-encoded. The maximum size of the original data is 4 KB.
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("PlainText",$param) and $param["PlainText"] !== null) {
            $this->PlainText = $param["PlainText"];
        }
    }
}