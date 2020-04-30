<?php


namespace App\Controller;

use App\Model\HistoryManager;
use App\Model\WebcamManager;

class CityController extends AbstractController
{/*
    public function showCityName()
    {
        $webcamManager = new WebcamManager();
        $cities = $webcamManager->selectAllCity();
        return $this->twig->render('City/index.html.twig', ['cities' => $cities]);
    }

        /**
         * Display item informations specified by $id
         *
         * @param int $id
         * @return string
         * @throws \Twig\Error\LoaderError
         * @throws \Twig\Error\RuntimeError
         * @throws \Twig\Error\SyntaxError
         */

    public function show(string $id)
    {
        $historyManager = new HistoryManager();
        $cityPage = $historyManager->selectOneById($id);
        return $this->twig->render('City/index.html.twig', ['city' => $cityPage]);
    }

    public function showAll()
    {
        $historyManager = new HistoryManager();
        $city = $historyManager->selectAll();
        return $this->twig->render('City/index.html.twig', ['city' => $city]);
    }
}
