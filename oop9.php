<?php

/**
 * Class Music
 * @property string $name
 * @property string $genre
 * @property int $listen
 */
class Music {
    public string $name;
    public string $genre;
    public int $listen;

    /**
     * Music constructor.
     * @param string $name
     * @param string $genre
     * @param int $listen
     */
    public function __construct(string $name, string $genre, int $listen) {
        $this->name = $name;
        $this->genre = $genre;
        $this->listen = $listen;
    }

    /**
     * Get the name of the music
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }
}
?>
