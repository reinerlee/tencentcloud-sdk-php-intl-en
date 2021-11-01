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
 * Alarm policy description
 *
 * @method string getName() Obtain Alarm policy name
 * @method void setName(string $Name) Set Alarm policy name
 * @method array getAlarmTargets() Obtain Monitoring object list
 * @method void setAlarmTargets(array $AlarmTargets) Set Monitoring object list
 * @method MonitorTime getMonitorTime() Obtain Monitoring task running time point
 * @method void setMonitorTime(MonitorTime $MonitorTime) Set Monitoring task running time point
 * @method string getCondition() Obtain Trigger condition
 * @method void setCondition(string $Condition) Set Trigger condition
 * @method integer getTriggerCount() Obtain Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
 * @method void setTriggerCount(integer $TriggerCount) Set Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
 * @method integer getAlarmPeriod() Obtain Repeated alarm interval in minutes. Value range: 0–1440.
 * @method void setAlarmPeriod(integer $AlarmPeriod) Set Repeated alarm interval in minutes. Value range: 0–1440.
 * @method array getAlarmNoticeIds() Obtain List of associated alarm notification templates
 * @method void setAlarmNoticeIds(array $AlarmNoticeIds) Set List of associated alarm notification templates
 * @method boolean getStatus() Obtain Enablement status
 * @method void setStatus(boolean $Status) Set Enablement status
 * @method string getAlarmId() Obtain Alarm policy ID
 * @method void setAlarmId(string $AlarmId) Set Alarm policy ID
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Last update time
 * @method void setUpdateTime(string $UpdateTime) Set Last update time
 * @method string getMessageTemplate() Obtain Custom notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMessageTemplate(string $MessageTemplate) Set Custom notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method CallBackInfo getCallBack() Obtain Custom callback template
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCallBack(CallBackInfo $CallBack) Set Custom callback template
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getAnalysis() Obtain Multi-Dimensional analysis settings
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAnalysis(array $Analysis) Set Multi-Dimensional analysis settings
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class AlarmInfo extends AbstractModel
{
    /**
     * @var string Alarm policy name
     */
    public $Name;

    /**
     * @var array Monitoring object list
     */
    public $AlarmTargets;

    /**
     * @var MonitorTime Monitoring task running time point
     */
    public $MonitorTime;

    /**
     * @var string Trigger condition
     */
    public $Condition;

    /**
     * @var integer Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
     */
    public $TriggerCount;

    /**
     * @var integer Repeated alarm interval in minutes. Value range: 0–1440.
     */
    public $AlarmPeriod;

    /**
     * @var array List of associated alarm notification templates
     */
    public $AlarmNoticeIds;

    /**
     * @var boolean Enablement status
     */
    public $Status;

    /**
     * @var string Alarm policy ID
     */
    public $AlarmId;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Last update time
     */
    public $UpdateTime;

    /**
     * @var string Custom notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MessageTemplate;

    /**
     * @var CallBackInfo Custom callback template
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CallBack;

    /**
     * @var array Multi-Dimensional analysis settings
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Analysis;

    /**
     * @param string $Name Alarm policy name
     * @param array $AlarmTargets Monitoring object list
     * @param MonitorTime $MonitorTime Monitoring task running time point
     * @param string $Condition Trigger condition
     * @param integer $TriggerCount Alarm persistence cycle. An alarm will be triggered only after the corresponding trigger condition is met for the number of times specified by `TriggerCount`. Value range: 1–10.
     * @param integer $AlarmPeriod Repeated alarm interval in minutes. Value range: 0–1440.
     * @param array $AlarmNoticeIds List of associated alarm notification templates
     * @param boolean $Status Enablement status
     * @param string $AlarmId Alarm policy ID
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Last update time
     * @param string $MessageTemplate Custom notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param CallBackInfo $CallBack Custom callback template
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Analysis Multi-Dimensional analysis settings
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AlarmTargets",$param) and $param["AlarmTargets"] !== null) {
            $this->AlarmTargets = [];
            foreach ($param["AlarmTargets"] as $key => $value){
                $obj = new AlarmTargetInfo();
                $obj->deserialize($value);
                array_push($this->AlarmTargets, $obj);
            }
        }

        if (array_key_exists("MonitorTime",$param) and $param["MonitorTime"] !== null) {
            $this->MonitorTime = new MonitorTime();
            $this->MonitorTime->deserialize($param["MonitorTime"]);
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("TriggerCount",$param) and $param["TriggerCount"] !== null) {
            $this->TriggerCount = $param["TriggerCount"];
        }

        if (array_key_exists("AlarmPeriod",$param) and $param["AlarmPeriod"] !== null) {
            $this->AlarmPeriod = $param["AlarmPeriod"];
        }

        if (array_key_exists("AlarmNoticeIds",$param) and $param["AlarmNoticeIds"] !== null) {
            $this->AlarmNoticeIds = $param["AlarmNoticeIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MessageTemplate",$param) and $param["MessageTemplate"] !== null) {
            $this->MessageTemplate = $param["MessageTemplate"];
        }

        if (array_key_exists("CallBack",$param) and $param["CallBack"] !== null) {
            $this->CallBack = new CallBackInfo();
            $this->CallBack->deserialize($param["CallBack"]);
        }

        if (array_key_exists("Analysis",$param) and $param["Analysis"] !== null) {
            $this->Analysis = [];
            foreach ($param["Analysis"] as $key => $value){
                $obj = new AnalysisDimensional();
                $obj->deserialize($value);
                array_push($this->Analysis, $obj);
            }
        }
    }
}
