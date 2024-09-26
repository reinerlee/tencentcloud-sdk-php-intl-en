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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Guardrail policy triggering log
 *
 * @method integer getTaskId() Obtain Experiment ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(integer $TaskId) Set Experiment ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTriggerType() Obtain Type. 0: trigger; 1: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerType(integer $TriggerType) Set Type. 0: trigger; 1: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContent() Obtain Content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContent(string $Content) Set Content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatTime() Obtain Triggering time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatTime(string $CreatTime) Set Triggering time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PolicyTriggerLog extends AbstractModel
{
    /**
     * @var integer Experiment ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer Type. 0: trigger; 1: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerType;

    /**
     * @var string Content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Content;

    /**
     * @var string Triggering time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatTime;

    /**
     * @param integer $TaskId Experiment ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TriggerType Type. 0: trigger; 1: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Content Content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatTime Triggering time
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CreatTime",$param) and $param["CreatTime"] !== null) {
            $this->CreatTime = $param["CreatTime"];
        }
    }
}