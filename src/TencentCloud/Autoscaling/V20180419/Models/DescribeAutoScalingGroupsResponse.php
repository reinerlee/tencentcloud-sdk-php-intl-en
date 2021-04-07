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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoScalingGroups response structure.
 *
 * @method array getAutoScalingGroupSet() Obtain List of auto scaling group details.
 * @method void setAutoScalingGroupSet(array $AutoScalingGroupSet) Set List of auto scaling group details.
 * @method integer getTotalCount() Obtain Number of eligible auto scaling groups.
 * @method void setTotalCount(integer $TotalCount) Set Number of eligible auto scaling groups.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAutoScalingGroupsResponse extends AbstractModel
{
    /**
     * @var array List of auto scaling group details.
     */
    public $AutoScalingGroupSet;

    /**
     * @var integer Number of eligible auto scaling groups.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $AutoScalingGroupSet List of auto scaling group details.
     * @param integer $TotalCount Number of eligible auto scaling groups.
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
        if (array_key_exists("AutoScalingGroupSet",$param) and $param["AutoScalingGroupSet"] !== null) {
            $this->AutoScalingGroupSet = [];
            foreach ($param["AutoScalingGroupSet"] as $key => $value){
                $obj = new AutoScalingGroup();
                $obj->deserialize($value);
                array_push($this->AutoScalingGroupSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
