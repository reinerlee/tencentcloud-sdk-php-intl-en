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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceState response structure.
 *
 * @method string getInstanceState() Obtain Cluster status. Example: Serving
 * @method void setInstanceState(string $InstanceState) Set Cluster status. Example: Serving
 * @method string getFlowCreateTime() Obtain Creation time of cluster operation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowCreateTime(string $FlowCreateTime) Set Creation time of cluster operation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFlowName() Obtain Cluster operation name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowName(string $FlowName) Set Cluster operation name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getFlowProgress() Obtain Cluster operation progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowProgress(float $FlowProgress) Set Cluster operation progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceStateDesc() Obtain Cluster status description. Example: running
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceStateDesc(string $InstanceStateDesc) Set Cluster status description. Example: running
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFlowMsg() Obtain Cluster process error messages, such as "Creation failed, insufficient resources"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowMsg(string $FlowMsg) Set Cluster process error messages, such as "Creation failed, insufficient resources"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeInstanceStateResponse extends AbstractModel
{
    /**
     * @var string Cluster status. Example: Serving
     */
    public $InstanceState;

    /**
     * @var string Creation time of cluster operation
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowCreateTime;

    /**
     * @var string Cluster operation name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowName;

    /**
     * @var float Cluster operation progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowProgress;

    /**
     * @var string Cluster status description. Example: running
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceStateDesc;

    /**
     * @var string Cluster process error messages, such as "Creation failed, insufficient resources"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowMsg;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceState Cluster status. Example: Serving
     * @param string $FlowCreateTime Creation time of cluster operation
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FlowName Cluster operation name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $FlowProgress Cluster operation progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceStateDesc Cluster status description. Example: running
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FlowMsg Cluster process error messages, such as "Creation failed, insufficient resources"
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
        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("FlowCreateTime",$param) and $param["FlowCreateTime"] !== null) {
            $this->FlowCreateTime = $param["FlowCreateTime"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowProgress",$param) and $param["FlowProgress"] !== null) {
            $this->FlowProgress = $param["FlowProgress"];
        }

        if (array_key_exists("InstanceStateDesc",$param) and $param["InstanceStateDesc"] !== null) {
            $this->InstanceStateDesc = $param["InstanceStateDesc"];
        }

        if (array_key_exists("FlowMsg",$param) and $param["FlowMsg"] !== null) {
            $this->FlowMsg = $param["FlowMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}