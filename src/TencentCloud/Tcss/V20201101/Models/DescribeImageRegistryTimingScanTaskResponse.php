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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageRegistryTimingScanTask response structure.
 *
 * @method boolean getEnable() Obtain Scheduled scan switch
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnable(boolean $Enable) Set Scheduled scan switch
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanTime() Obtain Scheduled scan time
 * @method void setScanTime(string $ScanTime) Set Scheduled scan time
 * @method integer getScanPeriod() Obtain Scheduled scan interval
 * @method void setScanPeriod(integer $ScanPeriod) Set Scheduled scan interval
 * @method array getScanType() Obtain Array of scan types
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanType(array $ScanType) Set Array of scan types
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAll() Obtain Scan of all images
 * @method void setAll(boolean $All) Set Scan of all images
 * @method array getImages() Obtain Scan of specified images
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImages(array $Images) Set Scan of specified images
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getId() Obtain ID of the specified image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(array $Id) Set ID of the specified image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getLatest() Obtain Whether to scan the latest image tag
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method void setLatest(boolean $Latest) Set Whether to scan the latest image tag
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method string getScanEndTime() Obtain 
 * @method void setScanEndTime(string $ScanEndTime) Set 
 * @method array getRegistryType() Obtain 
 * @method void setRegistryType(array $RegistryType) Set 
 * @method boolean getContainerRunning() Obtain 
 * @method void setContainerRunning(boolean $ContainerRunning) Set 
 * @method integer getScanScope() Obtain 
 * @method void setScanScope(integer $ScanScope) Set 
 * @method array getNamespace() Obtain 
 * @method void setNamespace(array $Namespace) Set 
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeImageRegistryTimingScanTaskResponse extends AbstractModel
{
    /**
     * @var boolean Scheduled scan switch
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @var string Scheduled scan time
     */
    public $ScanTime;

    /**
     * @var integer Scheduled scan interval
     */
    public $ScanPeriod;

    /**
     * @var array Array of scan types
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanType;

    /**
     * @var boolean Scan of all images
     * @deprecated
     */
    public $All;

    /**
     * @var array Scan of specified images
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Images;

    /**
     * @var array ID of the specified image
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var boolean Whether to scan the latest image tag
Note: This field may return·`null`, indicating that no valid values can be obtained.
     */
    public $Latest;

    /**
     * @var string 
     */
    public $ScanEndTime;

    /**
     * @var array 
     */
    public $RegistryType;

    /**
     * @var boolean 
     */
    public $ContainerRunning;

    /**
     * @var integer 
     */
    public $ScanScope;

    /**
     * @var array 
     */
    public $Namespace;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $Enable Scheduled scan switch
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanTime Scheduled scan time
     * @param integer $ScanPeriod Scheduled scan interval
     * @param array $ScanType Array of scan types
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $All Scan of all images
     * @param array $Images Scan of specified images
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Id ID of the specified image
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Latest Whether to scan the latest image tag
Note: This field may return·`null`, indicating that no valid values can be obtained.
     * @param string $ScanEndTime 
     * @param array $RegistryType 
     * @param boolean $ContainerRunning 
     * @param integer $ScanScope 
     * @param array $Namespace 
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("ScanPeriod",$param) and $param["ScanPeriod"] !== null) {
            $this->ScanPeriod = $param["ScanPeriod"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Latest",$param) and $param["Latest"] !== null) {
            $this->Latest = $param["Latest"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ContainerRunning",$param) and $param["ContainerRunning"] !== null) {
            $this->ContainerRunning = $param["ContainerRunning"];
        }

        if (array_key_exists("ScanScope",$param) and $param["ScanScope"] !== null) {
            $this->ScanScope = $param["ScanScope"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
