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
 * DescribeProvinceIspPlayInfoList request structure.
 *
 * @method string getStartTime() Obtain Start point in time (Beijing time).
Example: 2019-02-21 10:00:00.
 * @method void setStartTime(string $StartTime) Set Start point in time (Beijing time).
Example: 2019-02-21 10:00:00.
 * @method string getEndTime() Obtain End point in time (Beijing time).
Example: 2019-02-21 12:00:00.
Note: `EndTime` and `StartTime` only support querying data for the last day.
 * @method void setEndTime(string $EndTime) Set End point in time (Beijing time).
Example: 2019-02-21 12:00:00.
Note: `EndTime` and `StartTime` only support querying data for the last day.
 * @method integer getGranularity() Obtain Supported granularities:
1: 1-minute granularity (the query interval should be within 1 day)
 * @method void setGranularity(integer $Granularity) Set Supported granularities:
1: 1-minute granularity (the query interval should be within 1 day)
 * @method string getStatType() Obtain Statistical metric type:
"Bandwidth": bandwidth
"FluxPerSecond": average traffic
"Flux": traffic
"Request": number of requests
"Online": number of concurrent connections
 * @method void setStatType(string $StatType) Set Statistical metric type:
"Bandwidth": bandwidth
"FluxPerSecond": average traffic
"Flux": traffic
"Request": number of requests
"Online": number of concurrent connections
 * @method array getPlayDomains() Obtain Playback domain name list.
 * @method void setPlayDomains(array $PlayDomains) Set Playback domain name list.
 * @method array getProvinceNames() Obtain List of the districts to be queried, such as Beijing.
 * @method void setProvinceNames(array $ProvinceNames) Set List of the districts to be queried, such as Beijing.
 * @method array getIspNames() Obtain List of the ISPs to be queried, such as China Mobile. If this parameter is left empty, the data of all ISPs will be queried.
 * @method void setIspNames(array $IspNames) Set List of the ISPs to be queried, such as China Mobile. If this parameter is left empty, the data of all ISPs will be queried.
 * @method string getMainlandOrOversea() Obtain Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
 * @method void setMainlandOrOversea(string $MainlandOrOversea) Set Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
 */
class DescribeProvinceIspPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string Start point in time (Beijing time).
Example: 2019-02-21 10:00:00.
     */
    public $StartTime;

    /**
     * @var string End point in time (Beijing time).
Example: 2019-02-21 12:00:00.
Note: `EndTime` and `StartTime` only support querying data for the last day.
     */
    public $EndTime;

    /**
     * @var integer Supported granularities:
1: 1-minute granularity (the query interval should be within 1 day)
     */
    public $Granularity;

    /**
     * @var string Statistical metric type:
"Bandwidth": bandwidth
"FluxPerSecond": average traffic
"Flux": traffic
"Request": number of requests
"Online": number of concurrent connections
     */
    public $StatType;

    /**
     * @var array Playback domain name list.
     */
    public $PlayDomains;

    /**
     * @var array List of the districts to be queried, such as Beijing.
     */
    public $ProvinceNames;

    /**
     * @var array List of the ISPs to be queried, such as China Mobile. If this parameter is left empty, the data of all ISPs will be queried.
     */
    public $IspNames;

    /**
     * @var string Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
     */
    public $MainlandOrOversea;

    /**
     * @param string $StartTime Start point in time (Beijing time).
Example: 2019-02-21 10:00:00.
     * @param string $EndTime End point in time (Beijing time).
Example: 2019-02-21 12:00:00.
Note: `EndTime` and `StartTime` only support querying data for the last day.
     * @param integer $Granularity Supported granularities:
1: 1-minute granularity (the query interval should be within 1 day)
     * @param string $StatType Statistical metric type:
"Bandwidth": bandwidth
"FluxPerSecond": average traffic
"Flux": traffic
"Request": number of requests
"Online": number of concurrent connections
     * @param array $PlayDomains Playback domain name list.
     * @param array $ProvinceNames List of the districts to be queried, such as Beijing.
     * @param array $IspNames List of the ISPs to be queried, such as China Mobile. If this parameter is left empty, the data of all ISPs will be queried.
     * @param string $MainlandOrOversea Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }

        if (array_key_exists("ProvinceNames",$param) and $param["ProvinceNames"] !== null) {
            $this->ProvinceNames = $param["ProvinceNames"];
        }

        if (array_key_exists("IspNames",$param) and $param["IspNames"] !== null) {
            $this->IspNames = $param["IspNames"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }
    }
}