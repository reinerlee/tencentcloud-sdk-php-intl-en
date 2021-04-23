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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTopic request structure.
 *
 * @method string getTopicName() Obtain Log topic name
 * @method void setTopicName(string $TopicName) Set Log topic name
 * @method integer getPartitionCount() Obtain The number of topic partitions, which changes as partitions are split or merged. Each log topic can have up to 50 partitions. If this parameter is not passed in, 1 partition will be created by default and up to 10 partitions are allowed to be created.
 * @method void setPartitionCount(integer $PartitionCount) Set The number of topic partitions, which changes as partitions are split or merged. Each log topic can have up to 50 partitions. If this parameter is not passed in, 1 partition will be created by default and up to 10 partitions are allowed to be created.
 * @method string getTopicType() Obtain Log type. Valid values: ACCESS (access logs; default value) and HEALTH (health check logs).
 * @method void setTopicType(string $TopicType) Set Log type. Valid values: ACCESS (access logs; default value) and HEALTH (health check logs).
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string Log topic name
     */
    public $TopicName;

    /**
     * @var integer The number of topic partitions, which changes as partitions are split or merged. Each log topic can have up to 50 partitions. If this parameter is not passed in, 1 partition will be created by default and up to 10 partitions are allowed to be created.
     */
    public $PartitionCount;

    /**
     * @var string Log type. Valid values: ACCESS (access logs; default value) and HEALTH (health check logs).
     */
    public $TopicType;

    /**
     * @param string $TopicName Log topic name
     * @param integer $PartitionCount The number of topic partitions, which changes as partitions are split or merged. Each log topic can have up to 50 partitions. If this parameter is not passed in, 1 partition will be created by default and up to 10 partitions are allowed to be created.
     * @param string $TopicType Log type. Valid values: ACCESS (access logs; default value) and HEALTH (health check logs).
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }
    }
}
