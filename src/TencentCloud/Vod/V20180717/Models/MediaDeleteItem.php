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
 * Content to be deleted when a VOD video is deleted

 *
 * @method string getType() Obtain The type of files to delete. If this parameter is left empty, it will be invalid. Valid values:
<li>`OriginalFiles`: The original file. After deleting an original file, you can no longer perform operations such as transcoding or WeChat publishing on the file ID.</li>
<li>`TranscodeFiles`: Transcoding outputs</li>
<li>`AdaptiveDynamicStreamingFiles`: Adaptive bitrate outputs</li>
<li>`WechatPublishFiles`: The file for WeChat publishing</li>
 * @method void setType(string $Type) Set The type of files to delete. If this parameter is left empty, it will be invalid. Valid values:
<li>`OriginalFiles`: The original file. After deleting an original file, you can no longer perform operations such as transcoding or WeChat publishing on the file ID.</li>
<li>`TranscodeFiles`: Transcoding outputs</li>
<li>`AdaptiveDynamicStreamingFiles`: Adaptive bitrate outputs</li>
<li>`WechatPublishFiles`: The file for WeChat publishing</li>
 * @method integer getDefinition() Obtain ID of the template for which to delete the videos of the type specified by the `Type` parameter. For the template definition, please see [Transcoding Template](https://intl.cloud.tencent.com/document/product/266/33478?from_cn_redirect=1#.3Cspan-id-.3D-.22zm.22-.3E.3C.2Fspan.3E.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
Default value: 0, which indicates to delete all videos of the type specified by the `Type` parameter.
 * @method void setDefinition(integer $Definition) Set ID of the template for which to delete the videos of the type specified by the `Type` parameter. For the template definition, please see [Transcoding Template](https://intl.cloud.tencent.com/document/product/266/33478?from_cn_redirect=1#.3Cspan-id-.3D-.22zm.22-.3E.3C.2Fspan.3E.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
Default value: 0, which indicates to delete all videos of the type specified by the `Type` parameter.
 */
class MediaDeleteItem extends AbstractModel
{
    /**
     * @var string The type of files to delete. If this parameter is left empty, it will be invalid. Valid values:
<li>`OriginalFiles`: The original file. After deleting an original file, you can no longer perform operations such as transcoding or WeChat publishing on the file ID.</li>
<li>`TranscodeFiles`: Transcoding outputs</li>
<li>`AdaptiveDynamicStreamingFiles`: Adaptive bitrate outputs</li>
<li>`WechatPublishFiles`: The file for WeChat publishing</li>
     */
    public $Type;

    /**
     * @var integer ID of the template for which to delete the videos of the type specified by the `Type` parameter. For the template definition, please see [Transcoding Template](https://intl.cloud.tencent.com/document/product/266/33478?from_cn_redirect=1#.3Cspan-id-.3D-.22zm.22-.3E.3C.2Fspan.3E.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
Default value: 0, which indicates to delete all videos of the type specified by the `Type` parameter.
     */
    public $Definition;

    /**
     * @param string $Type The type of files to delete. If this parameter is left empty, it will be invalid. Valid values:
<li>`OriginalFiles`: The original file. After deleting an original file, you can no longer perform operations such as transcoding or WeChat publishing on the file ID.</li>
<li>`TranscodeFiles`: Transcoding outputs</li>
<li>`AdaptiveDynamicStreamingFiles`: Adaptive bitrate outputs</li>
<li>`WechatPublishFiles`: The file for WeChat publishing</li>
     * @param integer $Definition ID of the template for which to delete the videos of the type specified by the `Type` parameter. For the template definition, please see [Transcoding Template](https://intl.cloud.tencent.com/document/product/266/33478?from_cn_redirect=1#.3Cspan-id-.3D-.22zm.22-.3E.3C.2Fspan.3E.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
Default value: 0, which indicates to delete all videos of the type specified by the `Type` parameter.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }
    }
}
