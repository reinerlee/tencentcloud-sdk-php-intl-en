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
 * DescribeVpcTaskResult response structure.
 *
 * @method string getStatus() Obtain The execution results of an async task. Valid values: `SUCCESS`(task executed successfully), `FAILED` (task execution failed), and `RUNNING` (task in progress). 
 * @method void setStatus(string $Status) Set The execution results of an async task. Valid values: `SUCCESS`(task executed successfully), `FAILED` (task execution failed), and `RUNNING` (task in progress). 
 * @method string getOutput() Obtain Output of the async task execution result
 * @method void setOutput(string $Output) Set Output of the async task execution result
 * @method array getResult() Obtain Detailed result of an async task, such as the result of batch deleting ENIs.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setResult(array $Result) Set Detailed result of an async task, such as the result of batch deleting ENIs.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVpcTaskResultResponse extends AbstractModel
{
    /**
     * @var string The execution results of an async task. Valid values: `SUCCESS`(task executed successfully), `FAILED` (task execution failed), and `RUNNING` (task in progress). 
     */
    public $Status;

    /**
     * @var string Output of the async task execution result
     */
    public $Output;

    /**
     * @var array Detailed result of an async task, such as the result of batch deleting ENIs.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Result;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status The execution results of an async task. Valid values: `SUCCESS`(task executed successfully), `FAILED` (task execution failed), and `RUNNING` (task in progress). 
     * @param string $Output Output of the async task execution result
     * @param array $Result Detailed result of an async task, such as the result of batch deleting ENIs.
Note: this field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = [];
            foreach ($param["Result"] as $key => $value){
                $obj = new VpcTaskResultDetailInfo();
                $obj->deserialize($value);
                array_push($this->Result, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
