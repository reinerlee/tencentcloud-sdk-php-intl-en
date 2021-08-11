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
 * Layer-7 forwarding rule
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method array getProxyTypeList() Obtain List of forwarding types
 * @method void setProxyTypeList(array $ProxyTypeList) Set List of forwarding types
 * @method array getRealServers() Obtain List of real servers
 * @method void setRealServers(array $RealServers) Set List of real servers
 * @method array getInstanceDetails() Obtain Anti-DDoS instance configured
 * @method void setInstanceDetails(array $InstanceDetails) Set Anti-DDoS instance configured
 */
class Layer7Rule extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var array List of forwarding types
     */
    public $ProxyTypeList;

    /**
     * @var array List of real servers
     */
    public $RealServers;

    /**
     * @var array Anti-DDoS instance configured
     */
    public $InstanceDetails;

    /**
     * @param string $Domain Domain name
     * @param array $ProxyTypeList List of forwarding types
     * @param array $RealServers List of real servers
     * @param array $InstanceDetails Anti-DDoS instance configured
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ProxyTypeList",$param) and $param["ProxyTypeList"] !== null) {
            $this->ProxyTypeList = [];
            foreach ($param["ProxyTypeList"] as $key => $value){
                $obj = new ProxyTypeInfo();
                $obj->deserialize($value);
                array_push($this->ProxyTypeList, $obj);
            }
        }

        if (array_key_exists("RealServers",$param) and $param["RealServers"] !== null) {
            $this->RealServers = [];
            foreach ($param["RealServers"] as $key => $value){
                $obj = new SourceServer();
                $obj->deserialize($value);
                array_push($this->RealServers, $obj);
            }
        }

        if (array_key_exists("InstanceDetails",$param) and $param["InstanceDetails"] !== null) {
            $this->InstanceDetails = [];
            foreach ($param["InstanceDetails"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetails, $obj);
            }
        }
    }
}