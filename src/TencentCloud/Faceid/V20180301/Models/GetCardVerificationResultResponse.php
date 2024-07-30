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
 * GetCardVerificationResult response structure.
 *
 * @method string getStatus() Obtain Pass status. When Warning and Rejected are returned, please check the specific reasons in the WarnInfo structure return. Example values are as follows:
PASSED
WARNING
REJECTED
PROCESSING
 * @method void setStatus(string $Status) Set Pass status. When Warning and Rejected are returned, please check the specific reasons in the WarnInfo structure return. Example values are as follows:
PASSED
WARNING
REJECTED
PROCESSING
 * @method array getWarnInfo() Obtain Warning information returned by document verification.
 * @method void setWarnInfo(array $WarnInfo) Set Warning information returned by document verification.
 * @method string getNationality() Obtain Nationality code. Complies with standard ISO 3166-1 alpha-3. 

Example value: IDN
 * @method void setNationality(string $Nationality) Set Nationality code. Complies with standard ISO 3166-1 alpha-3. 

Example value: IDN
 * @method string getCardType() Obtain Card Type. The supported options are:
ID_CARD
PASSPORT
DRIVING_LICENSE
AUTO

Example value: ID_CARD
 * @method void setCardType(string $CardType) Set Card Type. The supported options are:
ID_CARD
PASSPORT
DRIVING_LICENSE
AUTO

Example value: ID_CARD
 * @method string getCardSubType() Obtain Subtype of the ID document.

 * @method void setCardSubType(string $CardSubType) Set Subtype of the ID document.

 * @method CardInfo getCardInfo() Obtain Recognition results of the ID document.
 * @method void setCardInfo(CardInfo $CardInfo) Set Recognition results of the ID document.
 * @method string getIDVerificationToken() Obtain The token used to identify an verification process. It can be used to get the verification result after the process is completed.
 * @method void setIDVerificationToken(string $IDVerificationToken) Set The token used to identify an verification process. It can be used to get the verification result after the process is completed.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class GetCardVerificationResultResponse extends AbstractModel
{
    /**
     * @var string Pass status. When Warning and Rejected are returned, please check the specific reasons in the WarnInfo structure return. Example values are as follows:
PASSED
WARNING
REJECTED
PROCESSING
     */
    public $Status;

    /**
     * @var array Warning information returned by document verification.
     */
    public $WarnInfo;

    /**
     * @var string Nationality code. Complies with standard ISO 3166-1 alpha-3. 

Example value: IDN
     */
    public $Nationality;

    /**
     * @var string Card Type. The supported options are:
ID_CARD
PASSPORT
DRIVING_LICENSE
AUTO

Example value: ID_CARD
     */
    public $CardType;

    /**
     * @var string Subtype of the ID document.

     */
    public $CardSubType;

    /**
     * @var CardInfo Recognition results of the ID document.
     */
    public $CardInfo;

    /**
     * @var string The token used to identify an verification process. It can be used to get the verification result after the process is completed.
     */
    public $IDVerificationToken;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status Pass status. When Warning and Rejected are returned, please check the specific reasons in the WarnInfo structure return. Example values are as follows:
PASSED
WARNING
REJECTED
PROCESSING
     * @param array $WarnInfo Warning information returned by document verification.
     * @param string $Nationality Nationality code. Complies with standard ISO 3166-1 alpha-3. 

Example value: IDN
     * @param string $CardType Card Type. The supported options are:
ID_CARD
PASSPORT
DRIVING_LICENSE
AUTO

Example value: ID_CARD
     * @param string $CardSubType Subtype of the ID document.

     * @param CardInfo $CardInfo Recognition results of the ID document.
     * @param string $IDVerificationToken The token used to identify an verification process. It can be used to get the verification result after the process is completed.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("WarnInfo",$param) and $param["WarnInfo"] !== null) {
            $this->WarnInfo = $param["WarnInfo"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("CardSubType",$param) and $param["CardSubType"] !== null) {
            $this->CardSubType = $param["CardSubType"];
        }

        if (array_key_exists("CardInfo",$param) and $param["CardInfo"] !== null) {
            $this->CardInfo = new CardInfo();
            $this->CardInfo->deserialize($param["CardInfo"]);
        }

        if (array_key_exists("IDVerificationToken",$param) and $param["IDVerificationToken"] !== null) {
            $this->IDVerificationToken = $param["IDVerificationToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
