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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name HTTPS acceleration configuration. This is disabled by default.
 *
 * @method string getSwitch() Obtain HTTPS configuration switch: <li>on:Enable;</li> <li>off:Disable.</li>
 * @method void setSwitch(string $Switch) Set HTTPS configuration switch: <li>on:Enable;</li> <li>off:Disable.</li>
 * @method string getHttp2() Obtain Whether to enable HTTP2: <li>on:Enable;</li> <li>off:Disable.</li>
 * @method void setHttp2(string $Http2) Set Whether to enable HTTP2: <li>on:Enable;</li> <li>off:Disable.</li>
 * @method CDNCertInfo getCertInfo() Obtain Server certificate configuration information
 * @method void setCertInfo(CDNCertInfo $CertInfo) Set Server certificate configuration information
 */
class Https extends AbstractModel
{
    /**
     * @var string HTTPS configuration switch: <li>on:Enable;</li> <li>off:Disable.</li>
     */
    public $Switch;

    /**
     * @var string Whether to enable HTTP2: <li>on:Enable;</li> <li>off:Disable.</li>
     */
    public $Http2;

    /**
     * @var CDNCertInfo Server certificate configuration information
     */
    public $CertInfo;

    /**
     * @param string $Switch HTTPS configuration switch: <li>on:Enable;</li> <li>off:Disable.</li>
     * @param string $Http2 Whether to enable HTTP2: <li>on:Enable;</li> <li>off:Disable.</li>
     * @param CDNCertInfo $CertInfo Server certificate configuration information
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = new CDNCertInfo();
            $this->CertInfo->deserialize($param["CertInfo"]);
        }
    }
}