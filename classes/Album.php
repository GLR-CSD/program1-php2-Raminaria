<?php

class Album
{
    /** @var int|null Het ID van de persoon */
    private ?int $id;

    /** @var string De naam van Het Album */
    private string $naam;

    /** @var string De Artist van Het Album */
    private string $Artist;

    /** @var string De Release_datum van Het Album */
    private string $Release_datum;

    /** @var string De URL van Het Album */
    private string $URL;

    /** @var string De Afbeelding van Het Album */
    private string $Afbeelding;

    /** @var string De Prijs van Het Album */
    private string $Prijs;

    /**
     * @param int|null $id
     * @param string $naam
     * @param string $Artist
     * @param string $Release_datum
     * @param string $URL
     * @param string $Afbeelding
     * @param string $Prijs
     */
    public function __construct(?int $id, string $naam, string $Artist, string $Release_datum, string $URL, string $Afbeelding, string $Prijs)
    {
        $this->id = $id;
        $this->naam = $naam;
        $this->Artist = $Artist;
        $this->Release_datum = $Release_datum;
        $this->URL = $URL;
        $this->Afbeelding = $Afbeelding;
        $this->Prijs = $Prijs;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNaam(): string
    {
        return $this->naam;
    }

    /**
     * @param string $naam
     */
    public function setNaam(string $naam): void
    {
        $this->naam = $naam;
    }

    /**
     * @return string
     */
    public function getArtist(): string
    {
        return $this->Artist;
    }

    /**
     * @param string $Artist
     */
    public function setArtist(string $Artist): void
    {
        $this->Artist = $Artist;
    }

    /**
     * @return string
     */
    public function getReleaseDatum(): string
    {
        return $this->Release_datum;
    }

    /**
     * @param string $Release_datum
     */
    public function setReleaseDatum(string $Release_datum): void
    {
        $this->Release_datum = $Release_datum;
    }

    /**
     * @return string
     */
    public function getURL(): string
    {
        return $this->URL;
    }

    /**
     * @param string $URL
     */
    public function setURL(string $URL): void
    {
        $this->URL = $URL;
    }

    /**
     * @return string
     */
    public function getAfbeelding(): string
    {
        return $this->Afbeelding;
    }

    /**
     * @param string $Afbeelding
     */
    public function setAfbeelding(string $Afbeelding): void
    {
        $this->Afbeelding = $Afbeelding;
    }

    /**
     * @return string
     */
    public function getPrijs(): string
    {
        return $this->Prijs;
    }

    /**
     * @param string $Prijs
     */
    public function setPrijs(string $Prijs): void
    {
        $this->Prijs = $Prijs;
    }



}