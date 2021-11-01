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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIndex response structure.
 *
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method boolean getStatus() Obtain Whether it takes effect
 * @method void setStatus(boolean $Status) Set Whether it takes effect
 * @method RuleInfo getRule() Obtain Index configuration information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRule(RuleInfo $Rule) Set Index configuration information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Index modification time. The default value is the index creation time.
 * @method void setModifyTime(string $ModifyTime) Set Index modification time. The default value is the index creation time.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeIndexResponse extends AbstractModel
{
    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var boolean Whether it takes effect
     */
    public $Status;

    /**
     * @var RuleInfo Index configuration information
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Rule;

    /**
     * @var string Index modification time. The default value is the index creation time.
     */
    public $ModifyTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TopicId Log topic ID
     * @param boolean $Status Whether it takes effect
     * @param RuleInfo $Rule Index configuration information
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ModifyTime Index modification time. The default value is the index creation time.
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new RuleInfo();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
