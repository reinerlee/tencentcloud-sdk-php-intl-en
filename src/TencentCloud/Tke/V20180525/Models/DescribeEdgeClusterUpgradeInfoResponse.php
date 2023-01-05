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
 * DescribeEdgeClusterUpgradeInfo response structure.
 *
 * @method string getComponentVersion() Obtain Upgradeable cluster component
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setComponentVersion(string $ComponentVersion) Set Upgradeable cluster component
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getEdgeVersionCurrent() Obtain Current version of the edge cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEdgeVersionCurrent(string $EdgeVersionCurrent) Set Current version of the edge cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRegistryPrefix() Obtain Prefix of the image registry of an edge component (including domain name and namespace)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRegistryPrefix(string $RegistryPrefix) Set Prefix of the image registry of an edge component (including domain name and namespace)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getClusterUpgradeStatus() Obtain Cluster upgrade status. Valid values: `Running`, `Updating`, `Failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setClusterUpgradeStatus(string $ClusterUpgradeStatus) Set Cluster upgrade status. Valid values: `Running`, `Updating`, `Failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getClusterUpgradeStatusReason() Obtain Reason for `Updating` or `Failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setClusterUpgradeStatusReason(string $ClusterUpgradeStatusReason) Set Reason for `Updating` or `Failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeEdgeClusterUpgradeInfoResponse extends AbstractModel
{
    /**
     * @var string Upgradeable cluster component
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ComponentVersion;

    /**
     * @var string Current version of the edge cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EdgeVersionCurrent;

    /**
     * @var string Prefix of the image registry of an edge component (including domain name and namespace)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RegistryPrefix;

    /**
     * @var string Cluster upgrade status. Valid values: `Running`, `Updating`, `Failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClusterUpgradeStatus;

    /**
     * @var string Reason for `Updating` or `Failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClusterUpgradeStatusReason;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ComponentVersion Upgradeable cluster component
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $EdgeVersionCurrent Current version of the edge cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RegistryPrefix Prefix of the image registry of an edge component (including domain name and namespace)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ClusterUpgradeStatus Cluster upgrade status. Valid values: `Running`, `Updating`, `Failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ClusterUpgradeStatusReason Reason for `Updating` or `Failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("ComponentVersion",$param) and $param["ComponentVersion"] !== null) {
            $this->ComponentVersion = $param["ComponentVersion"];
        }

        if (array_key_exists("EdgeVersionCurrent",$param) and $param["EdgeVersionCurrent"] !== null) {
            $this->EdgeVersionCurrent = $param["EdgeVersionCurrent"];
        }

        if (array_key_exists("RegistryPrefix",$param) and $param["RegistryPrefix"] !== null) {
            $this->RegistryPrefix = $param["RegistryPrefix"];
        }

        if (array_key_exists("ClusterUpgradeStatus",$param) and $param["ClusterUpgradeStatus"] !== null) {
            $this->ClusterUpgradeStatus = $param["ClusterUpgradeStatus"];
        }

        if (array_key_exists("ClusterUpgradeStatusReason",$param) and $param["ClusterUpgradeStatusReason"] !== null) {
            $this->ClusterUpgradeStatusReason = $param["ClusterUpgradeStatusReason"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
