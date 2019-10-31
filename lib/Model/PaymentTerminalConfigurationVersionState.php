<?php
/**
 *  SDK
 *
 * This library allows to interact with the  payment service.
 *  SDK: 2.0.3
 * 
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Wallee\Sdk\Model;
use \Wallee\Sdk\ObjectSerializer;

/**
 * PaymentTerminalConfigurationVersionState model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentTerminalConfigurationVersionState
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'PENDING';
    const SCHEDULING = 'SCHEDULING';
    const ACTIVE = 'ACTIVE';
    const DELETING = 'DELETING';
    const DELETED = 'DELETED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::SCHEDULING,
            self::ACTIVE,
            self::DELETING,
            self::DELETED,
        ];
    }
}

