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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Anti-DDoS Advanced instance details
 *
 * @method InstanceRelation getInstanceDetail() Obtain Anti-DDoS instance details
 * @method void setInstanceDetail(InstanceRelation $InstanceDetail) Set Anti-DDoS instance details
 * @method BGPIPInstanceSpecification getSpecificationLimit() Obtain Anti-DDoS instance specifications
 * @method void setSpecificationLimit(BGPIPInstanceSpecification $SpecificationLimit) Set Anti-DDoS instance specifications
 * @method BGPIPInstanceUsages getUsage() Obtain Anti-DDoS instance usage statistics
 * @method void setUsage(BGPIPInstanceUsages $Usage) Set Anti-DDoS instance usage statistics
 * @method RegionInfo getRegion() Obtain Region of the Anti-DDoS instance
 * @method void setRegion(RegionInfo $Region) Set Region of the Anti-DDoS instance
 * @method string getStatus() Obtain Status of the Anti-DDoS instance. Valid values:
`idle`: running
`attacking`: under attacks
`blocking`: blocked
`creating`: creating
`deblocking`: unblocking
`isolate`: reprocessed and isolated
 * @method void setStatus(string $Status) Set Status of the Anti-DDoS instance. Valid values:
`idle`: running
`attacking`: under attacks
`blocking`: blocked
`creating`: creating
`deblocking`: unblocking
`isolate`: reprocessed and isolated
 * @method string getExpiredTime() Obtain Purchase time
 * @method void setExpiredTime(string $ExpiredTime) Set Purchase time
 * @method string getCreatedTime() Obtain Expired At
 * @method void setCreatedTime(string $CreatedTime) Set Expired At
 * @method string getName() Obtain Name of the Anti-DDoS instance
 * @method void setName(string $Name) Set Name of the Anti-DDoS instance
 * @method PackInfo getPackInfo() Obtain Package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPackInfo(PackInfo $PackInfo) Set Package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method StaticPackRelation getStaticPackRelation() Obtain Non-BGP package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a non-BGP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStaticPackRelation(StaticPackRelation $StaticPackRelation) Set Non-BGP package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a non-BGP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getZoneId() Obtain Used to differentiate Anti-DDoS Advanced lines outside the Chinese mainland
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setZoneId(integer $ZoneId) Set Used to differentiate Anti-DDoS Advanced lines outside the Chinese mainland
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getTgw() Obtain Used to differentiate clusters
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTgw(integer $Tgw) Set Used to differentiate clusters
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getEipAddressStatus() Obtain EIP states: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`. The EIP must be bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipAddressStatus(string $EipAddressStatus) Set EIP states: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`. The EIP must be bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getEipFlag() Obtain Whether it is an Anti-DDoS EIP instance. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipFlag(integer $EipFlag) Set Whether it is an Anti-DDoS EIP instance. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method EipAddressPackRelation getEipAddressPackRelation() Obtain EIP package details of the Anti-DDoS Advanced instance.
Note: This field is `null` for an Anti-DDoS Advanced instance without using an EIP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipAddressPackRelation(EipAddressPackRelation $EipAddressPackRelation) Set EIP package details of the Anti-DDoS Advanced instance.
Note: This field is `null` for an Anti-DDoS Advanced instance without using an EIP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method EipAddressRelation getEipAddressInfo() Obtain Details of the Anti-DDoS Advanced instance bound to the EIP.
Note: This field is `null` if the EIP is not bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipAddressInfo(EipAddressRelation $EipAddressInfo) Set Details of the Anti-DDoS Advanced instance bound to the EIP.
Note: This field is `null` if the EIP is not bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class BGPIPInstance extends AbstractModel
{
    /**
     * @var InstanceRelation Anti-DDoS instance details
     */
    public $InstanceDetail;

    /**
     * @var BGPIPInstanceSpecification Anti-DDoS instance specifications
     */
    public $SpecificationLimit;

    /**
     * @var BGPIPInstanceUsages Anti-DDoS instance usage statistics
     */
    public $Usage;

    /**
     * @var RegionInfo Region of the Anti-DDoS instance
     */
    public $Region;

    /**
     * @var string Status of the Anti-DDoS instance. Valid values:
`idle`: running
`attacking`: under attacks
`blocking`: blocked
`creating`: creating
`deblocking`: unblocking
`isolate`: reprocessed and isolated
     */
    public $Status;

    /**
     * @var string Purchase time
     */
    public $ExpiredTime;

    /**
     * @var string Expired At
     */
    public $CreatedTime;

    /**
     * @var string Name of the Anti-DDoS instance
     */
    public $Name;

    /**
     * @var PackInfo Package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PackInfo;

    /**
     * @var StaticPackRelation Non-BGP package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a non-BGP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $StaticPackRelation;

    /**
     * @var integer Used to differentiate Anti-DDoS Advanced lines outside the Chinese mainland
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ZoneId;

    /**
     * @var integer Used to differentiate clusters
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Tgw;

    /**
     * @var string EIP states: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`. The EIP must be bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipAddressStatus;

    /**
     * @var integer Whether it is an Anti-DDoS EIP instance. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipFlag;

    /**
     * @var EipAddressPackRelation EIP package details of the Anti-DDoS Advanced instance.
Note: This field is `null` for an Anti-DDoS Advanced instance without using an EIP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipAddressPackRelation;

    /**
     * @var EipAddressRelation Details of the Anti-DDoS Advanced instance bound to the EIP.
Note: This field is `null` if the EIP is not bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipAddressInfo;

    /**
     * @param InstanceRelation $InstanceDetail Anti-DDoS instance details
     * @param BGPIPInstanceSpecification $SpecificationLimit Anti-DDoS instance specifications
     * @param BGPIPInstanceUsages $Usage Anti-DDoS instance usage statistics
     * @param RegionInfo $Region Region of the Anti-DDoS instance
     * @param string $Status Status of the Anti-DDoS instance. Valid values:
`idle`: running
`attacking`: under attacks
`blocking`: blocked
`creating`: creating
`deblocking`: unblocking
`isolate`: reprocessed and isolated
     * @param string $ExpiredTime Purchase time
     * @param string $CreatedTime Expired At
     * @param string $Name Name of the Anti-DDoS instance
     * @param PackInfo $PackInfo Package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param StaticPackRelation $StaticPackRelation Non-BGP package details of the Anti-DDoS instance.
Note: This field is `null` for an Anti-DDoS instance without using a non-BGP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ZoneId Used to differentiate Anti-DDoS Advanced lines outside the Chinese mainland
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $Tgw Used to differentiate clusters
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $EipAddressStatus EIP states: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`. The EIP must be bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $EipFlag Whether it is an Anti-DDoS EIP instance. `1`: Yes; `0`: No.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param EipAddressPackRelation $EipAddressPackRelation EIP package details of the Anti-DDoS Advanced instance.
Note: This field is `null` for an Anti-DDoS Advanced instance without using an EIP package.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param EipAddressRelation $EipAddressInfo Details of the Anti-DDoS Advanced instance bound to the EIP.
Note: This field is `null` if the EIP is not bound to an Anti-DDoS Advanced instance.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("InstanceDetail",$param) and $param["InstanceDetail"] !== null) {
            $this->InstanceDetail = new InstanceRelation();
            $this->InstanceDetail->deserialize($param["InstanceDetail"]);
        }

        if (array_key_exists("SpecificationLimit",$param) and $param["SpecificationLimit"] !== null) {
            $this->SpecificationLimit = new BGPIPInstanceSpecification();
            $this->SpecificationLimit->deserialize($param["SpecificationLimit"]);
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new BGPIPInstanceUsages();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = new RegionInfo();
            $this->Region->deserialize($param["Region"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PackInfo",$param) and $param["PackInfo"] !== null) {
            $this->PackInfo = new PackInfo();
            $this->PackInfo->deserialize($param["PackInfo"]);
        }

        if (array_key_exists("StaticPackRelation",$param) and $param["StaticPackRelation"] !== null) {
            $this->StaticPackRelation = new StaticPackRelation();
            $this->StaticPackRelation->deserialize($param["StaticPackRelation"]);
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Tgw",$param) and $param["Tgw"] !== null) {
            $this->Tgw = $param["Tgw"];
        }

        if (array_key_exists("EipAddressStatus",$param) and $param["EipAddressStatus"] !== null) {
            $this->EipAddressStatus = $param["EipAddressStatus"];
        }

        if (array_key_exists("EipFlag",$param) and $param["EipFlag"] !== null) {
            $this->EipFlag = $param["EipFlag"];
        }

        if (array_key_exists("EipAddressPackRelation",$param) and $param["EipAddressPackRelation"] !== null) {
            $this->EipAddressPackRelation = new EipAddressPackRelation();
            $this->EipAddressPackRelation->deserialize($param["EipAddressPackRelation"]);
        }

        if (array_key_exists("EipAddressInfo",$param) and $param["EipAddressInfo"] !== null) {
            $this->EipAddressInfo = new EipAddressRelation();
            $this->EipAddressInfo->deserialize($param["EipAddressInfo"]);
        }
    }
}