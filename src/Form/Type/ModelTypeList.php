<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Form\Type;

@trigger_error(sprintf(
    'The %s1$\ModelTypeList class is deprecated since version 3.5 and will be removed in 4.0.'
    .' Use %1$s\ModelListType instead.',
    __NAMESPACE__
), E_USER_DEPRECATED);

/**
 * This type is used to render an hidden input text and 3 links
 *   - an add form modal
 *   - a list modal to select the targeted entities
 *   - a clear selection link.
 *
 * NEXT_MAJOR: remove this class.
 *
 * @deprecated since sonata-project/admin-bundle 3.5, to be removed in 4.0. Use ModelListType instead
 */
class ModelTypeList extends ModelListType
{
}
