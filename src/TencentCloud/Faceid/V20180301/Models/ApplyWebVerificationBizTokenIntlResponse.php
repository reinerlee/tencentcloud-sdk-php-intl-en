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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyWebVerificationBizTokenIntl response structure.
 *
 * @method string getVerificationUrl() Obtain The URL of this verification process, which will be returned to the frontend of the browser for starting the process.
 * @method void setVerificationUrl(string $VerificationUrl) Set The URL of this verification process, which will be returned to the frontend of the browser for starting the process.
 * @method string getBizToken() Obtain The token identifying this web-based verification process, valid for 7,200s after issuance. It is required for getting the result after the verification process is completed.
 * @method void setBizToken(string $BizToken) Set The token identifying this web-based verification process, valid for 7,200s after issuance. It is required for getting the result after the verification process is completed.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ApplyWebVerificationBizTokenIntlResponse extends AbstractModel
{
    /**
     * @var string The URL of this verification process, which will be returned to the frontend of the browser for starting the process.
     */
    public $VerificationUrl;

    /**
     * @var string The token identifying this web-based verification process, valid for 7,200s after issuance. It is required for getting the result after the verification process is completed.
     */
    public $BizToken;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $VerificationUrl The URL of this verification process, which will be returned to the frontend of the browser for starting the process.
     * @param string $BizToken The token identifying this web-based verification process, valid for 7,200s after issuance. It is required for getting the result after the verification process is completed.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("VerificationUrl",$param) and $param["VerificationUrl"] !== null) {
            $this->VerificationUrl = $param["VerificationUrl"];
        }

        if (array_key_exists("BizToken",$param) and $param["BizToken"] !== null) {
            $this->BizToken = $param["BizToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}