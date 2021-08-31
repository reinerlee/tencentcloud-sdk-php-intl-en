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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDashboard response structure.
 *
 * @method integer getZoneTotal() Obtain Total number of private domain DNS records
 * @method void setZoneTotal(integer $ZoneTotal) Set Total number of private domain DNS records
 * @method integer getZoneVpcCount() Obtain Number of VPCs associated with private domain
 * @method void setZoneVpcCount(integer $ZoneVpcCount) Set Number of VPCs associated with private domain
 * @method integer getRequestTotalCount() Obtain Total number of historical requests
 * @method void setRequestTotalCount(integer $RequestTotalCount) Set Total number of historical requests
 * @method array getFlowUsage() Obtain Traffic package usage
 * @method void setFlowUsage(array $FlowUsage) Set Traffic package usage
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDashboardResponse extends AbstractModel
{
    /**
     * @var integer Total number of private domain DNS records
     */
    public $ZoneTotal;

    /**
     * @var integer Number of VPCs associated with private domain
     */
    public $ZoneVpcCount;

    /**
     * @var integer Total number of historical requests
     */
    public $RequestTotalCount;

    /**
     * @var array Traffic package usage
     */
    public $FlowUsage;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ZoneTotal Total number of private domain DNS records
     * @param integer $ZoneVpcCount Number of VPCs associated with private domain
     * @param integer $RequestTotalCount Total number of historical requests
     * @param array $FlowUsage Traffic package usage
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
        if (array_key_exists("ZoneTotal",$param) and $param["ZoneTotal"] !== null) {
            $this->ZoneTotal = $param["ZoneTotal"];
        }

        if (array_key_exists("ZoneVpcCount",$param) and $param["ZoneVpcCount"] !== null) {
            $this->ZoneVpcCount = $param["ZoneVpcCount"];
        }

        if (array_key_exists("RequestTotalCount",$param) and $param["RequestTotalCount"] !== null) {
            $this->RequestTotalCount = $param["RequestTotalCount"];
        }

        if (array_key_exists("FlowUsage",$param) and $param["FlowUsage"] !== null) {
            $this->FlowUsage = [];
            foreach ($param["FlowUsage"] as $key => $value){
                $obj = new FlowUsage();
                $obj->deserialize($value);
                array_push($this->FlowUsage, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
