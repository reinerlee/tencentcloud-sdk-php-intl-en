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
 * DescribeStorageData response structure.
 *
 * @method integer getMediaCount() Obtain Total number of current media files.
 * @method void setMediaCount(integer $MediaCount) Set Total number of current media files.
 * @method integer getTotalStorage() Obtain Total current storage capacity in bytes.
 * @method void setTotalStorage(integer $TotalStorage) Set Total current storage capacity in bytes.
 * @method integer getInfrequentStorage() Obtain Current Standard_IA storage capacity in bytes.
 * @method void setInfrequentStorage(integer $InfrequentStorage) Set Current Standard_IA storage capacity in bytes.
 * @method integer getStandardStorage() Obtain Current Standard storage capacity in bytes.
 * @method void setStandardStorage(integer $StandardStorage) Set Current Standard storage capacity in bytes.
 * @method array getStorageStat() Obtain Storage usage by billing region.
 * @method void setStorageStat(array $StorageStat) Set Storage usage by billing region.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeStorageDataResponse extends AbstractModel
{
    /**
     * @var integer Total number of current media files.
     */
    public $MediaCount;

    /**
     * @var integer Total current storage capacity in bytes.
     */
    public $TotalStorage;

    /**
     * @var integer Current Standard_IA storage capacity in bytes.
     */
    public $InfrequentStorage;

    /**
     * @var integer Current Standard storage capacity in bytes.
     */
    public $StandardStorage;

    /**
     * @var array Storage usage by billing region.
     */
    public $StorageStat;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $MediaCount Total number of current media files.
     * @param integer $TotalStorage Total current storage capacity in bytes.
     * @param integer $InfrequentStorage Current Standard_IA storage capacity in bytes.
     * @param integer $StandardStorage Current Standard storage capacity in bytes.
     * @param array $StorageStat Storage usage by billing region.
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
        if (array_key_exists("MediaCount",$param) and $param["MediaCount"] !== null) {
            $this->MediaCount = $param["MediaCount"];
        }

        if (array_key_exists("TotalStorage",$param) and $param["TotalStorage"] !== null) {
            $this->TotalStorage = $param["TotalStorage"];
        }

        if (array_key_exists("InfrequentStorage",$param) and $param["InfrequentStorage"] !== null) {
            $this->InfrequentStorage = $param["InfrequentStorage"];
        }

        if (array_key_exists("StandardStorage",$param) and $param["StandardStorage"] !== null) {
            $this->StandardStorage = $param["StandardStorage"];
        }

        if (array_key_exists("StorageStat",$param) and $param["StorageStat"] !== null) {
            $this->StorageStat = [];
            foreach ($param["StorageStat"] as $key => $value){
                $obj = new StorageStatData();
                $obj->deserialize($value);
                array_push($this->StorageStat, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
