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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetResources response structure.
 *
 * @method string getPaginationToken() Obtain Token value obtained for the next page
 * @method void setPaginationToken(string $PaginationToken) Set Token value obtained for the next page
 * @method array getResourceTagMappingList() Obtain List of resources and their associated tags (key-value pairs)
 * @method void setResourceTagMappingList(array $ResourceTagMappingList) Set List of resources and their associated tags (key-value pairs)
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetResourcesResponse extends AbstractModel
{
    /**
     * @var string Token value obtained for the next page
     */
    public $PaginationToken;

    /**
     * @var array List of resources and their associated tags (key-value pairs)
     */
    public $ResourceTagMappingList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $PaginationToken Token value obtained for the next page
     * @param array $ResourceTagMappingList List of resources and their associated tags (key-value pairs)
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
        if (array_key_exists("PaginationToken",$param) and $param["PaginationToken"] !== null) {
            $this->PaginationToken = $param["PaginationToken"];
        }

        if (array_key_exists("ResourceTagMappingList",$param) and $param["ResourceTagMappingList"] !== null) {
            $this->ResourceTagMappingList = [];
            foreach ($param["ResourceTagMappingList"] as $key => $value){
                $obj = new ResourceTagMapping();
                $obj->deserialize($value);
                array_push($this->ResourceTagMappingList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}