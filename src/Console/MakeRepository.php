<?php

namespace Slokee\Supporter\Console;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeRepository extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates repository files with interface';

    /**
     * The name of repository.
     *
     * @var string
     */
    protected $name;

    /**
     * Path to store repository file
     *
     * @var string
     */
    protected $path = 'Repositories';

    public function handle()
    {
        try {
            $name = Str::studly($this->argument('name'));

            $repositoryPath = app_path("{$this->path}/{$name}Repository.php");
            $interfacePath = app_path("{$this->path}/{$name}RepositoryInterface.php");

            if (File::exists($repositoryPath)) {
                throw new Exception('Repository already exists.');
            }

            File::ensureDirectoryExists(app_path($this->path));

            $stubBasePath = base_path('stubs/supporter');
            $defaultStubPath = __DIR__.'/../../stubs';

            $interfaceStub = File::exists("$stubBasePath/repository-interface.stub")
                ? "$stubBasePath/repository-interface.stub"
                : "$defaultStubPath/repository-interface.stub";

            $repoStub = File::exists("$stubBasePath/repository.stub")
                ? "$stubBasePath/repository.stub"
                : "$defaultStubPath/repository.stub";

            $interfaceContent = str_replace('{{ class }}', "{$name}RepositoryInterface", File::get($interfaceStub));
            $interfaceContent = str_replace('{{ namespace }}', "App\\{$this->path}", $interfaceContent);

            $repoContent = str_replace(['{{ class }}', '{{ interface }}'], ["{$name}Repository", "{$name}RepositoryInterface"], File::get($repoStub));
            $repoContent = str_replace('{{ namespace }}', "App\\{$this->path}", $repoContent);

            File::put($interfacePath, $interfaceContent);
            File::put($repositoryPath, $repoContent);

            $this->info("{$name} Repository created successfully.");
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'name' => ['Please provide the name of Repository.', 'i.e. User'],
        ];
    }
}
