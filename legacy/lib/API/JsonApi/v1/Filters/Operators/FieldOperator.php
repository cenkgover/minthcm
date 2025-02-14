<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * MintHCM is a Human Capital Management software based on SuiteCRM developed by MintHCM, 
 * Copyright (C) 2018-2023 MintHCM
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by SugarCRM" 
 * logo and "Supercharged by SuiteCRM" logo and "Reinvented by MintHCM" logo. 
 * If the display of the logos is not reasonably feasible for technical reasons, the 
 * Appropriate Legal Notices must display the words "Powered by SugarCRM" and 
 * "Supercharged by SuiteCRM" and "Reinvented by MintHCM".
 */

namespace SuiteCRM\API\JsonApi\v1\Filters\Operators;

use SuiteCRM\Exception\InvalidArgumentException;

/**
 * Class FieldOperator
 * @package SuiteCRM\API\JsonApi\v1\Filters\Operators
 */
class FieldOperator extends Operator
{
    /**
     * string representation of what an operator looks like
     * @var string $tag
     */
    protected $tag = '[operator]';

    /**
     * Represents an the full operator format
     * @var string $operatorFormatRegex
     */
    protected $operatorFormatRegex = '\[[A-Za-z0-9\_\-\.]+\]';

    /**
     * Convert string to operator tag
     * @param $tag
     * @return mixed
     */
    public function toFilterTag($operator)
    {
        return parent::toFilterTag($operator);
    }

    /**
     * @param string $operator
     * @return bool
     * @throws \SuiteCRM\Exception\Exception
     */
    public function isValid($operator)
    {
        if (!is_string($operator)) {
            throw new InvalidArgumentException(
                '[JsonApi][v1][Filters][Operators][FieldOperator][isValid][expected type to be string] $operator'
            );
        }

        return parent::isValid($operator);
    }

    /**
     * @param string $operator
     * @return bool
     * @throws Exception
     */
    public function isOperator($operator)
    {
        if (!is_string($operator)) {
            throw new InvalidArgumentException('[JsonApi][v1][Filters][Operators][FieldOperator][isOperator][expected type to be string] $operator');
        }

        return $this->isValid($operator);
    }

    /**
     * @return int total number of operators or values after the operator
     */
    public function totalOperands()
    {
        return 0;
    }
}
