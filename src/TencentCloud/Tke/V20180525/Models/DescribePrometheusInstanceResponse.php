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
 * DescribePrometheusInstance response structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getName() Obtain Instance name
 * @method void setName(string $Name) Set Instance name
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getCOSBucket() Obtain COS bucket name
 * @method void setCOSBucket(string $COSBucket) Set COS bucket name
 * @method string getQueryAddress() Obtain Data query address
 * @method void setQueryAddress(string $QueryAddress) Set Data query address
 * @method PrometheusGrafanaInfo getGrafana() Obtain The grafana related information in the instance
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setGrafana(PrometheusGrafanaInfo $Grafana) Set The grafana related information in the instance
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getAlertManagerUrl() Obtain Custom alertmanager
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setAlertManagerUrl(string $AlertManagerUrl) Set Custom alertmanager
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePrometheusInstanceResponse extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $Name;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string COS bucket name
     */
    public $COSBucket;

    /**
     * @var string Data query address
     */
    public $QueryAddress;

    /**
     * @var PrometheusGrafanaInfo The grafana related information in the instance
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Grafana;

    /**
     * @var string Custom alertmanager
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $AlertManagerUrl;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Name Instance name
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param string $COSBucket COS bucket name
     * @param string $QueryAddress Data query address
     * @param PrometheusGrafanaInfo $Grafana The grafana related information in the instance
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $AlertManagerUrl Custom alertmanager
Note: this field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("COSBucket",$param) and $param["COSBucket"] !== null) {
            $this->COSBucket = $param["COSBucket"];
        }

        if (array_key_exists("QueryAddress",$param) and $param["QueryAddress"] !== null) {
            $this->QueryAddress = $param["QueryAddress"];
        }

        if (array_key_exists("Grafana",$param) and $param["Grafana"] !== null) {
            $this->Grafana = new PrometheusGrafanaInfo();
            $this->Grafana->deserialize($param["Grafana"]);
        }

        if (array_key_exists("AlertManagerUrl",$param) and $param["AlertManagerUrl"] !== null) {
            $this->AlertManagerUrl = $param["AlertManagerUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
