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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamDayPlayInfoList request structure.
 *
 * @method string getDayTime() Obtain Date in the format of `YYYY-mm-dd`.
Data is available at 3 AM the next day. You are recommended to query the latest data after this time point.
 * @method void setDayTime(string $DayTime) Set Date in the format of `YYYY-mm-dd`.
Data is available at 3 AM the next day. You are recommended to query the latest data after this time point.
 * @method string getPlayDomain() Obtain Playback domain name.
 * @method void setPlayDomain(string $PlayDomain) Set Playback domain name.
 * @method integer getPageNum() Obtain Page number. Value range: [1,1000]. Default value: 1.
 * @method void setPageNum(integer $PageNum) Set Page number. Value range: [1,1000]. Default value: 1.
 * @method integer getPageSize() Obtain Number of entries per page. Value range: [100,1000]. Default value: 1,000.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page. Value range: [100,1000]. Default value: 1,000.
 */
class DescribeStreamDayPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string Date in the format of `YYYY-mm-dd`.
Data is available at 3 AM the next day. You are recommended to query the latest data after this time point.
     */
    public $DayTime;

    /**
     * @var string Playback domain name.
     */
    public $PlayDomain;

    /**
     * @var integer Page number. Value range: [1,1000]. Default value: 1.
     */
    public $PageNum;

    /**
     * @var integer Number of entries per page. Value range: [100,1000]. Default value: 1,000.
     */
    public $PageSize;

    /**
     * @param string $DayTime Date in the format of `YYYY-mm-dd`.
Data is available at 3 AM the next day. You are recommended to query the latest data after this time point.
     * @param string $PlayDomain Playback domain name.
     * @param integer $PageNum Page number. Value range: [1,1000]. Default value: 1.
     * @param integer $PageSize Number of entries per page. Value range: [100,1000]. Default value: 1,000.
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
        if (array_key_exists("DayTime",$param) and $param["DayTime"] !== null) {
            $this->DayTime = $param["DayTime"];
        }

        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}