<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

namespace OKLM\AppBundle\Manager;

use OKLM\AppBundle\Entity\ArticleRepository;
use OKLM\CommonBundle\Manager\BaseManager;

class ArticleManager extends BaseManager
{
    /**
     * @return ArticleRepository
     */
    public function getRepository()
    {
        return parent::getRepository();
    }
}
