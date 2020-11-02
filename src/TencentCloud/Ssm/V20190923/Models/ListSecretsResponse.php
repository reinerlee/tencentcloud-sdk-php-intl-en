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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSecrets response structure.
 *
 * @method integer getTotalCount() Obtain Number of filtered Secrets according to `State` and `SearchSecretName`.
 * @method void setTotalCount(integer $TotalCount) Set Number of filtered Secrets according to `State` and `SearchSecretName`.
 * @method array getSecretMetadatas() Obtain List of Secret information.
 * @method void setSecretMetadatas(array $SecretMetadatas) Set List of Secret information.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListSecretsResponse extends AbstractModel
{
    /**
     * @var integer Number of filtered Secrets according to `State` and `SearchSecretName`.
     */
    public $TotalCount;

    /**
     * @var array List of Secret information.
     */
    public $SecretMetadatas;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Number of filtered Secrets according to `State` and `SearchSecretName`.
     * @param array $SecretMetadatas List of Secret information.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SecretMetadatas",$param) and $param["SecretMetadatas"] !== null) {
            $this->SecretMetadatas = [];
            foreach ($param["SecretMetadatas"] as $key => $value){
                $obj = new SecretMetadata();
                $obj->deserialize($value);
                array_push($this->SecretMetadatas, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
