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
 * DescribeIgnoreHostAndItemConfig response structure.
 *
 * @method array getItemSet() Obtain Affected detection items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItemSet(array $ItemSet) Set Affected detection items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getHostSet() Obtain Affected hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostSet(array $HostSet) Set Affected hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeIgnoreHostAndItemConfigResponse extends AbstractModel
{
    /**
     * @var array Affected detection items
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ItemSet;

    /**
     * @var array Affected hosts
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostSet;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $ItemSet Affected detection items
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $HostSet Affected hosts
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ItemSet",$param) and $param["ItemSet"] !== null) {
            $this->ItemSet = [];
            foreach ($param["ItemSet"] as $key => $value){
                $obj = new BaselineItemInfo();
                $obj->deserialize($value);
                array_push($this->ItemSet, $obj);
            }
        }

        if (array_key_exists("HostSet",$param) and $param["HostSet"] !== null) {
            $this->HostSet = [];
            foreach ($param["HostSet"] as $key => $value){
                $obj = new BaselineHost();
                $obj->deserialize($value);
                array_push($this->HostSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}