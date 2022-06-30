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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Consumption progress details
 *
 * @method integer getPartitions() Obtain Current partition ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPartitions(integer $Partitions) Set Current partition ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getNumberOfEntries() Obtain Number of messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNumberOfEntries(integer $NumberOfEntries) Set Number of messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMsgBacklog() Obtain Number of retained messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgBacklog(integer $MsgBacklog) Set Number of retained messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMsgRateOut() Obtain Sum of the numbers of messages delivered by the consumer per second.
 * @method void setMsgRateOut(string $MsgRateOut) Set Sum of the numbers of messages delivered by the consumer per second.
 * @method string getMsgThroughputOut() Obtain Number of bytes of messages consumed by the consumer per second.
 * @method void setMsgThroughputOut(string $MsgThroughputOut) Set Number of bytes of messages consumed by the consumer per second.
 * @method string getMsgRateExpired() Obtain Percentage of messages discarded due to timeout.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgRateExpired(string $MsgRateExpired) Set Percentage of messages discarded due to timeout.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ConsumersSchedule extends AbstractModel
{
    /**
     * @var integer Current partition ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Partitions;

    /**
     * @var integer Number of messages.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NumberOfEntries;

    /**
     * @var integer Number of retained messages.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgBacklog;

    /**
     * @var string Sum of the numbers of messages delivered by the consumer per second.
     */
    public $MsgRateOut;

    /**
     * @var string Number of bytes of messages consumed by the consumer per second.
     */
    public $MsgThroughputOut;

    /**
     * @var string Percentage of messages discarded due to timeout.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgRateExpired;

    /**
     * @param integer $Partitions Current partition ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $NumberOfEntries Number of messages.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MsgBacklog Number of retained messages.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MsgRateOut Sum of the numbers of messages delivered by the consumer per second.
     * @param string $MsgThroughputOut Number of bytes of messages consumed by the consumer per second.
     * @param string $MsgRateExpired Percentage of messages discarded due to timeout.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("NumberOfEntries",$param) and $param["NumberOfEntries"] !== null) {
            $this->NumberOfEntries = $param["NumberOfEntries"];
        }

        if (array_key_exists("MsgBacklog",$param) and $param["MsgBacklog"] !== null) {
            $this->MsgBacklog = $param["MsgBacklog"];
        }

        if (array_key_exists("MsgRateOut",$param) and $param["MsgRateOut"] !== null) {
            $this->MsgRateOut = $param["MsgRateOut"];
        }

        if (array_key_exists("MsgThroughputOut",$param) and $param["MsgThroughputOut"] !== null) {
            $this->MsgThroughputOut = $param["MsgThroughputOut"];
        }

        if (array_key_exists("MsgRateExpired",$param) and $param["MsgRateExpired"] !== null) {
            $this->MsgRateExpired = $param["MsgRateExpired"];
        }
    }
}
