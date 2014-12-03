<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

namespace OKLM\AppBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use OKLM\AppBundle\Entity\Article;

class ArticleListener
{
    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Article) {
            $entity->setCreatedAt(new \DateTime());
            $entity->setUpdatedAt(new \DateTime());
        }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Article) {
            $entity->setUpdatedAt(new \DateTime());
        }
    }
}
