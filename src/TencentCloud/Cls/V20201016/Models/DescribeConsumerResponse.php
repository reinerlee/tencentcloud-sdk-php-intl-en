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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConsumer response structure.
 *
 * @method boolean getEffective() Obtain Whether the shipping task is effective
 * @method void setEffective(boolean $Effective) Set Whether the shipping task is effective
 * @method boolean getNeedContent() Obtain Whether log metadata is shipped
 * @method void setNeedContent(boolean $NeedContent) Set Whether log metadata is shipped
 * @method ConsumerContent getContent() Obtain Metadata shipped if `NeedContent` is `true`
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setContent(ConsumerContent $Content) Set Metadata shipped if `NeedContent` is `true`
Note: This field may return `null`, indicating that no valid value was found.
 * @method Ckafka getCkafka() Obtain CKafka information
 * @method void setCkafka(Ckafka $Ckafka) Set CKafka information
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeConsumerResponse extends AbstractModel
{
    /**
     * @var boolean Whether the shipping task is effective
     */
    public $Effective;

    /**
     * @var boolean Whether log metadata is shipped
     */
    public $NeedContent;

    /**
     * @var ConsumerContent Metadata shipped if `NeedContent` is `true`
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Content;

    /**
     * @var Ckafka CKafka information
     */
    public $Ckafka;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $Effective Whether the shipping task is effective
     * @param boolean $NeedContent Whether log metadata is shipped
     * @param ConsumerContent $Content Metadata shipped if `NeedContent` is `true`
Note: This field may return `null`, indicating that no valid value was found.
     * @param Ckafka $Ckafka CKafka information
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
        if (array_key_exists("Effective",$param) and $param["Effective"] !== null) {
            $this->Effective = $param["Effective"];
        }

        if (array_key_exists("NeedContent",$param) and $param["NeedContent"] !== null) {
            $this->NeedContent = $param["NeedContent"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ConsumerContent();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = new Ckafka();
            $this->Ckafka->deserialize($param["Ckafka"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
