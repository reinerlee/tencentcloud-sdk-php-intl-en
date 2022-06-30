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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNetworkInterfaceLimit response structure.
 *
 * @method integer getEniQuantity() Obtain Quota of ENIs mounted to a CVM instance in a standard way
 * @method void setEniQuantity(integer $EniQuantity) Set Quota of ENIs mounted to a CVM instance in a standard way
 * @method integer getEniPrivateIpAddressQuantity() Obtain Quota of IP addresses that can be allocated to each standard-mounted ENI
 * @method void setEniPrivateIpAddressQuantity(integer $EniPrivateIpAddressQuantity) Set Quota of IP addresses that can be allocated to each standard-mounted ENI
 * @method integer getExtendEniQuantity() Obtain Quota of ENIs mounted to a CVM instance as an extension
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setExtendEniQuantity(integer $ExtendEniQuantity) Set Quota of ENIs mounted to a CVM instance as an extension
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getExtendEniPrivateIpAddressQuantity() Obtain Quota of IP addresses that can be allocated to each extension-mounted ENI.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setExtendEniPrivateIpAddressQuantity(integer $ExtendEniPrivateIpAddressQuantity) Set Quota of IP addresses that can be allocated to each extension-mounted ENI.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getSubEniQuantity() Obtain The quota of relayed ENIs
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubEniQuantity(integer $SubEniQuantity) Set The quota of relayed ENIs
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getSubEniPrivateIpAddressQuantity() Obtain The quota of IPs that can be assigned to each relayed ENI.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubEniPrivateIpAddressQuantity(integer $SubEniPrivateIpAddressQuantity) Set The quota of IPs that can be assigned to each relayed ENI.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeNetworkInterfaceLimitResponse extends AbstractModel
{
    /**
     * @var integer Quota of ENIs mounted to a CVM instance in a standard way
     */
    public $EniQuantity;

    /**
     * @var integer Quota of IP addresses that can be allocated to each standard-mounted ENI
     */
    public $EniPrivateIpAddressQuantity;

    /**
     * @var integer Quota of ENIs mounted to a CVM instance as an extension
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExtendEniQuantity;

    /**
     * @var integer Quota of IP addresses that can be allocated to each extension-mounted ENI.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExtendEniPrivateIpAddressQuantity;

    /**
     * @var integer The quota of relayed ENIs
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubEniQuantity;

    /**
     * @var integer The quota of IPs that can be assigned to each relayed ENI.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubEniPrivateIpAddressQuantity;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $EniQuantity Quota of ENIs mounted to a CVM instance in a standard way
     * @param integer $EniPrivateIpAddressQuantity Quota of IP addresses that can be allocated to each standard-mounted ENI
     * @param integer $ExtendEniQuantity Quota of ENIs mounted to a CVM instance as an extension
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ExtendEniPrivateIpAddressQuantity Quota of IP addresses that can be allocated to each extension-mounted ENI.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $SubEniQuantity The quota of relayed ENIs
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $SubEniPrivateIpAddressQuantity The quota of IPs that can be assigned to each relayed ENI.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("EniQuantity",$param) and $param["EniQuantity"] !== null) {
            $this->EniQuantity = $param["EniQuantity"];
        }

        if (array_key_exists("EniPrivateIpAddressQuantity",$param) and $param["EniPrivateIpAddressQuantity"] !== null) {
            $this->EniPrivateIpAddressQuantity = $param["EniPrivateIpAddressQuantity"];
        }

        if (array_key_exists("ExtendEniQuantity",$param) and $param["ExtendEniQuantity"] !== null) {
            $this->ExtendEniQuantity = $param["ExtendEniQuantity"];
        }

        if (array_key_exists("ExtendEniPrivateIpAddressQuantity",$param) and $param["ExtendEniPrivateIpAddressQuantity"] !== null) {
            $this->ExtendEniPrivateIpAddressQuantity = $param["ExtendEniPrivateIpAddressQuantity"];
        }

        if (array_key_exists("SubEniQuantity",$param) and $param["SubEniQuantity"] !== null) {
            $this->SubEniQuantity = $param["SubEniQuantity"];
        }

        if (array_key_exists("SubEniPrivateIpAddressQuantity",$param) and $param["SubEniPrivateIpAddressQuantity"] !== null) {
            $this->SubEniPrivateIpAddressQuantity = $param["SubEniPrivateIpAddressQuantity"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
