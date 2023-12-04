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
 * DescribeAssetSummary response structure.
 *
 * @method integer getAppCnt() Obtain Number of applications
 * @method void setAppCnt(integer $AppCnt) Set Number of applications
 * @method integer getContainerCnt() Obtain Number of containers
 * @method void setContainerCnt(integer $ContainerCnt) Set Number of containers
 * @method integer getContainerPause() Obtain Number of paused containers
 * @method void setContainerPause(integer $ContainerPause) Set Number of paused containers
 * @method integer getContainerRunning() Obtain Number of running containers
 * @method void setContainerRunning(integer $ContainerRunning) Set Number of running containers
 * @method integer getContainerStop() Obtain Number of stopped containers
 * @method void setContainerStop(integer $ContainerStop) Set Number of stopped containers
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getDbCnt() Obtain Number of databases
 * @method void setDbCnt(integer $DbCnt) Set Number of databases
 * @method integer getImageCnt() Obtain Number of images
 * @method void setImageCnt(integer $ImageCnt) Set Number of images
 * @method integer getHostOnline() Obtain Number of online servers
 * @method void setHostOnline(integer $HostOnline) Set Number of online servers
 * @method integer getHostCnt() Obtain Number of servers
 * @method void setHostCnt(integer $HostCnt) Set Number of servers
 * @method integer getImageHasRiskInfoCnt() Obtain Number of images at risk
 * @method void setImageHasRiskInfoCnt(integer $ImageHasRiskInfoCnt) Set Number of images at risk
 * @method integer getImageHasVirusCnt() Obtain Number of images with viruses
 * @method void setImageHasVirusCnt(integer $ImageHasVirusCnt) Set Number of images with viruses
 * @method integer getImageHasVulsCnt() Obtain Number of images with vulnerabilities
 * @method void setImageHasVulsCnt(integer $ImageHasVulsCnt) Set Number of images with vulnerabilities
 * @method integer getImageUntrustCnt() Obtain Number of untrusted images
 * @method void setImageUntrustCnt(integer $ImageUntrustCnt) Set Number of untrusted images
 * @method integer getListenPortCnt() Obtain Number of listened ports
 * @method void setListenPortCnt(integer $ListenPortCnt) Set Number of listened ports
 * @method integer getProcessCnt() Obtain Number of processes
 * @method void setProcessCnt(integer $ProcessCnt) Set Number of processes
 * @method integer getWebServiceCnt() Obtain Number of web services
 * @method void setWebServiceCnt(integer $WebServiceCnt) Set Number of web services
 * @method string getLatestImageScanTime() Obtain Last image scan time
 * @method void setLatestImageScanTime(string $LatestImageScanTime) Set Last image scan time
 * @method integer getImageUnsafeCnt() Obtain Number of images at risk
 * @method void setImageUnsafeCnt(integer $ImageUnsafeCnt) Set Number of images at risk
 * @method integer getHostUnInstallCnt() Obtain Number of servers not installed with the agent
 * @method void setHostUnInstallCnt(integer $HostUnInstallCnt) Set Number of servers not installed with the agent
 * @method integer getSuperNodeCnt() Obtain Number of super nodes
 * @method void setSuperNodeCnt(integer $SuperNodeCnt) Set Number of super nodes
 * @method integer getSuperNodeRunningCnt() Obtain Number of running super nodes
 * @method void setSuperNodeRunningCnt(integer $SuperNodeRunningCnt) Set Number of running super nodes
 * @method integer getTodayNewImageCnt() Obtain 
 * @method void setTodayNewImageCnt(integer $TodayNewImageCnt) Set 
 * @method integer getTodayUnsafeImageCnt() Obtain 
 * @method void setTodayUnsafeImageCnt(integer $TodayUnsafeImageCnt) Set 
 * @method integer getRecommendedFixImageCnt() Obtain 
 * @method void setRecommendedFixImageCnt(integer $RecommendedFixImageCnt) Set 
 * @method integer getScannedImageCnt() Obtain 
 * @method void setScannedImageCnt(integer $ScannedImageCnt) Set 
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAssetSummaryResponse extends AbstractModel
{
    /**
     * @var integer Number of applications
     */
    public $AppCnt;

    /**
     * @var integer Number of containers
     */
    public $ContainerCnt;

    /**
     * @var integer Number of paused containers
     */
    public $ContainerPause;

    /**
     * @var integer Number of running containers
     */
    public $ContainerRunning;

    /**
     * @var integer Number of stopped containers
     */
    public $ContainerStop;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Number of databases
     */
    public $DbCnt;

    /**
     * @var integer Number of images
     */
    public $ImageCnt;

    /**
     * @var integer Number of online servers
     */
    public $HostOnline;

    /**
     * @var integer Number of servers
     */
    public $HostCnt;

    /**
     * @var integer Number of images at risk
     */
    public $ImageHasRiskInfoCnt;

    /**
     * @var integer Number of images with viruses
     */
    public $ImageHasVirusCnt;

    /**
     * @var integer Number of images with vulnerabilities
     */
    public $ImageHasVulsCnt;

    /**
     * @var integer Number of untrusted images
     */
    public $ImageUntrustCnt;

    /**
     * @var integer Number of listened ports
     */
    public $ListenPortCnt;

    /**
     * @var integer Number of processes
     */
    public $ProcessCnt;

    /**
     * @var integer Number of web services
     */
    public $WebServiceCnt;

    /**
     * @var string Last image scan time
     */
    public $LatestImageScanTime;

    /**
     * @var integer Number of images at risk
     */
    public $ImageUnsafeCnt;

    /**
     * @var integer Number of servers not installed with the agent
     */
    public $HostUnInstallCnt;

    /**
     * @var integer Number of super nodes
     */
    public $SuperNodeCnt;

    /**
     * @var integer Number of running super nodes
     */
    public $SuperNodeRunningCnt;

    /**
     * @var integer 
     */
    public $TodayNewImageCnt;

    /**
     * @var integer 
     */
    public $TodayUnsafeImageCnt;

    /**
     * @var integer 
     */
    public $RecommendedFixImageCnt;

    /**
     * @var integer 
     */
    public $ScannedImageCnt;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AppCnt Number of applications
     * @param integer $ContainerCnt Number of containers
     * @param integer $ContainerPause Number of paused containers
     * @param integer $ContainerRunning Number of running containers
     * @param integer $ContainerStop Number of stopped containers
     * @param string $CreateTime Creation time
     * @param integer $DbCnt Number of databases
     * @param integer $ImageCnt Number of images
     * @param integer $HostOnline Number of online servers
     * @param integer $HostCnt Number of servers
     * @param integer $ImageHasRiskInfoCnt Number of images at risk
     * @param integer $ImageHasVirusCnt Number of images with viruses
     * @param integer $ImageHasVulsCnt Number of images with vulnerabilities
     * @param integer $ImageUntrustCnt Number of untrusted images
     * @param integer $ListenPortCnt Number of listened ports
     * @param integer $ProcessCnt Number of processes
     * @param integer $WebServiceCnt Number of web services
     * @param string $LatestImageScanTime Last image scan time
     * @param integer $ImageUnsafeCnt Number of images at risk
     * @param integer $HostUnInstallCnt Number of servers not installed with the agent
     * @param integer $SuperNodeCnt Number of super nodes
     * @param integer $SuperNodeRunningCnt Number of running super nodes
     * @param integer $TodayNewImageCnt 
     * @param integer $TodayUnsafeImageCnt 
     * @param integer $RecommendedFixImageCnt 
     * @param integer $ScannedImageCnt 
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
        if (array_key_exists("AppCnt",$param) and $param["AppCnt"] !== null) {
            $this->AppCnt = $param["AppCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("ContainerPause",$param) and $param["ContainerPause"] !== null) {
            $this->ContainerPause = $param["ContainerPause"];
        }

        if (array_key_exists("ContainerRunning",$param) and $param["ContainerRunning"] !== null) {
            $this->ContainerRunning = $param["ContainerRunning"];
        }

        if (array_key_exists("ContainerStop",$param) and $param["ContainerStop"] !== null) {
            $this->ContainerStop = $param["ContainerStop"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DbCnt",$param) and $param["DbCnt"] !== null) {
            $this->DbCnt = $param["DbCnt"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("HostOnline",$param) and $param["HostOnline"] !== null) {
            $this->HostOnline = $param["HostOnline"];
        }

        if (array_key_exists("HostCnt",$param) and $param["HostCnt"] !== null) {
            $this->HostCnt = $param["HostCnt"];
        }

        if (array_key_exists("ImageHasRiskInfoCnt",$param) and $param["ImageHasRiskInfoCnt"] !== null) {
            $this->ImageHasRiskInfoCnt = $param["ImageHasRiskInfoCnt"];
        }

        if (array_key_exists("ImageHasVirusCnt",$param) and $param["ImageHasVirusCnt"] !== null) {
            $this->ImageHasVirusCnt = $param["ImageHasVirusCnt"];
        }

        if (array_key_exists("ImageHasVulsCnt",$param) and $param["ImageHasVulsCnt"] !== null) {
            $this->ImageHasVulsCnt = $param["ImageHasVulsCnt"];
        }

        if (array_key_exists("ImageUntrustCnt",$param) and $param["ImageUntrustCnt"] !== null) {
            $this->ImageUntrustCnt = $param["ImageUntrustCnt"];
        }

        if (array_key_exists("ListenPortCnt",$param) and $param["ListenPortCnt"] !== null) {
            $this->ListenPortCnt = $param["ListenPortCnt"];
        }

        if (array_key_exists("ProcessCnt",$param) and $param["ProcessCnt"] !== null) {
            $this->ProcessCnt = $param["ProcessCnt"];
        }

        if (array_key_exists("WebServiceCnt",$param) and $param["WebServiceCnt"] !== null) {
            $this->WebServiceCnt = $param["WebServiceCnt"];
        }

        if (array_key_exists("LatestImageScanTime",$param) and $param["LatestImageScanTime"] !== null) {
            $this->LatestImageScanTime = $param["LatestImageScanTime"];
        }

        if (array_key_exists("ImageUnsafeCnt",$param) and $param["ImageUnsafeCnt"] !== null) {
            $this->ImageUnsafeCnt = $param["ImageUnsafeCnt"];
        }

        if (array_key_exists("HostUnInstallCnt",$param) and $param["HostUnInstallCnt"] !== null) {
            $this->HostUnInstallCnt = $param["HostUnInstallCnt"];
        }

        if (array_key_exists("SuperNodeCnt",$param) and $param["SuperNodeCnt"] !== null) {
            $this->SuperNodeCnt = $param["SuperNodeCnt"];
        }

        if (array_key_exists("SuperNodeRunningCnt",$param) and $param["SuperNodeRunningCnt"] !== null) {
            $this->SuperNodeRunningCnt = $param["SuperNodeRunningCnt"];
        }

        if (array_key_exists("TodayNewImageCnt",$param) and $param["TodayNewImageCnt"] !== null) {
            $this->TodayNewImageCnt = $param["TodayNewImageCnt"];
        }

        if (array_key_exists("TodayUnsafeImageCnt",$param) and $param["TodayUnsafeImageCnt"] !== null) {
            $this->TodayUnsafeImageCnt = $param["TodayUnsafeImageCnt"];
        }

        if (array_key_exists("RecommendedFixImageCnt",$param) and $param["RecommendedFixImageCnt"] !== null) {
            $this->RecommendedFixImageCnt = $param["RecommendedFixImageCnt"];
        }

        if (array_key_exists("ScannedImageCnt",$param) and $param["ScannedImageCnt"] !== null) {
            $this->ScannedImageCnt = $param["ScannedImageCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
