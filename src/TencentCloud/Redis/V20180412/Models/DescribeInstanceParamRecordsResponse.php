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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceParamRecords response structure.
 *
 * @method integer getTotalCount() Obtain Total number of modifications.
 * @method void setTotalCount(integer $TotalCount) Set Total number of modifications.
 * @method array getInstanceParamHistory() Obtain Information of modifications.
 * @method void setInstanceParamHistory(array $InstanceParamHistory) Set Information of modifications.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeInstanceParamRecordsResponse extends AbstractModel
{
    /**
     * @var integer Total number of modifications.
     */
    public $TotalCount;

    /**
     * @var array Information of modifications.
     */
    public $InstanceParamHistory;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of modifications.
     * @param array $InstanceParamHistory Information of modifications.
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

        if (array_key_exists("InstanceParamHistory",$param) and $param["InstanceParamHistory"] !== null) {
            $this->InstanceParamHistory = [];
            foreach ($param["InstanceParamHistory"] as $key => $value){
                $obj = new InstanceParamHistory();
                $obj->deserialize($value);
                array_push($this->InstanceParamHistory, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}