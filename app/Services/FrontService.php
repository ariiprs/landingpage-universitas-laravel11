<?php

namespace App\Services;

use App\Repositories\AboutUsRepository;
use App\Repositories\CategoryArticleRepository;
use App\Repositories\FacilityRepository;
use App\Repositories\FooterRepository;
use App\Repositories\GreetingRepository;
use App\Repositories\HistoryRepository;
use App\Repositories\LecturerRepository;
use App\Repositories\PartnershipRepository;
use App\Repositories\VissionMissionRepository;

class FrontService
{
    protected $categoryArticleRepository;
    protected $facilityRepository;
    protected $footerRepository;
    protected $historyRepository;
    protected $aboutUsRepository;
    protected $lecturerRepository;
    protected $greetingRepository;
    protected $partnershipRepository;
    protected $vissionMissionRepository;

    public function __construct(
        CategoryArticleRepository $categoryArticleRepository,
        FacilityRepository $facilityRepository,
        FooterRepository $footerRepository,
        HistoryRepository $historyRepository,
        AboutUsRepository $aboutUsRepository,
        LecturerRepository $lecturerRepository,
        GreetingRepository $greetingRepository,
        PartnershipRepository $partnershipRepository,
        VissionMissionRepository $vissionMissionRepository
    ) {
        $this->categoryArticleRepository = $categoryArticleRepository;
        $this->facilityRepository = $facilityRepository;
        $this->footerRepository = $footerRepository;
        $this->historyRepository = $historyRepository;
        $this->aboutUsRepository = $aboutUsRepository;
        $this->lecturerRepository = $lecturerRepository;
        $this->greetingRepository = $greetingRepository;
        $this->partnershipRepository = $partnershipRepository;
        $this->vissionMissionRepository = $vissionMissionRepository;
    }

    public function getFrontPageData()
    {
        $partnerships = $this->partnershipRepository->getAllPartnerships();
        $aboutUs = $this->aboutUsRepository->getAllAboutUs();
        $categories = $this->categoryArticleRepository->getAllCategoryArticles();
        $lecturer = $this->lecturerRepository->getAllLecturers();
        $footers = $this->footerRepository->getAllFooters();

        return compact(' categories', 'facilities', 'footers', 'histories', 'aboutUs', 'partnerships');
    }

    public function getHistoryPageData()
    {
        $histories = $this->historyRepository->getAllHistories();

        return compact('histories');
    }

    public function getFacilityPageData()
    {
        $facilities = $this->facilityRepository->getAllFacilities();

        return compact('facilities');
    }

    public function getLecturerPageData()
    {
        $lecturers = $this->lecturerRepository->getAllLecturers();

        return compact('lecturers');
    }

    public function getGreetingsPageData()
    {
        $greeeting = $this->greetingRepository->getAllGreeting();

        return compact('greeeting');
    }

    public function getVissionMissionPageData()
    {
        $vissionMission = $this->vissionMissionRepository->getAllVissionMission();

        return compact('vissionMission');
    }
}
