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
 * DescribeContainerAssetSummary response structure.
 *
 * @method integer getContainerTotalCnt() Obtain Total number of containers
 * @method void setContainerTotalCnt(integer $ContainerTotalCnt) Set Total number of containers
 * @method integer getContainerRunningCnt() Obtain Number of running containers
 * @method void setContainerRunningCnt(integer $ContainerRunningCnt) Set Number of running containers
 * @method integer getContainerPauseCnt() Obtain Number of suspended containers
 * @method void setContainerPauseCnt(integer $ContainerPauseCnt) Set Number of suspended containers
 * @method integer getContainerStopped() Obtain Number of stopped containers
 * @method void setContainerStopped(integer $ContainerStopped) Set Number of stopped containers
 * @method integer getImageCnt() Obtain Number of local images
 * @method void setImageCnt(integer $ImageCnt) Set Number of local images
 * @method integer getHostCnt() Obtain Number of server nodes
 * @method void setHostCnt(integer $HostCnt) Set Number of server nodes
 * @method integer getHostRunningCnt() Obtain Number of running nodes on the server
 * @method void setHostRunningCnt(integer $HostRunningCnt) Set Number of running nodes on the server
 * @method integer getHostOfflineCnt() Obtain Number of offline nodes on the server
 * @method void setHostOfflineCnt(integer $HostOfflineCnt) Set Number of offline nodes on the server
 * @method integer getImageRegistryCnt() Obtain Number of image repositories
 * @method void setImageRegistryCnt(integer $ImageRegistryCnt) Set Number of image repositories
 * @method integer getImageTotalCnt() Obtain Total number of images
 * @method void setImageTotalCnt(integer $ImageTotalCnt) Set Total number of images
 * @method integer getHostUnInstallCnt() Obtain Number of servers not installed with the agent
 * @method void setHostUnInstallCnt(integer $HostUnInstallCnt) Set Number of servers not installed with the agent
 * @method integer getHostSuperNodeCnt() Obtain Number of super nodes
 * @method void setHostSuperNodeCnt(integer $HostSuperNodeCnt) Set Number of super nodes
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeContainerAssetSummaryResponse extends AbstractModel
{
    /**
     * @var integer Total number of containers
     */
    public $ContainerTotalCnt;

    /**
     * @var integer Number of running containers
     */
    public $ContainerRunningCnt;

    /**
     * @var integer Number of suspended containers
     */
    public $ContainerPauseCnt;

    /**
     * @var integer Number of stopped containers
     */
    public $ContainerStopped;

    /**
     * @var integer Number of local images
     */
    public $ImageCnt;

    /**
     * @var integer Number of server nodes
     */
    public $HostCnt;

    /**
     * @var integer Number of running nodes on the server
     */
    public $HostRunningCnt;

    /**
     * @var integer Number of offline nodes on the server
     */
    public $HostOfflineCnt;

    /**
     * @var integer Number of image repositories
     */
    public $ImageRegistryCnt;

    /**
     * @var integer Total number of images
     */
    public $ImageTotalCnt;

    /**
     * @var integer Number of servers not installed with the agent
     */
    public $HostUnInstallCnt;

    /**
     * @var integer Number of super nodes
     */
    public $HostSuperNodeCnt;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ContainerTotalCnt Total number of containers
     * @param integer $ContainerRunningCnt Number of running containers
     * @param integer $ContainerPauseCnt Number of suspended containers
     * @param integer $ContainerStopped Number of stopped containers
     * @param integer $ImageCnt Number of local images
     * @param integer $HostCnt Number of server nodes
     * @param integer $HostRunningCnt Number of running nodes on the server
     * @param integer $HostOfflineCnt Number of offline nodes on the server
     * @param integer $ImageRegistryCnt Number of image repositories
     * @param integer $ImageTotalCnt Total number of images
     * @param integer $HostUnInstallCnt Number of servers not installed with the agent
     * @param integer $HostSuperNodeCnt Number of super nodes
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
        if (array_key_exists("ContainerTotalCnt",$param) and $param["ContainerTotalCnt"] !== null) {
            $this->ContainerTotalCnt = $param["ContainerTotalCnt"];
        }

        if (array_key_exists("ContainerRunningCnt",$param) and $param["ContainerRunningCnt"] !== null) {
            $this->ContainerRunningCnt = $param["ContainerRunningCnt"];
        }

        if (array_key_exists("ContainerPauseCnt",$param) and $param["ContainerPauseCnt"] !== null) {
            $this->ContainerPauseCnt = $param["ContainerPauseCnt"];
        }

        if (array_key_exists("ContainerStopped",$param) and $param["ContainerStopped"] !== null) {
            $this->ContainerStopped = $param["ContainerStopped"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("HostCnt",$param) and $param["HostCnt"] !== null) {
            $this->HostCnt = $param["HostCnt"];
        }

        if (array_key_exists("HostRunningCnt",$param) and $param["HostRunningCnt"] !== null) {
            $this->HostRunningCnt = $param["HostRunningCnt"];
        }

        if (array_key_exists("HostOfflineCnt",$param) and $param["HostOfflineCnt"] !== null) {
            $this->HostOfflineCnt = $param["HostOfflineCnt"];
        }

        if (array_key_exists("ImageRegistryCnt",$param) and $param["ImageRegistryCnt"] !== null) {
            $this->ImageRegistryCnt = $param["ImageRegistryCnt"];
        }

        if (array_key_exists("ImageTotalCnt",$param) and $param["ImageTotalCnt"] !== null) {
            $this->ImageTotalCnt = $param["ImageTotalCnt"];
        }

        if (array_key_exists("HostUnInstallCnt",$param) and $param["HostUnInstallCnt"] !== null) {
            $this->HostUnInstallCnt = $param["HostUnInstallCnt"];
        }

        if (array_key_exists("HostSuperNodeCnt",$param) and $param["HostSuperNodeCnt"] !== null) {
            $this->HostSuperNodeCnt = $param["HostSuperNodeCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
