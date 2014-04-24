<?php

namespace Sinoeujobs\JobboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Job management (add, modify, delete, list) functions.
 *
 * @author Bin XIAO <bin@binxiao.com>
 */
class JobController extends Controller
{
    public function listAction()
    {
        return $this->render(
            'SinoeujobsJobboardBundle:Job:list.html.twig');
    }
}