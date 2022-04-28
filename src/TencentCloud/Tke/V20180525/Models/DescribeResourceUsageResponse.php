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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceUsage response structure.
 *
 * @method ResourceUsage getCRDUsage() Obtain CRD usage
 * @method void setCRDUsage(ResourceUsage $CRDUsage) Set CRD usage
 * @method integer getPodUsage() Obtain Pod usage
 * @method void setPodUsage(integer $PodUsage) Set Pod usage
 * @method integer getConfigMapUsage() Obtain ConfigMap usage
 * @method void setConfigMapUsage(integer $ConfigMapUsage) Set ConfigMap usage
 * @method ResourceUsage getOtherUsage() Obtain Other resource usage
 * @method void setOtherUsage(ResourceUsage $OtherUsage) Set Other resource usage
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeResourceUsageResponse extends AbstractModel
{
    /**
     * @var ResourceUsage CRD usage
     */
    public $CRDUsage;

    /**
     * @var integer Pod usage
     */
    public $PodUsage;

    /**
     * @var integer ConfigMap usage
     */
    public $ConfigMapUsage;

    /**
     * @var ResourceUsage Other resource usage
     */
    public $OtherUsage;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param ResourceUsage $CRDUsage CRD usage
     * @param integer $PodUsage Pod usage
     * @param integer $ConfigMapUsage ConfigMap usage
     * @param ResourceUsage $OtherUsage Other resource usage
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
        if (array_key_exists("CRDUsage",$param) and $param["CRDUsage"] !== null) {
            $this->CRDUsage = new ResourceUsage();
            $this->CRDUsage->deserialize($param["CRDUsage"]);
        }

        if (array_key_exists("PodUsage",$param) and $param["PodUsage"] !== null) {
            $this->PodUsage = $param["PodUsage"];
        }

        if (array_key_exists("ConfigMapUsage",$param) and $param["ConfigMapUsage"] !== null) {
            $this->ConfigMapUsage = $param["ConfigMapUsage"];
        }

        if (array_key_exists("OtherUsage",$param) and $param["OtherUsage"] !== null) {
            $this->OtherUsage = new ResourceUsage();
            $this->OtherUsage->deserialize($param["OtherUsage"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
