<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CoreBundle\Model;

@trigger_error(
    'The '.__NAMESPACE__.'\BaseEntityManager class is deprecated since version 3.x and will be removed in 4.0.'
    .' Use Sonata\Doctrine\Entity\BaseEntityManager instead.',
    E_USER_DEPRECATED
);

/**
 * @author Sylvain Deloux <sylvain.deloux@ekino.com>
 *
 * @deprecated since 3.x, to be removed in 4.0.
 */
abstract class BaseEntityManager extends \Sonata\Doctrine\Entity\BaseEntityManager implements ManagerInterface
{
}
