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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesStatus response structure.
 *
 * @method integer getTotalCount() Obtain Number of instance states meeting the filtering conditions.
 * @method void setTotalCount(integer $TotalCount) Set Number of instance states meeting the filtering conditions.
 * @method array getInstanceStatusSet() Obtain [Instance status](https://cloud.tencent.com/document/api/213/15728) list.
 * @method void setInstanceStatusSet(array $InstanceStatusSet) Set [Instance status](https://cloud.tencent.com/document/api/213/15728) list.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeInstancesStatusResponse extends AbstractModel
{
    /**
     * @var integer Number of instance states meeting the filtering conditions.
     */
    public $TotalCount;

    /**
     * @var array [Instance status](https://cloud.tencent.com/document/api/213/15728) list.
     */
    public $InstanceStatusSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Number of instance states meeting the filtering conditions.
     * @param array $InstanceStatusSet [Instance status](https://cloud.tencent.com/document/api/213/15728) list.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("InstanceStatusSet",$param) and $param["InstanceStatusSet"] !== null) {
            $this->InstanceStatusSet = [];
            foreach ($param["InstanceStatusSet"] as $key => $value){
                $obj = new InstanceStatus();
                $obj->deserialize($value);
                array_push($this->InstanceStatusSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
