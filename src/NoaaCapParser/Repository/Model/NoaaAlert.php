<?php

namespace NoaaCapParser\Repository\Model;

class NoaaAlert
{
    protected $idString;
    protected $idKey;
    protected $updatedTime;
    protected $publishedTime;
    protected $authorName;
    protected $title;
    protected $link;
    protected $summary;
    protected $capEvent;
    protected $capEffectiveTime;
    protected $capExpiresTime;
    protected $capStatus;
    protected $capMsgType;
    protected $capCategory;
    protected $capUrgencyExpected;
    protected $capSeverity;
    protected $capCertainty;
    protected $capAreaDesc;
    protected $capPolygon;
    protected $capGeo;
    protected $capGeoString;
    protected $capParameters;

    public function __construct(string $idString,
                                string $idKey,
                                \DateTime $updatedTime,
                                \DateTime $publishedTime,
                                string $authorName,
                                string $title,
                                string $link,
                                string $summary,
                                string $capEvent,
                                ? \DateTime $capEffectiveTime,
                                ? \DateTime $capExpiresTime,
                                string $capStatus,
                                string $capMsgType,
                                string $capCategory,
                                string $capUrgencyExpected,
                                string $capSeverity,
                                string $capCertainty,
                                string $capAreaDesc,
                                array $capPolygon,
                                array $capGeo,
                                string $capGeoString,
                                string $capParameters)
    {
        $this->idString = $idString;
        $this->idKey = $idKey;
        $this->updatedTime = $updatedTime;
        $this->publishedTime = $publishedTime;
        $this->authorName = $authorName;
        $this->title = $title;
        $this->link = $link;
        $this->summary = $summary;
        $this->capEvent = $capEvent;
        $this->capEffectiveTime = $capEffectiveTime;
        $this->capExpiresTime = $capExpiresTime;
        $this->capStatus = $capStatus;
        $this->capMsgType = $capMsgType;
        $this->capCategory = $capCategory;
        $this->capUrgencyExpected = $capUrgencyExpected;
        $this->capSeverity = $capSeverity;
        $this->capCertainty = $capCertainty;
        $this->capAreaDesc = $capAreaDesc;
        $this->capPolygon = $capPolygon;
        $this->capGeo = $capGeo;
        $this->capGeoString = $capGeoString;
        $this->capParameters = $capParameters;
    }

    public function toArray(): array
    {
        return array(
            'idString' => $this->idString,
            'idKey' => $this->idKey,
            'updatedTime' => $this->updatedTime,
            'publishedTime' => $this->publishedTime,
            'authorName' => $this->authorName,
            'title' => $this->title,
            'link' => $this->link,
            'summary' => $this->summary,
            'capEvent' => $this->capEvent,
            'capEffectiveTime' => $this->capEffectiveTime,
            'capExpiresTime' => $this->capExpiresTime,
            'capStatus' => $this->capStatus,
            'capMsgType' => $this->capMsgType,
            'capCategory' => $this->capCategory,
            'capUrgencyExpected' => $this->capUrgencyExpected,
            'capSeverity' => $this->capSeverity,
            'capCertainty' => $this->capCertainty,
            'capAreaDesc' => $this->capAreaDesc,
            'capPolygon' => $this->capPolygon,
            'capGeo' => $this->capGeo,
            'capGeoString' => $this->capGeoString,
            'capParameters' => $this->capParameters,
        );
    }

    public function getIdString(): string
    {
        return $this->idString;
    }

    public function getIdKey(): string
    {
        return $this->idKey;
    }

    public function getUpdatedTime(): \DateTime
    {
        return $this->updatedTime;
    }

    public function getPublishedTime(): \DateTime
    {
        return $this->publishedTime;
    }

    public function getAuthorName(): string
    {
        return $this->authorName;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function getCapEvent(): string
    {
        return $this->capEvent;
    }

    public function getCapEffectiveTime(): ?\DateTime
    {
        return $this->capEffectiveTime;
    }

    public function getCapExpiresTime(): ?\DateTime
    {
        return $this->capExpiresTime;
    }

    public function getCapStatus(): string
    {
        return $this->capStatus;
    }

    public function getCapMsgType(): string
    {
        return $this->capMsgType;
    }

    public function getCapCategory(): string
    {
        return $this->capCategory;
    }

    public function getCapUrgencyExpected(): string
    {
        return $this->capUrgencyExpected;
    }

    public function getCapSeverity(): string
    {
        return $this->capSeverity;
    }

    public function getCapCertainty(): string
    {
        return $this->capCertainty;
    }

    public function getCapAreaDesc(): string
    {
        return $this->capAreaDesc;
    }

    public function getCapPolygon(): array
    {
        return $this->capPolygon;
    }

    public function getCapGeo(): array
    {
        return $this->capGeo;
    }

    public function getCapGeoString(): string
    {
        return $this->capGeoString;
    }

    public function getCapParameters(): string
    {
        return $this->capParameters;
    }
}