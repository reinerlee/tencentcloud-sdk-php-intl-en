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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateService response structure.
 *
 * @method string getServiceId() Obtain Unique service ID.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
 * @method string getServiceName() Obtain Custom service name.
 * @method void setServiceName(string $ServiceName) Set Custom service name.
 * @method string getServiceDesc() Obtain Custom service description.
 * @method void setServiceDesc(string $ServiceDesc) Set Custom service description.
 * @method string getOuterSubDomain() Obtain Default public network domain name.
 * @method void setOuterSubDomain(string $OuterSubDomain) Set Default public network domain name.
 * @method string getInnerSubDomain() Obtain Default private network domain name of VPC
 * @method void setInnerSubDomain(string $InnerSubDomain) Set Default private network domain name of VPC
 * @method string getCreatedTime() Obtain Service creation time in the format of `YYYY-MM-DDThh:mm:ssZ` according to ISO 8601 standard. UTC time is used.
 * @method void setCreatedTime(string $CreatedTime) Set Service creation time in the format of `YYYY-MM-DDThh:mm:ssZ` according to ISO 8601 standard. UTC time is used.
 * @method array getNetTypes() Obtain Network type list. INNER: private network access; OUTER: public network access.
 * @method void setNetTypes(array $NetTypes) Set Network type list. INNER: private network access; OUTER: public network access.
 * @method string getIpVersion() Obtain IP version number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpVersion(string $IpVersion) Set IP version number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateServiceResponse extends AbstractModel
{
    /**
     * @var string Unique service ID.
     */
    public $ServiceId;

    /**
     * @var string Custom service name.
     */
    public $ServiceName;

    /**
     * @var string Custom service description.
     */
    public $ServiceDesc;

    /**
     * @var string Default public network domain name.
     */
    public $OuterSubDomain;

    /**
     * @var string Default private network domain name of VPC
     */
    public $InnerSubDomain;

    /**
     * @var string Service creation time in the format of `YYYY-MM-DDThh:mm:ssZ` according to ISO 8601 standard. UTC time is used.
     */
    public $CreatedTime;

    /**
     * @var array Network type list. INNER: private network access; OUTER: public network access.
     */
    public $NetTypes;

    /**
     * @var string IP version number.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IpVersion;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ServiceId Unique service ID.
     * @param string $ServiceName Custom service name.
     * @param string $ServiceDesc Custom service description.
     * @param string $OuterSubDomain Default public network domain name.
     * @param string $InnerSubDomain Default private network domain name of VPC
     * @param string $CreatedTime Service creation time in the format of `YYYY-MM-DDThh:mm:ssZ` according to ISO 8601 standard. UTC time is used.
     * @param array $NetTypes Network type list. INNER: private network access; OUTER: public network access.
     * @param string $IpVersion IP version number.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("OuterSubDomain",$param) and $param["OuterSubDomain"] !== null) {
            $this->OuterSubDomain = $param["OuterSubDomain"];
        }

        if (array_key_exists("InnerSubDomain",$param) and $param["InnerSubDomain"] !== null) {
            $this->InnerSubDomain = $param["InnerSubDomain"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("NetTypes",$param) and $param["NetTypes"] !== null) {
            $this->NetTypes = $param["NetTypes"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
