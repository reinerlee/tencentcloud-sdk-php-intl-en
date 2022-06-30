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
 * DescribeCmqQueues request structure.
 *
 * @method integer getOffset() Obtain Starting position of the list of queues to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
 * @method void setOffset(integer $Offset) Set Starting position of the list of queues to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
 * @method integer getLimit() Obtain Number of queues to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
 * @method void setLimit(integer $Limit) Set Number of queues to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
 * @method string getQueueName() Obtain Filter by `QueueName`
 * @method void setQueueName(string $QueueName) Set Filter by `QueueName`
 * @method array getQueueNameList() Obtain List of CMQ queue names
 * @method void setQueueNameList(array $QueueNameList) Set List of CMQ queue names
 * @method boolean getIsTagFilter() Obtain For filtering by tag, this must be configured to `true`.
 * @method void setIsTagFilter(boolean $IsTagFilter) Set For filtering by tag, this must be configured to `true`.
 * @method array getFilters() Obtain Filter. Currently, you can filter only by tag.
 * @method void setFilters(array $Filters) Set Filter. Currently, you can filter only by tag.
 */
class DescribeCmqQueuesRequest extends AbstractModel
{
    /**
     * @var integer Starting position of the list of queues to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
     */
    public $Offset;

    /**
     * @var integer Number of queues to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
     */
    public $Limit;

    /**
     * @var string Filter by `QueueName`
     */
    public $QueueName;

    /**
     * @var array List of CMQ queue names
     */
    public $QueueNameList;

    /**
     * @var boolean For filtering by tag, this must be configured to `true`.
     */
    public $IsTagFilter;

    /**
     * @var array Filter. Currently, you can filter only by tag.
     */
    public $Filters;

    /**
     * @param integer $Offset Starting position of the list of queues to be returned on the current page in case of paginated return. If a value is entered, `limit` is required. If this parameter is left empty, 0 will be used by default
     * @param integer $Limit Number of queues to be returned per page in case of paginated return. If this parameter is not passed in, 20 will be used by default. Maximum value: 50.
     * @param string $QueueName Filter by `QueueName`
     * @param array $QueueNameList List of CMQ queue names
     * @param boolean $IsTagFilter For filtering by tag, this must be configured to `true`.
     * @param array $Filters Filter. Currently, you can filter only by tag.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("QueueNameList",$param) and $param["QueueNameList"] !== null) {
            $this->QueueNameList = $param["QueueNameList"];
        }

        if (array_key_exists("IsTagFilter",$param) and $param["IsTagFilter"] !== null) {
            $this->IsTagFilter = $param["IsTagFilter"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
