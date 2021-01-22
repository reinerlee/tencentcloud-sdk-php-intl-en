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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReviewDetails response structure.
 *
 * @method integer getTotalCount() Obtain Times of initiating intelligent content recognition tasks.
 * @method void setTotalCount(integer $TotalCount) Set Times of initiating intelligent content recognition tasks.
 * @method integer getTotalDuration() Obtain Duration of intelligent recognition content.
 * @method void setTotalDuration(integer $TotalDuration) Set Duration of intelligent recognition content.
 * @method array getData() Obtain Data of intelligent recognition content duration. One piece of data is collected every day.
 * @method void setData(array $Data) Set Data of intelligent recognition content duration. One piece of data is collected every day.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeReviewDetailsResponse extends AbstractModel
{
    /**
     * @var integer Times of initiating intelligent content recognition tasks.
     */
    public $TotalCount;

    /**
     * @var integer Duration of intelligent recognition content.
     */
    public $TotalDuration;

    /**
     * @var array Data of intelligent recognition content duration. One piece of data is collected every day.
     */
    public $Data;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Times of initiating intelligent content recognition tasks.
     * @param integer $TotalDuration Duration of intelligent recognition content.
     * @param array $Data Data of intelligent recognition content duration. One piece of data is collected every day.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalDuration",$param) and $param["TotalDuration"] !== null) {
            $this->TotalDuration = $param["TotalDuration"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new StatDataItem();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
