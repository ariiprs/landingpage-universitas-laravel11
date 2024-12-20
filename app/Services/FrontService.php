<?php

namespace App\Services;

use App\Repositories\CategoryArticleRepository;
use App\Repositories\FacilityRepository;
use App\Repositories\FooterRepository;
use App\Repositories\HistoryRepository;

class FrontService
{
    protected $categoryArticleRepository;
    protected $facilityRepository;
    protected $footerRepository;
    protected $historyRepository;

    public function __construct(
        CategoryArticleRepository $categoryArticleRepository,
        FacilityRepository $facilityRepository,
        FooterRepository $footerRepository,
        HistoryRepository $historyRepository
    ) {
        $this->categoryArticleRepository = $categoryArticleRepository;
        $this->facilityRepository = $facilityRepository;
        $this->footerRepository = $footerRepository;
        $this->historyRepository = $historyRepository;
    }

    public function getFrontPageData()
    {
        $categories = $this->categoryArticleRepository->getAllCategoryArticles();
        $footers = $this->footerRepository->getAllFooters();

        return compact('categories', 'facilities', 'footers', 'histories');
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
}