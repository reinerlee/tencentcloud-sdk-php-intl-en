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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimeWindow response structure.
 *
 * @method array getMonday() Obtain List of maintenance time windows on Monday.
 * @method void setMonday(array $Monday) Set List of maintenance time windows on Monday.
 * @method array getTuesday() Obtain List of maintenance time windows on Tuesday.
 * @method void setTuesday(array $Tuesday) Set List of maintenance time windows on Tuesday.
 * @method array getWednesday() Obtain List of maintenance time windows on Wednesday.
 * @method void setWednesday(array $Wednesday) Set List of maintenance time windows on Wednesday.
 * @method array getThursday() Obtain List of maintenance time windows on Thursday.
 * @method void setThursday(array $Thursday) Set List of maintenance time windows on Thursday.
 * @method array getFriday() Obtain List of maintenance time windows on Friday.
 * @method void setFriday(array $Friday) Set List of maintenance time windows on Friday.
 * @method array getSaturday() Obtain List of maintenance time windows on Saturday.
 * @method void setSaturday(array $Saturday) Set List of maintenance time windows on Saturday.
 * @method array getSunday() Obtain List of maintenance time windows on Sunday.
 * @method void setSunday(array $Sunday) Set List of maintenance time windows on Sunday.
 * @method integer getMaxDelayTime() Obtain Maximum data delay threshold
 * @method void setMaxDelayTime(integer $MaxDelayTime) Set Maximum data delay threshold
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTimeWindowResponse extends AbstractModel
{
    /**
     * @var array List of maintenance time windows on Monday.
     */
    public $Monday;

    /**
     * @var array List of maintenance time windows on Tuesday.
     */
    public $Tuesday;

    /**
     * @var array List of maintenance time windows on Wednesday.
     */
    public $Wednesday;

    /**
     * @var array List of maintenance time windows on Thursday.
     */
    public $Thursday;

    /**
     * @var array List of maintenance time windows on Friday.
     */
    public $Friday;

    /**
     * @var array List of maintenance time windows on Saturday.
     */
    public $Saturday;

    /**
     * @var array List of maintenance time windows on Sunday.
     */
    public $Sunday;

    /**
     * @var integer Maximum data delay threshold
     */
    public $MaxDelayTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Monday List of maintenance time windows on Monday.
     * @param array $Tuesday List of maintenance time windows on Tuesday.
     * @param array $Wednesday List of maintenance time windows on Wednesday.
     * @param array $Thursday List of maintenance time windows on Thursday.
     * @param array $Friday List of maintenance time windows on Friday.
     * @param array $Saturday List of maintenance time windows on Saturday.
     * @param array $Sunday List of maintenance time windows on Sunday.
     * @param integer $MaxDelayTime Maximum data delay threshold
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
        if (array_key_exists("Monday",$param) and $param["Monday"] !== null) {
            $this->Monday = $param["Monday"];
        }

        if (array_key_exists("Tuesday",$param) and $param["Tuesday"] !== null) {
            $this->Tuesday = $param["Tuesday"];
        }

        if (array_key_exists("Wednesday",$param) and $param["Wednesday"] !== null) {
            $this->Wednesday = $param["Wednesday"];
        }

        if (array_key_exists("Thursday",$param) and $param["Thursday"] !== null) {
            $this->Thursday = $param["Thursday"];
        }

        if (array_key_exists("Friday",$param) and $param["Friday"] !== null) {
            $this->Friday = $param["Friday"];
        }

        if (array_key_exists("Saturday",$param) and $param["Saturday"] !== null) {
            $this->Saturday = $param["Saturday"];
        }

        if (array_key_exists("Sunday",$param) and $param["Sunday"] !== null) {
            $this->Sunday = $param["Sunday"];
        }

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
