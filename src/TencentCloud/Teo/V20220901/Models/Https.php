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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name HTTPS acceleration configuration. This is disabled by default.
 *
 * @method string getHttp2() Obtain Whether to enable HTTP2. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttp2(string $Http2) Set Whether to enable HTTP2. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOcspStapling() Obtain Whether to enable OCSP. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOcspStapling(string $OcspStapling) Set Whether to enable OCSP. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTlsVersion() Obtain TLS version. Values:
<li>`TLSv1`: TLSv1 version</li>
<li>`TLSV1.1`: TLSv1.1 version</li>
<li>`TLSV1.2`: TLSv1.2 version</li>
<li>`TLSv1.3`: TLSv1.3 version</li>Only consecutive versions can be enabled at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTlsVersion(array $TlsVersion) Set TLS version. Values:
<li>`TLSv1`: TLSv1 version</li>
<li>`TLSV1.1`: TLSv1.1 version</li>
<li>`TLSV1.2`: TLSv1.2 version</li>
<li>`TLSv1.3`: TLSv1.3 version</li>Only consecutive versions can be enabled at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Hsts getHsts() Obtain HSTS Configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHsts(Hsts $Hsts) Set HSTS Configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCertInfo() Obtain The certificate configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertInfo(array $CertInfo) Set The certificate configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Https extends AbstractModel
{
    /**
     * @var string Whether to enable HTTP2. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Http2;

    /**
     * @var string Whether to enable OCSP. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OcspStapling;

    /**
     * @var array TLS version. Values:
<li>`TLSv1`: TLSv1 version</li>
<li>`TLSV1.1`: TLSv1.1 version</li>
<li>`TLSV1.2`: TLSv1.2 version</li>
<li>`TLSv1.3`: TLSv1.3 version</li>Only consecutive versions can be enabled at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TlsVersion;

    /**
     * @var Hsts HSTS Configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Hsts;

    /**
     * @var array The certificate configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertInfo;

    /**
     * @param string $Http2 Whether to enable HTTP2. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OcspStapling Whether to enable OCSP. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TlsVersion TLS version. Values:
<li>`TLSv1`: TLSv1 version</li>
<li>`TLSV1.1`: TLSv1.1 version</li>
<li>`TLSV1.2`: TLSv1.2 version</li>
<li>`TLSv1.3`: TLSv1.3 version</li>Only consecutive versions can be enabled at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Hsts $Hsts HSTS Configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CertInfo The certificate configuration.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("OcspStapling",$param) and $param["OcspStapling"] !== null) {
            $this->OcspStapling = $param["OcspStapling"];
        }

        if (array_key_exists("TlsVersion",$param) and $param["TlsVersion"] !== null) {
            $this->TlsVersion = $param["TlsVersion"];
        }

        if (array_key_exists("Hsts",$param) and $param["Hsts"] !== null) {
            $this->Hsts = new Hsts();
            $this->Hsts->deserialize($param["Hsts"]);
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = [];
            foreach ($param["CertInfo"] as $key => $value){
                $obj = new ServerCertInfo();
                $obj->deserialize($value);
                array_push($this->CertInfo, $obj);
            }
        }
    }
}