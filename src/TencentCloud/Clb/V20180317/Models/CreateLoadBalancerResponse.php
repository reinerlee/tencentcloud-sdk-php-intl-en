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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLoadBalancer response structure.
 *
 * @method array getLoadBalancerIds() Obtain Array of unique CLB instance IDs.
This field may return `null` in some cases, such as there is delay during instance creation. You can query the IDs of the created instances by invoking `DescribeTaskStatus` with the `RequestId` or `DealName` returned by this API.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set Array of unique CLB instance IDs.
This field may return `null` in some cases, such as there is delay during instance creation. You can query the IDs of the created instances by invoking `DescribeTaskStatus` with the `RequestId` or `DealName` returned by this API.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDealName() Obtain Order ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDealName(string $DealName) Set Order ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateLoadBalancerResponse extends AbstractModel
{
    /**
     * @var array Array of unique CLB instance IDs.
This field may return `null` in some cases, such as there is delay during instance creation. You can query the IDs of the created instances by invoking `DescribeTaskStatus` with the `RequestId` or `DealName` returned by this API.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LoadBalancerIds;

    /**
     * @var string Order ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DealName;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $LoadBalancerIds Array of unique CLB instance IDs.
This field may return `null` in some cases, such as there is delay during instance creation. You can query the IDs of the created instances by invoking `DescribeTaskStatus` with the `RequestId` or `DealName` returned by this API.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $DealName Order ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
