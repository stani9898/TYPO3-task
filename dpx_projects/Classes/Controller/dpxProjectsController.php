<?php
namespace Vendor\Projects\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Vendor\Projects\Domain\Repository\ProjectRepository;

class ProjectController extends ActionController
{
    protected $projectRepository;

    public function injectProjectRepository(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function listAction()
    {
        $projects = $this->projectRepository->findAll();
        $this->view->assign('projects', $projects);
    }
}
