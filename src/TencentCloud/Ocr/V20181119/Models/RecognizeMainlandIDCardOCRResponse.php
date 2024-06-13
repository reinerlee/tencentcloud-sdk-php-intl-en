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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizeMainlandIDCardOCR response structure.
 *
 * @method string getName() Obtain Name((portrait side))
 * @method void setName(string $Name) Set Name((portrait side))
 * @method string getSex() Obtain Sex((portrait side))
 * @method void setSex(string $Sex) Set Sex((portrait side))
 * @method string getNation() Obtain Nation((portrait side))
 * @method void setNation(string $Nation) Set Nation((portrait side))
 * @method string getBirth() Obtain Brithday((portrait side))
 * @method void setBirth(string $Birth) Set Brithday((portrait side))
 * @method string getAddress() Obtain Address(portrait side)
 * @method void setAddress(string $Address) Set Address(portrait side)
 * @method string getIdNum() Obtain ID number (portrait side)
 * @method void setIdNum(string $IdNum) Set ID number (portrait side)
 * @method string getAuthority() Obtain Card authority(national emblem side)
 * @method void setAuthority(string $Authority) Set Card authority(national emblem side)
 * @method string getValidDate() Obtain Card valid date (national emblem side)
 * @method void setValidDate(string $ValidDate) Set Card valid date (national emblem side)
 * @method array getWarnCardInfos() Obtain Card Warning Information

-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9104 Alarm for PS certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
 * @method void setWarnCardInfos(array $WarnCardInfos) Set Card Warning Information

-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9104 Alarm for PS certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
 * @method string getPortraitImage() Obtain Portrait image base64
 * @method void setPortraitImage(string $PortraitImage) Set Portrait image base64
 * @method string getIdCardImage() Obtain ID card photo cropping results base64
 * @method void setIdCardImage(string $IdCardImage) Set ID card photo cropping results base64
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class RecognizeMainlandIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string Name((portrait side))
     */
    public $Name;

    /**
     * @var string Sex((portrait side))
     */
    public $Sex;

    /**
     * @var string Nation((portrait side))
     */
    public $Nation;

    /**
     * @var string Brithday((portrait side))
     */
    public $Birth;

    /**
     * @var string Address(portrait side)
     */
    public $Address;

    /**
     * @var string ID number (portrait side)
     */
    public $IdNum;

    /**
     * @var string Card authority(national emblem side)
     */
    public $Authority;

    /**
     * @var string Card valid date (national emblem side)
     */
    public $ValidDate;

    /**
     * @var array Card Warning Information

-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9104 Alarm for PS certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
     */
    public $WarnCardInfos;

    /**
     * @var string Portrait image base64
     */
    public $PortraitImage;

    /**
     * @var string ID card photo cropping results base64
     */
    public $IdCardImage;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Name Name((portrait side))
     * @param string $Sex Sex((portrait side))
     * @param string $Nation Nation((portrait side))
     * @param string $Birth Brithday((portrait side))
     * @param string $Address Address(portrait side)
     * @param string $IdNum ID number (portrait side)
     * @param string $Authority Card authority(national emblem side)
     * @param string $ValidDate Card valid date (national emblem side)
     * @param array $WarnCardInfos Card Warning Information

-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9104 Alarm for PS certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
     * @param string $PortraitImage Portrait image base64
     * @param string $IdCardImage ID card photo cropping results base64
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Birth",$param) and $param["Birth"] !== null) {
            $this->Birth = $param["Birth"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Authority",$param) and $param["Authority"] !== null) {
            $this->Authority = $param["Authority"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("PortraitImage",$param) and $param["PortraitImage"] !== null) {
            $this->PortraitImage = $param["PortraitImage"];
        }

        if (array_key_exists("IdCardImage",$param) and $param["IdCardImage"] !== null) {
            $this->IdCardImage = $param["IdCardImage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
