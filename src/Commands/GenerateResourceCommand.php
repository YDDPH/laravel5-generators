<?php 

namespace Yddph\Generators\Commands;

use Illuminate\Console\AppNamespaceDetectorTrait;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Composer;

class GenerateResourceCommand extends Command
{
    use AppNamespaceDetectorTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'generate:resource';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate stuff';

    /**
     * The filesystem instance.
     *
     * @var Filesystem
     */
    protected $files;

    /**
     * @var Composer
     */
    private $composer;

    /**
     * @param Filesystem $filesystem
     * @param Composer $composer
     */
    public function __construct(Filesystem $filesystem, Composer $composer, MakeMigrationCommand $makeMigrationCommand)
    {
        parent::__construct();

        $this->files = $filesystem;
        $this->composer = $composer;
        $this->makeMigrationCommand = $makeMigrationCommand;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        //make migration
        //make model
        //make repository
        //make controller
        //make command
        //make validations?
    }

    private function makeMigration()
    {
        $this->makeMigrationCommand($module, $migration, $params);
    }

    private function makeModel()
    {

    }

    private function makeRepository()
    {

    }

    private function makeCommand()
    {

    }

    private function makeController()
    {

    }

    public function makeRequest()
    {
        
    }

    private function makeTest()
    {

    }

}