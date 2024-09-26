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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJob response structure.
 *
 * @method string getJobName() Obtain Job name
 * @method void setJobName(string $JobName) Set Job name
 * @method StatisticInfo getStatisticInfo() Obtain Task statistics information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatisticInfo(StatisticInfo $StatisticInfo) Set Task statistics information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobConfiguration() Obtain Job configuration
 * @method void setJobConfiguration(string $JobConfiguration) Set Job configuration
 * @method integer getJobStatus() Obtain Job status:
 * @method void setJobStatus(integer $JobStatus) Set Job status:
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeJobResponse extends AbstractModel
{
    /**
     * @var string Job name
     */
    public $JobName;

    /**
     * @var StatisticInfo Task statistics information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatisticInfo;

    /**
     * @var string Job configuration
     */
    public $JobConfiguration;

    /**
     * @var integer Job status:
     */
    public $JobStatus;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $JobName Job name
     * @param StatisticInfo $StatisticInfo Task statistics information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobConfiguration Job configuration
     * @param integer $JobStatus Job status:
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("StatisticInfo",$param) and $param["StatisticInfo"] !== null) {
            $this->StatisticInfo = new StatisticInfo();
            $this->StatisticInfo->deserialize($param["StatisticInfo"]);
        }

        if (array_key_exists("JobConfiguration",$param) and $param["JobConfiguration"] !== null) {
            $this->JobConfiguration = $param["JobConfiguration"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}