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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendVerifyCode request structure.
 *
 * @method string getCountryCode() Obtain Country code.
 * @method void setCountryCode(string $CountryCode) Set Country code.
 * @method string getPhoneNum() Obtain Mobile number.
 * @method void setPhoneNum(string $PhoneNum) Set Mobile number.
 */
class SendVerifyCodeRequest extends AbstractModel
{
    /**
     * @var string Country code.
     */
    public $CountryCode;

    /**
     * @var string Mobile number.
     */
    public $PhoneNum;

    /**
     * @param string $CountryCode Country code.
     * @param string $PhoneNum Mobile number.
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
        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }
    }
}
