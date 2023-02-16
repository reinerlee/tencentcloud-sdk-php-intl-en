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
 * DescribeDBFeatures response structure.
 *
 * @method boolean getIsSupportAudit() Obtain Whether database audit is supported
 * @method void setIsSupportAudit(boolean $IsSupportAudit) Set Whether database audit is supported
 * @method boolean getAuditNeedUpgrade() Obtain Whether enabling audit requires a kernel version upgrade
 * @method void setAuditNeedUpgrade(boolean $AuditNeedUpgrade) Set Whether enabling audit requires a kernel version upgrade
 * @method boolean getIsSupportEncryption() Obtain Whether database encryption is supported
 * @method void setIsSupportEncryption(boolean $IsSupportEncryption) Set Whether database encryption is supported
 * @method boolean getEncryptionNeedUpgrade() Obtain Whether enabling encryption requires a kernel version upgrade
 * @method void setEncryptionNeedUpgrade(boolean $EncryptionNeedUpgrade) Set Whether enabling encryption requires a kernel version upgrade
 * @method boolean getIsRemoteRo() Obtain Whether the instance is a remote read-only instance
 * @method void setIsRemoteRo(boolean $IsRemoteRo) Set Whether the instance is a remote read-only instance
 * @method string getMasterRegion() Obtain Region of the source instance
 * @method void setMasterRegion(string $MasterRegion) Set Region of the source instance
 * @method boolean getIsSupportUpdateSubVersion() Obtain Whether minor version upgrade is supported
 * @method void setIsSupportUpdateSubVersion(boolean $IsSupportUpdateSubVersion) Set Whether minor version upgrade is supported
 * @method string getCurrentSubVersion() Obtain The current kernel version
 * @method void setCurrentSubVersion(string $CurrentSubVersion) Set The current kernel version
 * @method string getTargetSubVersion() Obtain Available kernel version for upgrade
 * @method void setTargetSubVersion(string $TargetSubVersion) Set Available kernel version for upgrade
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDBFeaturesResponse extends AbstractModel
{
    /**
     * @var boolean Whether database audit is supported
     */
    public $IsSupportAudit;

    /**
     * @var boolean Whether enabling audit requires a kernel version upgrade
     */
    public $AuditNeedUpgrade;

    /**
     * @var boolean Whether database encryption is supported
     */
    public $IsSupportEncryption;

    /**
     * @var boolean Whether enabling encryption requires a kernel version upgrade
     */
    public $EncryptionNeedUpgrade;

    /**
     * @var boolean Whether the instance is a remote read-only instance
     */
    public $IsRemoteRo;

    /**
     * @var string Region of the source instance
     */
    public $MasterRegion;

    /**
     * @var boolean Whether minor version upgrade is supported
     */
    public $IsSupportUpdateSubVersion;

    /**
     * @var string The current kernel version
     */
    public $CurrentSubVersion;

    /**
     * @var string Available kernel version for upgrade
     */
    public $TargetSubVersion;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $IsSupportAudit Whether database audit is supported
     * @param boolean $AuditNeedUpgrade Whether enabling audit requires a kernel version upgrade
     * @param boolean $IsSupportEncryption Whether database encryption is supported
     * @param boolean $EncryptionNeedUpgrade Whether enabling encryption requires a kernel version upgrade
     * @param boolean $IsRemoteRo Whether the instance is a remote read-only instance
     * @param string $MasterRegion Region of the source instance
     * @param boolean $IsSupportUpdateSubVersion Whether minor version upgrade is supported
     * @param string $CurrentSubVersion The current kernel version
     * @param string $TargetSubVersion Available kernel version for upgrade
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
        if (array_key_exists("IsSupportAudit",$param) and $param["IsSupportAudit"] !== null) {
            $this->IsSupportAudit = $param["IsSupportAudit"];
        }

        if (array_key_exists("AuditNeedUpgrade",$param) and $param["AuditNeedUpgrade"] !== null) {
            $this->AuditNeedUpgrade = $param["AuditNeedUpgrade"];
        }

        if (array_key_exists("IsSupportEncryption",$param) and $param["IsSupportEncryption"] !== null) {
            $this->IsSupportEncryption = $param["IsSupportEncryption"];
        }

        if (array_key_exists("EncryptionNeedUpgrade",$param) and $param["EncryptionNeedUpgrade"] !== null) {
            $this->EncryptionNeedUpgrade = $param["EncryptionNeedUpgrade"];
        }

        if (array_key_exists("IsRemoteRo",$param) and $param["IsRemoteRo"] !== null) {
            $this->IsRemoteRo = $param["IsRemoteRo"];
        }

        if (array_key_exists("MasterRegion",$param) and $param["MasterRegion"] !== null) {
            $this->MasterRegion = $param["MasterRegion"];
        }

        if (array_key_exists("IsSupportUpdateSubVersion",$param) and $param["IsSupportUpdateSubVersion"] !== null) {
            $this->IsSupportUpdateSubVersion = $param["IsSupportUpdateSubVersion"];
        }

        if (array_key_exists("CurrentSubVersion",$param) and $param["CurrentSubVersion"] !== null) {
            $this->CurrentSubVersion = $param["CurrentSubVersion"];
        }

        if (array_key_exists("TargetSubVersion",$param) and $param["TargetSubVersion"] !== null) {
            $this->TargetSubVersion = $param["TargetSubVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
