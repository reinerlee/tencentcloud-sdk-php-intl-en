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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateService request structure.
 *
 * @method string getServiceName() Obtain Custom service name. If this parameter is left empty, the system will automatically generate a unique name.
 * @method void setServiceName(string $ServiceName) Set Custom service name. If this parameter is left empty, the system will automatically generate a unique name.
 * @method string getProtocol() Obtain Service frontend request type, such as `http`, `https`, and `http&https`.
 * @method void setProtocol(string $Protocol) Set Service frontend request type, such as `http`, `https`, and `http&https`.
 * @method string getServiceDesc() Obtain Custom service description.
 * @method void setServiceDesc(string $ServiceDesc) Set Custom service description.
 * @method string getExclusiveSetName() Obtain Dedicated cluster name, which is used to specify the dedicated cluster where the service is to be created.
 * @method void setExclusiveSetName(string $ExclusiveSetName) Set Dedicated cluster name, which is used to specify the dedicated cluster where the service is to be created.
 * @method array getNetTypes() Obtain Network type list, which is used to specify the supported network types. INNER: private network access; OUTER: public network access. Default value: OUTER.
 * @method void setNetTypes(array $NetTypes) Set Network type list, which is used to specify the supported network types. INNER: private network access; OUTER: public network access. Default value: OUTER.
 * @method string getIpVersion() Obtain IP version number. Valid values: IPv4, IPv6. Default value: IPv4.
 * @method void setIpVersion(string $IpVersion) Set IP version number. Valid values: IPv4, IPv6. Default value: IPv4.
 * @method string getSetServerName() Obtain Cluster name, which is reserved and used by the `tsf serverless` type.
 * @method void setSetServerName(string $SetServerName) Set Cluster name, which is reserved and used by the `tsf serverless` type.
 * @method string getAppIdType() Obtain User type, which is reserved and can be used by `serverless` users.
 * @method void setAppIdType(string $AppIdType) Set User type, which is reserved and can be used by `serverless` users.
 * @method array getTags() Obtain Tag information.
 * @method void setTags(array $Tags) Set Tag information.
 */
class CreateServiceRequest extends AbstractModel
{
    /**
     * @var string Custom service name. If this parameter is left empty, the system will automatically generate a unique name.
     */
    public $ServiceName;

    /**
     * @var string Service frontend request type, such as `http`, `https`, and `http&https`.
     */
    public $Protocol;

    /**
     * @var string Custom service description.
     */
    public $ServiceDesc;

    /**
     * @var string Dedicated cluster name, which is used to specify the dedicated cluster where the service is to be created.
     */
    public $ExclusiveSetName;

    /**
     * @var array Network type list, which is used to specify the supported network types. INNER: private network access; OUTER: public network access. Default value: OUTER.
     */
    public $NetTypes;

    /**
     * @var string IP version number. Valid values: IPv4, IPv6. Default value: IPv4.
     */
    public $IpVersion;

    /**
     * @var string Cluster name, which is reserved and used by the `tsf serverless` type.
     */
    public $SetServerName;

    /**
     * @var string User type, which is reserved and can be used by `serverless` users.
     */
    public $AppIdType;

    /**
     * @var array Tag information.
     */
    public $Tags;

    /**
     * @param string $ServiceName Custom service name. If this parameter is left empty, the system will automatically generate a unique name.
     * @param string $Protocol Service frontend request type, such as `http`, `https`, and `http&https`.
     * @param string $ServiceDesc Custom service description.
     * @param string $ExclusiveSetName Dedicated cluster name, which is used to specify the dedicated cluster where the service is to be created.
     * @param array $NetTypes Network type list, which is used to specify the supported network types. INNER: private network access; OUTER: public network access. Default value: OUTER.
     * @param string $IpVersion IP version number. Valid values: IPv4, IPv6. Default value: IPv4.
     * @param string $SetServerName Cluster name, which is reserved and used by the `tsf serverless` type.
     * @param string $AppIdType User type, which is reserved and can be used by `serverless` users.
     * @param array $Tags Tag information.
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("ExclusiveSetName",$param) and $param["ExclusiveSetName"] !== null) {
            $this->ExclusiveSetName = $param["ExclusiveSetName"];
        }

        if (array_key_exists("NetTypes",$param) and $param["NetTypes"] !== null) {
            $this->NetTypes = $param["NetTypes"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("SetServerName",$param) and $param["SetServerName"] !== null) {
            $this->SetServerName = $param["SetServerName"];
        }

        if (array_key_exists("AppIdType",$param) and $param["AppIdType"] !== null) {
            $this->AppIdType = $param["AppIdType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
