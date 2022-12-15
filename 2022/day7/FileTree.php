<?php

class FileTree
{
    public function __construct()
    {
        $this->path = "";
        $this->tree = [];
    }

    public static function fromInput(string $puzzle_input)
    {
        foreach (explode('\n', $puzzle_input) as $line) {
            $lineSplit = explode(' ', $line);

            if ($lineSplit[0] === '$') {

                $command = $lineSplit[1];
                $parameter = null;

                if (count($lineSplit) > 2) {
                    $parameter = $lineSplit[2];
                }

                self->executeCommand($command, $parameter);

            } elseif ($lineSplit[0] === 'dir') {
            
            }
        }
    }

    private function executeCommand(string $command, string $parameter): void
    {
        if ($command === 'ls') {
            return;
        }

        if ($command === 'cd') {
            $this->changeDirectory($parameter);
            return;
        }
    }

    private function changeDirectory(string $directory): void
    {
        if ($directory === '..') {
            $this->path = str_replace($this->getCurrentDirectory(), "", $this->path);
        }

        if ($directory === '/') {
            return;
        }

        $this->path .= '/' . $directory;
    }

    private function attachToFileTree(string $path, string $typeOrSize, string $name): void
    {

    }

    private function getCurrentDirectory(): string
    {
        $pathSplit = explode("/", $this->path);
        return $pathSplit[count($pathSplit) - 1];
    }
}