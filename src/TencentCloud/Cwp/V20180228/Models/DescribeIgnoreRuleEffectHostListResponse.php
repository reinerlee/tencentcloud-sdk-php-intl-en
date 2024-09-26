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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIgnoreRuleEffectHostList response structure.
 *
 * @method array getIgnoreRuleEffectHostList() Obtain List of hosts affected by ignored check items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIgnoreRuleEffectHostList(array $IgnoreRuleEffectHostList) Set List of hosts affected by ignored check items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of records for paging query
 * @method void setTotalCount(integer $TotalCount) Set Total number of records for paging query
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeIgnoreRuleEffectHostListResponse extends AbstractModel
{
    /**
     * @var array List of hosts affected by ignored check items
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IgnoreRuleEffectHostList;

    /**
     * @var integer Total number of records for paging query
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $IgnoreRuleEffectHostList List of hosts affected by ignored check items
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of records for paging query
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
        if (array_key_exists("IgnoreRuleEffectHostList",$param) and $param["IgnoreRuleEffectHostList"] !== null) {
            $this->IgnoreRuleEffectHostList = [];
            foreach ($param["IgnoreRuleEffectHostList"] as $key => $value){
                $obj = new IgnoreRuleEffectHostInfo();
                $obj->deserialize($value);
                array_push($this->IgnoreRuleEffectHostList, $obj);
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